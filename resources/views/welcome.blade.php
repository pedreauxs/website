<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pedreaux's</title>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="images/logo.png" alt="Pedreaux’s">
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
