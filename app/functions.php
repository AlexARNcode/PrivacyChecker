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

/* 
    ISP Hostnames :
    __ Orange : lfbn-cle-1-798-117.w92-171.abo.wanadoo.fr  / lfbn-bor-1-817-98.w86-234.abo.wanadoo.fr
    __ Free : 91-162-88-86.subs.proxad.net
    __ Bouygues :
    __ SFT : 
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
    $isp = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $ispName = getIspName($isp);

    return $ispName;
}

function getIspName($isp)
{
    $ispName = '';

    if (strpos($isp, 'proxad')) {
        $ispName = 'Free (' . $isp . ')';
    }
    else if (strpos($isp, 'wanadoo')) {
        $ispName = 'Orange (' . $isp . ')';
    }
    else {
        $ispName = $isp;
    }

    return $ispName;
}

function getLastPage()
{
    return $_SERVER['HTTP_REFERER'];
}




echo '$ Your IP address is: ' . getIp();
echo '<br>';
echo '$ Last page visited is: ' . getLastPage();
echo '<br>';
echo '$ Your ISP is : ' . getISP();


 