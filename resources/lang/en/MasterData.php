<?php

use Buzz\Browser;
use MatthiasNoback\MicrosoftOAuth\AzureTokenProvider;
use MatthiasNoback\MicrosoftTranslator\MicrosoftTranslator;

$browser = new Browser();
$azureKey = '6a0e0a3f4c8744449e2e1364959d470f';
$accessTokenProvider = new AzureTokenProvider($browser, $azureKey);
$translator = new MicrosoftTranslator($browser, $accessTokenProvider);

return[
"user" => [
    "list"      => $translator->translate('Daftar User', 'en', 'id'),
    "add"       => $translator->translate('Tambah User', 'en', 'id'),
    "number"    => $translator->translate('Nomor', 'en', 'id'), 
    "nik"       => $translator->translate('NIK', 'en', 'id'),  
    "name"      => $translator->translate('Nama', 'en', 'id'),  
    "role"      => $translator->translate('Peran', 'en', 'id'),  
    "status"    => $translator->translate('Status Aktif', 'en', 'id'),  
    "action"    => $translator->translate('Aksi', 'en', 'id'),   
    "details"   => $translator->translate('Detail User', 'en', 'id'),   
    "history"   => $translator->translate('Daftar Transaksi Terakhir', 'en', 'id'),   
    "date"      => $translator->translate('Tanggal', 'en', 'id'),   
    "mem_id"    => $translator->translate('ID Anggota', 'en', 'id'),   
    "nominal"   => $translator->translate('Nominal Transaksi', 'en', 'id'),   
    "detail"    => $translator->translate('Keterangan', 'en', 'id'), 
    
    
    "pwd"       => $translator->translate('Kata Sandi', 'en', 'id'),   
    "cpwd"      => $translator->translate('Konfirmasi Kata Sandi', 'en', 'id'),   
    "txtnik"    => $translator->translate('Masukkan NIK User', 'en', 'id'),   
    "txtname"   => $translator->translate('Masukkan Nama User', 'en', 'id'),   
    "txtuname"  => $translator->translate('Masukkan Username', 'en', 'id'),   
    "txtpwd"    => $translator->translate('Masukkan Kata Sandi', 'en', 'id'),   
    "txtcpwd"   => $translator->translate('Masukkan Konfirmasi Kata Sandi', 'en', 'id'),   
    "deposit"   => $translator->translate('Penyetoran', 'en', 'id'),   
    "witdraw"   => $translator->translate('Penarikan', 'en', 'id'),   
    "bunga"     => $translator->translate('BungaSimpanan', 'en', 'id'),   
],
    "basic" => [
        "send"      => $translator->translate('Kirim', 'en', 'id'),   
        "back"      => $translator->translate('Kembali', 'en', 'id'),   
        "view"      => $translator->translate('Tampilkan', 'en', 'id'), 
        "edit"      => $translator->translate('Ubah', 'en', 'id'),  
        "delete"    => $translator->translate('Hapus', 'en', 'id'),  
    ]
]

?>