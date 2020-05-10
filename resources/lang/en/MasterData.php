<?php

use Buzz\Browser;
use MatthiasNoback\MicrosoftOAuth\AzureTokenProvider;
use MatthiasNoback\MicrosoftTranslator\MicrosoftTranslator;

$browser = new Browser( );
$azureKey = '6a0e0a3f4c8744449e2e1364959d470f';
$accessTokenProvider = new AzureTokenProvider($browser, $azureKey );
$translator = new MicrosoftTranslator($browser, $accessTokenProvider );

return[
"user" => [
    "list"      => $translator->translate('Daftar User', 'en', 'id'  ),
    "add"       => $translator->translate('Tambah User', 'en', 'id'  ),
    "number"    => $translator->translate('Nomor', 'en', 'id'  ), 
    "nik"       => $translator->translate('NIK', 'en', 'id'  ),  
    "name"      => $translator->translate('Nama', 'en', 'id'  ),  
    "role"      => $translator->translate('Peran', 'en', 'id'  ),  
    "status"    => $translator->translate('Status Aktif', 'en', 'id'  ),  
    "action"    => $translator->translate('Aksi', 'en', 'id'  ),   
    "details"   => $translator->translate('Detail User', 'en', 'id'  ),   
    "history"   => $translator->translate('Daftar Transaksi Terakhir', 'en', 'id'  ),   
    "date"      => $translator->translate('Tanggal', 'en', 'id'  ),   
    "mem_id"    => $translator->translate('ID Anggota', 'en', 'id'  ),   
    "nominal"   => $translator->translate('Nominal Transaksi', 'en', 'id'  ),   
    "detail"    => $translator->translate('Keterangan', 'en', 'id'  ), 
    
    
    "pwd"       => $translator->translate('Kata Sandi', 'en', 'id'  ),   
    "cpwd"      => $translator->translate('Konfirmasi Kata Sandi', 'en', 'id'  ),   
    "txtnik"    => $translator->translate('Masukkan NIK User', 'en', 'id'  ),   
    "txtname"   => $translator->translate('Masukkan Nama User', 'en', 'id'  ),   
    "txtuname"  => $translator->translate('Masukkan Username', 'en', 'id'  ),   
    "txtpwd"    => $translator->translate('Masukkan Kata Sandi', 'en', 'id'  ),   
    "txtcpwd"   => $translator->translate('Masukkan Konfirmasi Kata Sandi', 'en', 'id'  ),   
    "deposit"   => $translator->translate('Penyetoran', 'en', 'id'  ),   
    "witdraw"   => $translator->translate('Penarikan', 'en', 'id'  ),   
    "bunga"     => $translator->translate('Bunga Simpanan', 'en', 'id'  ),   
    ],
    "anggota" =>[ 
        "list"      => $translator->translate('Daftar Anggota', 'en', 'id'  ),        
        "add"       => $translator->translate('Tambah Anggota', 'en', 'id'  ),       
        "name"      => $translator->translate('Nama Anggota', 'en', 'id' ),        
        "number"    => $translator->translate('Nomor', 'en', 'id' ),        
        "memid"     => $translator->translate('Nomor Anggota', 'en', 'id' ),        
        "addres"    => $translator->translate('alamat', 'en', 'id' ),        
        "phone"     => $translator->translate('Telepon', 'en', 'id' ),        
        "ktp"       => $translator->translate('Nomor KTP', 'en', 'id' ),        
        "gender"    => $translator->translate('Jenis Kelamin', 'en', 'id' ),        
        "saldo"     => $translator->translate('Saldo', 'en', 'id' ),        
        "action"    => $translator->translate('Aksi', 'en', 'id' ),        
        "status"    => $translator->translate('Status Aktif', 'en', 'id' ),        
        "men"       => $translator->translate('Pria', 'en', 'id' ),        
        "woman"     => $translator->translate('Wanita', 'en', 'id' ),        
        "act"       => $translator->translate('Aktif', 'en', 'id' ),        
        "nact"      => $translator->translate('Nonaktif', 'en', 'id' ),        
        "txtadrs"   => $translator->translate('Masukkan Alamat Anggota', 'en', 'id' ),        
        "txtname"   => $translator->translate('Masukkan Nama User', 'en', 'id' ),        
        "txtname2"  => $translator->translate('Masukkan Nama Anggota', 'en', 'id' ),        
        "txtphone"  => $translator->translate('Masukkan Nomor Telepon Anggota', 'en', 'id' ),        
        "txtktp"    => $translator->translate('Masukkan Nomor KTP Anggota', 'en', 'id' ),        
    ],
    "bunga" => [
        "list"      => $translator->translate('Daftar Bunga Simpanan', 'en', 'id' ),        
        "proc"      => $translator->translate('Proses Bunga Simpanan', 'en', 'id' ),        
        "lproc"     => $translator->translate('Daftar Proses Bunga Simpanan', 'en', 'id' ),        
        "add"       => $translator->translate('Tambah Bunga Simpanan', 'en', 'id' ),        
        "edit"      => $translator->translate('Rubah Bunga Simpanan', 'en', 'id' ),        
        "number"    => $translator->translate('Nomor', 'en', 'id' ),        
        "percent"   => $translator->translate('Persentase Bunga', 'en', 'id' ),        
        "date"      => $translator->translate('Tanggal Berlaku', 'en', 'id' ),        
        "pdate"     => $translator->translate('Tanggal Proses', 'en', 'id' ),        
        "number"    => $translator->translate('Nomor', 'en', 'id' ),        
        "action"    => $translator->translate('Aksi', 'en', 'id' ),        
        "sdate"     => $translator->translate('Tanggal Mulai Berlaku', 'en', 'id' ),        
        "user"      => $translator->translate('User', 'en', 'id' ),        
        "txtpercnt" => $translator->translate('Masukkan Presentase Bunga (Tanpa % ),', 'en', 'id' ),        
        "txtsdate"  => $translator->translate('Masukkan Tanggal Mulai Berlaku', 'en', 'id' ),        
    ],      
    "report" => [
        "repday"    => $translator->translate('Laporan Harian', 'en', 'id' ),        
        "repweek"   => $translator->translate('Laporan Mingguan', 'en', 'id' ),        
        "repmonth"  => $translator->translate('Laporan Bulanan', 'en', 'id' ),        
        "repyear"   => $translator->translate('Laporan Tahunan', 'en', 'id' ),        
        "repmem"    => $translator->translate('Laporan Nasabah', 'en', 'id' ),        
        "findmem"   => $translator->translate('Cari Nasabah', 'en', 'id' ),        
        "chadate"   => $translator->translate('Ganti Tanggal', 'en', 'id' ),        
        "num"       => $translator->translate('Nomor', 'en', 'id' ),        
        "date"      => $translator->translate('Tanggal', 'en', 'id' ),        
        "deb"       => $translator->translate('Debit', 'en', 'id' ),        
        "kre"       => $translator->translate('Kredit', 'en', 'id' ),        
        "sum"       => $translator->translate('Total', 'en', 'id' ),        
        "txtdate"   => $translator->translate('Masukkan Tanggal', 'en', 'id' ),        

    ],
    "basic" => [
        "send"      => $translator->translate('Kirim', 'en', 'id'  ),   
        "back"      => $translator->translate('Kembali', 'en', 'id'  ),   
        "view"      => $translator->translate('Tampilkan', 'en', 'id'  ), 
        "edit"      => $translator->translate('Ubah', 'en', 'id'  ),  
        "delete"    => $translator->translate('Hapus', 'en', 'id'  ),   
        "cancel"    => $translator->translate('Batal', 'en', 'id'  ),    
        "find"      => $translator->translate('Cari', 'en', 'id'  ),      
        "mon"       => $translator->translate('Bulan', 'en', 'id'  ),    
        "yea"       => $translator->translate('Tahun', 'en', 'id'  ),    
        "stat"      => $translator->translate('Status', 'en', 'id'  ),    
        "pro"       => $translator->translate('Proses', 'en', 'id' ),    
    ]
]

?>