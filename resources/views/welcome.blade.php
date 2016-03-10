<!DOCTYPE html>
<html lang="en">
    <head itemscope itemtype="http://schema.org/WebSite">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title itemprop="name">Pedreaux's</title>
        <link rel="canonical" itemprop="url" href="http://pedreauxs.com/">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img class="logo" src="images/logo.png" alt="Pedreaux’s">
                <h3>COMING SOON TO HOUSTON!</h3>
                <p>If you're interested in our progress sign up below.</p>
                <form action="/sign-ups" method="POST">
                    {{ csrf_field() }}
                    <p class="input">
                        <input type="text" class="button" name="email" placeholder="NAME@EXAMPLE.COM" required>
                        <input type="submit" class="button" value="SIGN UP">
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
