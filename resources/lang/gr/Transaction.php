<?php

use Buzz\Browser;
use MatthiasNoback\MicrosoftOAuth\AzureTokenProvider;
use MatthiasNoback\MicrosoftTranslator\MicrosoftTranslator;

$browser = new Browser( );
$azureKey = '6a0e0a3f4c8744449e2e1364959d470f';
$accessTokenProvider = new AzureTokenProvider($browser, $azureKey );
$translator  = new MicrosoftTranslator($browser, $accessTokenProvider );

return[
    "saving" => [
        "list"      => $translator->translate('Daftar Simpanan', 'en', 'id'),    
        "list10"    => $translator->translate('Simpanan 10 Hari Terakhir', 'en', 'id'),    
        "add"       => $translator->translate('Tambah Simpanan', 'en', 'id'),    
        "ftrans"    => $translator->translate('Formulir Transaksi', 'en', 'id'),    
        "number"    => $translator->translate('Nomor', 'en', 'id'),    
        "nik"       => $translator->translate('NIK', 'en', 'id'),    
        "date"      => $translator->translate('Tanggal', 'en', 'id'),    
        "type"      => $translator->translate('Jenis Transaksi', 'en', 'id'),    
        "store"     => $translator->translate('Penyetoran', 'en', 'id'),   "" ,
        "withdraw"  => $translator->translate('Penarikan', 'en', 'id'),    
        "tstore"    => $translator->translate('Jumlah Penyetoran', 'en', 'id'),    
        "twithdraw" => $translator->translate('Jumlah Penarikan', 'en', 'id'),    
        "amount"    => $translator->translate('Nominal', 'en', 'id'),    
        "conf"      => $translator->translate('Konfirmasi Transaksi', 'en', 'id'),    
        "fmem"      => $translator->translate('Pencarian Anggota', 'en', 'id'),    
        "txtmemid"  => $translator->translate('Masukkan Nomor Anggota', 'en', 'id'),    
        "txtconf"   => $translator->translate('Apakah Anda Yakin Ingin Melakukan Transaksi Ini?', 'en', 'id')
    ],   
    "process" => [
        "list"      => $translator->translate('Proses Bunga Simpanan', 'en', 'id'),    
        "listp"     => $translator->translate('Daftar Proses Bunga Simpanan', 'en', 'id'),    
        "month"     => $translator->translate('Bulan', 'en', 'id'),    
        "year"      => $translator->translate('Tahun', 'en', 'id'),    
        "percent"   => $translator->translate('Persentase Bunga', 'en', 'id'),    
        "date"      => $translator->translate('Tanggal Proses', 'en', 'id'),    
        "user"      => $translator->translate('User', 'en', 'id'),    
    ],
    "basic" => [
        "cancel"    => $translator->translate('Batal', 'en', 'id'),    
        "search"    => $translator->translate('Cari', 'en', 'id'),    
        "back"      => $translator->translate('Kembali', 'en', 'id'),    
        "send"      => $translator->translate('Kirim', 'en', 'id'),    
        "sure"      => $translator->translate('Yakin', 'en', 'id'),   
    ]
    
]

?>