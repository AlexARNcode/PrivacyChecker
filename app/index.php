<?php
require_once './functions/functions.php';
require_once '../vendor/autoload.php';

use GeoIp2\Database\Reader;

$reader = new Reader('./geo2ip/GeoLite2-City.mmdb');

// Replace "city" with the appropriate method for your database, e.g.,
// "country".
$record = $reader->city(getIpAddress());

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
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
            <!-- Network Information -->
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

                <!-- Localization information -->
                <p class="terminal__maintext">
                    $ Your country is :
                    <span class="terminal__maintext terminal__maintext--result">
                        <?= $record->country->name ?>
                    </span>
                </p>

                <p class="terminal__maintext">
                    $ Your region is :
                    <span class="terminal__maintext terminal__maintext--result">
                        <?= $record->mostSpecificSubdivision->name ?>
                    </span>
                </p>

                <p class="terminal__maintext">
                    $ Your postal code is :
                    <span class="terminal__maintext terminal__maintext--result">
                        <?= $record->postal->code ?>
                    </span>
                </p>

                <p class="terminal__maintext">
                    $ Your city is :
                    <span class="terminal__maintext terminal__maintext--result">
                        <?= $record->city->name ?>
                    </span>
                </p>

                <p class="terminal__maintext">
                    $ You latitude/longitude is :
                    <span class="terminal__maintext terminal__maintext--result">
                        <?= $record->location->latitude . ' / ' . $record->location->longitude ?>
                    </span>
                </p>

                <p class="terminal__maintext">
                    $ You're probably somewhere around here :
                    <span class="terminal__maintext terminal__maintext--result">
                        <?= $record->mostSpecificSubdivision->name ?>
                    </span>
                </p>

                <!-- Map of user localization -->
                <div id="mapContainer" data-lat="<?= $record->location->latitude ?>" data-lon="<?= $record->location->longitude ?>"></div>


                <!-- Local machine info -->
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
    <script src="./functions/map.js"></script>
</body>

</html>