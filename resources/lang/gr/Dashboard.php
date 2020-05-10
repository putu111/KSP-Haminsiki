<?php

use Buzz\Browser;
use MatthiasNoback\MicrosoftOAuth\AzureTokenProvider;
use MatthiasNoback\MicrosoftTranslator\MicrosoftTranslator;

$browser = new Browser( );
$azureKey = '6a0e0a3f4c8744449e2e1364959d470f';
$accessTokenProvider = new AzureTokenProvider($browser, $azureKey );
$translator   = new MicrosoftTranslator($browser, $accessTokenProvider );


return[
    "dashboard" => [
        "members"   => $translator->translate('Total Anggota', ' gr', 'id'  ),      
        "simp"      => $translator->translate('Simpanan Bulan Ini', ' gr', 'id'  ),      
        "persimp"   => $translator->translate('Bunga Simpanan', ' gr', 'id'  ),      
        "perpinj"   => $translator->translate('Bunga Pinjaman', ' gr', 'id'  ),      
        "totsimp"   => $translator->translate('Total Simpanan', ' gr', 'id'  ),      
        "totpinj"   => $translator->translate('Total Pinjaman', ' gr', 'id'  ),      
        "signout"   => $translator->translate('Keluar', ' gr', 'id'  ),     
    ],
    "menu" => [
        "signout"   => $translator->translate('Keluar', ' gr', 'id'),      
        "signin"    => $translator->translate('Masuk', ' gr', 'id'  ),      
        "dashbor"   => $translator->translate('Dasbor', ' gr', 'id'  ),      
        "navi"      => $translator->translate('Navigasi', ' gr', 'id'  ),      
        "datam"     => $translator->translate('Master Data', ' gr', 'id'  ),      
        "trans"     => $translator->translate('Transaksi', ' gr', 'id'  ),      
        "report"    => $translator->translate('Laporan', ' gr', 'id'  ),     
        "uname"     => $translator->translate('Username', ' gr', 'id'  ),      
        "pwd"       => $translator->translate('KataSandi', ' gr', 'id'  ),      
        "txtuname"  => $translator->translate('Masukkan Username', ' gr', 'id'  ),      
        "txtpwd"    => $translator->translate('Masukkan Kata Sandi', ' gr', 'id'  ),      
        "nav"       => $translator->translate('Navigasi', ' gr', 'id'  ),      
        "set"       => $translator->translate('Pengaturan', ' gr', 'id'  ),      
        "lang"      => $translator->translate('Bahasa', ' gr', 'id'  ),      
        "admsimp"   => $translator->translate('Admin Simpanan', ' gr', 'id'  ),      
        "admpinj"   => $translator->translate('Admin Pinjaman', ' gr', 'id'  ),      
        "adm"       => $translator->translate('Admin', ' gr', 'id'  ),     
    ]
    
]

?>