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
        "members"   => $translator->translate('Total Anggota', 'en', 'id'  ),      
        "simp"      => $translator->translate('Simpanan Bulan Ini', 'en', 'id'  ),      
        "persimp"   => $translator->translate('Bunga Simpanan', 'en', 'id'  ),      
        "perpinj"   => $translator->translate('Bunga Pinjaman', 'en', 'id'  ),      
        "totsimp"   => $translator->translate('Total Simpanan', 'en', 'id'  ),      
        "totpinj"   => $translator->translate('Total Pinjaman', 'en', 'id'  ),      
        "signout"   => $translator->translate('Keluar', 'en', 'id'  ),     
    ],
    "menu" => [
        "signout"   => $translator->translate('Keluar', 'en', 'id'),      
        "signin"    => $translator->translate('Masuk', 'en', 'id'  ),      
        "dashbor"   => $translator->translate('Dasbor', 'en', 'id'  ),      
        "navi"      => $translator->translate('Navigasi', 'en', 'id'  ),      
        "datam"     => $translator->translate('Master Data', 'en', 'id'  ),      
        "trans"     => $translator->translate('Transaksi', 'en', 'id'  ),      
        "report"    => $translator->translate('Laporan', 'en', 'id'  ),     
        "uname"     => $translator->translate('Username', 'en', 'id'  ),      
        "pwd"       => $translator->translate('KataSandi', 'en', 'id'  ),      
        "txtuname"  => $translator->translate('Masukkan Username', 'en', 'id'  ),      
        "txtpwd"    => $translator->translate('Masukkan Kata Sandi', 'en', 'id'  ),      
        "nav"       => $translator->translate('Navigasi', 'en', 'id'  ),      
        "set"       => $translator->translate('Pengaturan', 'en', 'id'  ),      
        "lang"      => $translator->translate('Bahasa', 'en', 'id'  ),      
        "admsimp"   => $translator->translate('Admin Simpanan', 'en', 'id'  ),      
        "admpinj"   => $translator->translate('Admin Pinjaman', 'en', 'id'  ),      
        "adm"       => $translator->translate('Admin', 'en', 'id'  ),     
    ]
    
]

?>