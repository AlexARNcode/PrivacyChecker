<?php

/* 
- Adresse IPv4 OK
- Adresse IPv6 (optionnel)
- Nom du FAI
- Ville correspondant à l'utilisateur (v2)
- Pays correspondant à l'utilisateur  (v2)
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
    __ Bouygues B&YOU 4G : 80.214.157.199
    __ SFR : 140.19.23.93.rev.sfr.net / 212.145.17.109.rev.sfr.net
*/


function getIpAddress()
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
    else if (strpos($isp, 'sfr') || (strpos($isp, 'numericable'))) {
        $ispName = 'SFR / RED (' . $isp . ')';
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

function getBrowser() {
    $browser = get_browser(null, true);
    return $browser;
}



echo '$ Your IP address is: ' . getIpAddress();
// echo '<br>';
// echo '$ Last page visited is: ' . getLastPage();
// echo '<br>';
// echo '$ Your ISP is : <strong>' . getISP() . '</strong>';
echo '<br><br>';
echo "Coucou mon coupaing/ma coupingue bêta-testeur(euse), voici l'info dont j'ai besoin : <strong>" . getISP() . '</strong>';

echo '<br><br>';
echo "$ Your web browser is: " . $_SERVER['HTTP_USER_AGENT'];
