<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Convert bookmarklet to Chrome extension</title>
        <meta name="description" content="Convert bookmarklet to Chrome extension">
        <meta name="author" content="Peter Legierski - self.li">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="skin/css/form.css">
    </head>

    <body>

        <div class="wrapper">
            <a href="http://blog.self.li/post/16366939413/how-to-convert-bookmarklet-to-chrome-extension" class="go-back">&larr; go back to the blog post</a>
            <h3>Convert bookmarklet to Chrome extension</h3>
            <form action="" method="post" name="form">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="desc" placeholder="Description">
                <textarea name="bookmarklet" placeholder="/* drag bookmarklet here */"></textarea><br>
                <input type="submit" value="Generate extension">
            </form>

            <p>
                <strong>Instructions</strong><br>
                1. Type name, description and drag bookmarklet into form above.<br>
                2. Click "Generate extension" to download zipped extension.<br>
                3. Unzip downloaded file.<br>
                4. Go to <a href="chrome://settings/extensions" target="_blank">extensions settings</a> <- right click and open this link in new tab.<br>
                5. Tick "Developer mode" (top right).<br>
                6. Click "Load unpacked extension..." and select unzipped folder.<br>
                7. Job done! Your new extension is loaded (the black dot).

            </p>
        </div>

        <!--[if lt IE 7 ]>
          <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
          <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->

        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-27961627-1']);
            _gaq.push(['_setDomainName', '.self.li']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </body>
</html>