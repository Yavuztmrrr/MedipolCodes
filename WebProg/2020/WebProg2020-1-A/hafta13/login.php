<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <link rel="stylesheet" href="icerik/css/stil.css">
</head>

<body>
    <?php
    include './parcali/header.php';
    ?>
    <div class="pure-g">
        <div class="pure-u-1-5 ">
            <div class="cerceveli">
                hashtagler
            </div>
        </div>
        <div class="pure-u-3-5 ">
            <div class="anaicerik cerceveli">
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <legend>Giriş</legend>
                        <label for="stacked-email">Email</label>
                        <input class="pure-input-1" type="email" placeholder="Email" />
                        <span class="pure-form-message">This is a required field.</span>
                        <label for="stacked-password">Password</label>
                        <input class="pure-input-1" id="stacked-password" placeholder="Password" />
                        <label for="stacked-state">State</label>
                        <label for="stacked-remember" class="pure-checkbox">
                            <input type="checkbox" id="stacked-remember" /> Remember me</label>
                        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                    </fieldset>
                </form>
            </div>

        </div>
        <div class="pure-u-1-5 ">
            <div class="cerceveli">
                hesap
            </div>
        </div>
    </div>

    <?php
    include './parcali/footer.php';
    ?>
</body>

</html>