<?php

/* 
- Adresse IPv4
- Adresse IPv6 (optionnel)
- Nom du FAI
- Ville correspondant à l'utilisateur
- Pays correspondant à l'utilisateur
- Navigateur de l'utilisateur
- OS de l'utilisateur
- Page visitée avant la page actuelle
- Horloge de l'ordinateur de l'utilisateur
- Résolution d'écran de l'utilisateur
*/

function getIp()
{
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    return $ip_address;
}

function getISP()
{
    return gethostbyaddr($_SERVER['REMOTE_ADDR']);
}

function getIspName()
{
    return geoip_isp_by_name($_SERVER['REMOTE_ADDR']);
    
}

function getCity()
{
}

function getCountry()
{
}

function getOS()
{
}

function getLastPage()
{
    return $_SERVER['HTTP_REFERER'];
}

function getLocalTime()
{
}

function getScreenResolution()
{
}

echo '$ Your IP address is: ' . getIp();
echo '<br>';
echo '$ Last page visited is: ' . getLastPage();
echo '<br>';
echo '$ Your ISP is: ' . getISP();
echo '<br>';
echo '$ Your ISP name is: ';