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
        "list"      => $translator->translate('Daftar Simpanan', ' gr', 'id'),    
        "list10"    => $translator->translate('Simpanan 10 Hari Terakhir', ' gr', 'id'),    
        "add"       => $translator->translate('Tambah Simpanan', ' gr', 'id'),    
        "ftrans"    => $translator->translate('Formulir Transaksi', ' gr', 'id'),    
        "number"    => $translator->translate('Nomor', ' gr', 'id'),    
        "nik"       => $translator->translate('NIK', ' gr', 'id'),    
        "date"      => $translator->translate('Tanggal', ' gr', 'id'),    
        "type"      => $translator->translate('Jenis Transaksi', ' gr', 'id'),    
        "store"     => $translator->translate('Penyetoran', ' gr', 'id'),   "" ,
        "withdraw"  => $translator->translate('Penarikan', ' gr', 'id'),    
        "tstore"    => $translator->translate('Jumlah Penyetoran', ' gr', 'id'),    
        "twithdraw" => $translator->translate('Jumlah Penarikan', ' gr', 'id'),    
        "amount"    => $translator->translate('Nominal', ' gr', 'id'),    
        "conf"      => $translator->translate('Konfirmasi Transaksi', ' gr', 'id'),    
        "fmem"      => $translator->translate('Pencarian Anggota', ' gr', 'id'),    
        "txtmemid"  => $translator->translate('Masukkan Nomor Anggota', ' gr', 'id'),    
        "txtconf"   => $translator->translate('Apakah Anda Yakin Ingin Melakukan Transaksi Ini?', ' gr', 'id')
    ],   
    "process" => [
        "list"      => $translator->translate('Proses Bunga Simpanan', ' gr', 'id'),    
        "listp"     => $translator->translate('Daftar Proses Bunga Simpanan', ' gr', 'id'),    
        "month"     => $translator->translate('Bulan', ' gr', 'id'),    
        "year"      => $translator->translate('Tahun', ' gr', 'id'),    
        "percent"   => $translator->translate('Persentase Bunga', ' gr', 'id'),    
        "date"      => $translator->translate('Tanggal Proses', ' gr', 'id'),    
        "user"      => $translator->translate('User', ' gr', 'id'),    
    ],
    "basic" => [
        "cancel"    => $translator->translate('Batal', ' gr', 'id'),    
        "search"    => $translator->translate('Cari', ' gr', 'id'),    
        "back"      => $translator->translate('Kembali', ' gr', 'id'),    
        "send"      => $translator->translate('Kirim', ' gr', 'id'),    
        "sure"      => $translator->translate('Yakin', ' gr', 'id'),   
    ]
    
]

?>