<?php
require_once('./functions/functions.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PrivacyCheck</title>
</head>

<body>
    <!-- TERMINAL -->
    <section class="terminal">
        <!-- TERMINAL TOP MENU -->
        <div class="terminal__menu">
            <div class="terminal__button terminal__button--red"></div>
            <div class="terminal__button terminal__button--yellow"></div>
            <div class="terminal__button terminal__button--green"></div>
            <div class="terminal__title">./Privacy_Checker.sh</div>
        </div>

        <!-- TERMINAL SCREEN -->
        <div class="terminal__screen">
            <p class="terminal__maintext">
                $ Your IP address is:
                <span class="terminal__maintext terminal__maintext--result">
                    <?= getIpAddress(); ?>
                </span>
            </p>

            <p class="terminal__maintext">
                $ Your ISP is :
                <span class="terminal__maintext terminal__maintext--result">
                    <?= getISP(); ?>
                </span>
            </p>

            <!-- <p class="terminal__maintext">
                $ Your country is :
                <span class="terminal__maintext terminal__maintext--result">
                    France
                </span>
            </p> -->

 <!--            <p class="terminal__maintext">
                $ Your city is :
                <span class="terminal__maintext terminal__maintext--result">
                    Paris
                </span>
            </p>
 -->
            <p class="terminal__maintext">
                $ Your OS is :
                <span class="terminal__maintext terminal__maintext--result">
                    <?= getOS(); ?>
                </span>
            </p>

            <p class="terminal__maintext">
                $ Your web browser is :
                <span class="terminal__maintext terminal__maintext--result">
                    <?= getBrowser(); ?>
                </span>
            </p>

            <!-- <p class="terminal__maintext">
                $ You visited this page before :
                <span class="terminal__maintext terminal__maintext--result">
                    http://www.google.fr
                </span>
            </p> -->

            <p class="terminal__maintext">
                $ Your local time is :
                <span class="terminal__maintext terminal__maintext--result localtime">
                    Work In Progress
                </span>
            </p>

            <p class="terminal__maintext">
                $ Your screen resolution is :
                <span class="terminal__maintext terminal__maintext--result screen-resolution">
                    Work In Progress
                </span>
            </p>
        </div>
    </section>
    <script src="./functions/jsFunctions.js"></script>
</body>

</html>