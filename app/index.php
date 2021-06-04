<?php
require_once './functions/functions.php';
require_once '../vendor/autoload.php';

use GeoIp2\Database\Reader;

/* GEO2IP2 Class Instance */
$reader = new Reader('./geo2ip/GeoLite2-City.mmdb');

$record = $reader->city(getIpAddress());

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HERE MAPS -->
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <title>PrivacyCheck</title>
</head>

<body>
    <!-- HEADER -->
    <header class="main-header">
        <h1>Privacy Checker</h1>
        <img src="./assets/img/shield.png">
        <p>Do you care about your personal data?</p>
    </header>

    <!-- MAIN CONTENT -->

    <main>
        <div id="main-wrapper">
            <!-- Network Information -->
            <section class="info-box">
                <div class="info-box__bar">
                    <h2 class="info-box__title info-box__title--network">
                        Network Information
                    </h2>
                    <p class="info-box__exit">X</p>
                </div>
                <p>
                    $ Your IP address is:
                    <span class="info-box__data"><?= getIpAddress(); ?></span>
                </p>
                <p>
                    $ Your ISP is:
                    <span class="info-box__data"><?= getISP(); ?></span>
                </p>
            </section>

            <!-- Localization Information -->
            <section class="info-box">
                <div class="info-box__bar">
                    <h2 class="info-box__title  info-box__title--localization">
                        Localization Information
                    </h2>
                    <p class="info-box__exit">X</p>
                </div>

                <p>
                    $ Your country is:
                    <span class="info-box__data"><?= $record->country->name ?></span>
                </p>
                <p>
                    $ Your region is:
                    <span class="info-box__data"><?= $record->mostSpecificSubdivision->name ?></span>
                </p>
                <p>
                    $ Your postal code is:
                    <span class="info-box__data"><?= $record->postal->code ?></span>
                </p>
                <p>
                    $ Your city is:
                    <span class="info-box__data"><?= $record->city->name ?></span>
                </p>
                <p>
                    $ Your latitude/longitude is:
                    <span class="info-box__data"><?= $record->location->latitude . ' / ' . $record->location->longitude ?></span>
                </p>
                <p>
                    $ You're probably somewhere around here :
                    <span class="info-box__data"><?= $record->mostSpecificSubdivision->name ?></span>
                </p>
            </section>

            <!-- Map -->
            <section class="info-box">
                <div class="info-box__bar">
                    <h2 class="info-box__title">
                        Map
                    </h2>
                    <p class="info-box__exit">X</p>
                    <div id="mapContainer" data-lat="<?= $record->location->latitude ?>" data-lon="<?= $record->location->longitude ?>"></div>
                </div>
            </section>

            <!-- Local Machine Information -->
            <section class="info-box">
                <div class="info-box__bar">
                    <h2 class="info-box__title info-box__title--machine">
                        Local Machine Information
                    </h2>
                    <p class="info-box__exit">X</p>
                </div>
                <p>
                    $ Your OS is:
                    <span class="info-box__data"><?= getOS(); ?></span>
                </p>
                <p>
                    $ Your web browser is:
                    <span class="info-box__data"><?= getBrowser(); ?></span>
                </p>
                <p>
                    $ Your local time is:
                    <span class="info-box__data localtime">Work In Progress</span>
                </p>
                <p>
                    $ Your screen resolution is:
                    <span class="info-box__data screen-resolution">Work In Progress</span>
                </p>
            </section>
        </div>
        <script src="./functions/jsFunctions.js"></script>
        <script src="./functions/map.js"></script>
    </main>
</body>

</html>