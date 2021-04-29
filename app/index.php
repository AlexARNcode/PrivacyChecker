<?php
require_once('./functions/functions.php');
require_once '../vendor/autoload.php';
use GeoIp2\Database\Reader;

$reader = new Reader('./geo2ip/GeoLite2-City.mmdb');

// Replace "city" with the appropriate method for your database, e.g.,
// "country".
$record = $reader->city('91.162.88.86');

print($record->country->isoCode . "\n"); // 'US'
print($record->country->name . "\n"); // 'United States'
print($record->country->names['zh-CN'] . "\n"); // '美国'

print($record->mostSpecificSubdivision->name . "\n"); // 'Minnesota'
print($record->mostSpecificSubdivision->isoCode . "\n"); // 'MN'

print($record->city->name . "\n"); // 'Minneapolis'

print($record->postal->code . "\n"); // '55455'

print($record->location->latitude . "\n"); // 44.9733
print($record->location->longitude . "\n"); // -93.2323

print($record->traits->network . "\n"); // '128.101.101.101/32'
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
    <div class="container">
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
                    <span class="terminal__maintext terminal__maintext--result terminal__maintext--1">
                        <?= getIpAddress(); ?>
                    </span>
                </p>
                <p class="terminal__maintext">
                    $ Your ISP is :
                    <span class="terminal__maintext terminal__maintext--result terminal__maintext--2">
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
                    <span class="terminal__maintext terminal__maintext--result terminal__maintext--3">
                        <?= getOS(); ?>
                    </span>
                </p>
                <p class="terminal__maintext">
                    $ Your web browser is :
                    <span class="terminal__maintext terminal__maintext--result terminal__maintext--4">
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
                    <span class="terminal__maintext terminal__maintext--result terminal__maintext--5 localtime">
                        Work In Progress
                    </span>
                </p>
                <p class="terminal__maintext">
                    $ Your screen resolution is :
                    <span class="terminal__maintext terminal__maintext--result terminal__maintext--6 screen-resolution">
                        Work In Progress
                    </span>
                </p>
            </div>
        </section>
    </div>
    <script src="./functions/jsFunctions.js"></script>
</body>

</html>