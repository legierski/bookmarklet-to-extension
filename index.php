<?php
require 'Slim/Slim.php';
$app = new Slim();

$app->get('/', function () {
    include('views/form.php');
});

$app->post('/', function () {

    $manifest = '{
 "background": {"scripts": ["background.js"]},
 "browser_action": {
 "default_icon": "icon-128.png",
 "default_title": "'.htmlspecialchars($_POST['name']).'"
 },
 "name": "'.htmlspecialchars($_POST['name']).'",
 "description": "'.htmlspecialchars($_POST['desc']).' - Created with http://blog.self.li",
 "homepage_url": "http://blog.self.li/post/16366939413/how-to-convert-bookmarklet-to-chrome-extension",
 "icons": {
     "16": "icon-16.png",
     "48": "icon-48.png",
     "128": "icon-128.png" },
 "permissions": [
     "tabs",
     "http://*/*",
     "https://*/*"
 ],
 "version": "0.1",
 "manifest_version": 2
}';

    $background = 'chrome.browserAction.onClicked.addListener(function(tab) {
    chrome.tabs.executeScript(tab.id, {file: "bookmarklet.js"})
});';

    $bookmarklet = rawurldecode(stripslashes($_POST['bookmarklet']));
    if(substr($bookmarklet, 0, 11) == 'javascript:') {
        $bookmarklet = substr($bookmarklet, 11);
    }




    $file = tempnam("tmp", "zip");
    $zip = new ZipArchive();
    $zip->open($file, ZipArchive::OVERWRITE);

    $zip->addFromString('background.js', $background);
    $zip->addFromString('manifest.json', $manifest);
    $zip->addFromString('bookmarklet.js', $bookmarklet);
    $zip->addFile('files/icon-16.png', 'icon-16.png');
    $zip->addFile('files/icon-48.png', 'icon-48.png');
    $zip->addFile('files/icon-128.png', 'icon-128.png');

    $zip->close();
    header('Content-Type: application/zip');
    header('Content-Length: ' . filesize($file));
    header('Content-Disposition: attachment; filename="bookmarklet2extension.zip"');
    readfile($file);
    unlink($file);
});


$app->run();
