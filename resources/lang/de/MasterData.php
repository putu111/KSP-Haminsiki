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
    "list"      => $translator->translate('Daftar User', ' gr', 'id'  ),
    "add"       => $translator->translate('Tambah User', ' gr', 'id'  ),
    "number"    => $translator->translate('Nomor', ' gr', 'id'  ), 
    "nik"       => $translator->translate('NIK', ' gr', 'id'  ),  
    "name"      => $translator->translate('Nama', ' gr', 'id'  ),  
    "role"      => $translator->translate('Peran', ' gr', 'id'  ),  
    "status"    => $translator->translate('Status Aktif', ' gr', 'id'  ),  
    "action"    => $translator->translate('Aksi', ' gr', 'id'  ),   
    "details"   => $translator->translate('Detail User', ' gr', 'id'  ),   
    "history"   => $translator->translate('Daftar Transaksi Terakhir', ' gr', 'id'  ),   
    "date"      => $translator->translate('Tanggal', ' gr', 'id'  ),   
    "mem_id"    => $translator->translate('ID Anggota', ' gr', 'id'  ),   
    "nominal"   => $translator->translate('Nominal Transaksi', ' gr', 'id'  ),   
    "detail"    => $translator->translate('Keterangan', ' gr', 'id'  ), 
    
    
    "pwd"       => $translator->translate('Kata Sandi', ' gr', 'id'  ),   
    "cpwd"      => $translator->translate('Konfirmasi Kata Sandi', ' gr', 'id'  ),   
    "txtnik"    => $translator->translate('Masukkan NIK User', ' gr', 'id'  ),   
    "txtname"   => $translator->translate('Masukkan Nama User', ' gr', 'id'  ),   
    "txtuname"  => $translator->translate('Masukkan Username', ' gr', 'id'  ),   
    "txtpwd"    => $translator->translate('Masukkan Kata Sandi', ' gr', 'id'  ),   
    "txtcpwd"   => $translator->translate('Masukkan Konfirmasi Kata Sandi', ' gr', 'id'  ),   
    "deposit"   => $translator->translate('Penyetoran', ' gr', 'id'  ),   
    "witdraw"   => $translator->translate('Penarikan', ' gr', 'id'  ),   
    "bunga"     => $translator->translate('Bunga Simpanan', ' gr', 'id'  ),   
    ],
    "anggota" =>[ 
        "list"      => $translator->translate('Daftar Anggota', ' gr', 'id'  ),        
        "add"       => $translator->translate('Tambah Anggota', ' gr', 'id'  ),       
        "name"      => $translator->translate('Nama Anggota', ' gr', 'id' ),        
        "number"    => $translator->translate('Nomor', ' gr', 'id' ),        
        "memid"     => $translator->translate('Nomor Anggota', ' gr', 'id' ),        
        "addres"    => $translator->translate('alamat', ' gr', 'id' ),        
        "phone"     => $translator->translate('Telepon', ' gr', 'id' ),        
        "ktp"       => $translator->translate('Nomor KTP', ' gr', 'id' ),        
        "gender"    => $translator->translate('Jenis Kelamin', ' gr', 'id' ),        
        "saldo"     => $translator->translate('Saldo', ' gr', 'id' ),        
        "action"    => $translator->translate('Aksi', ' gr', 'id' ),        
        "status"    => $translator->translate('Status Aktif', ' gr', 'id' ),        
        "men"       => $translator->translate('Pria', ' gr', 'id' ),        
        "woman"     => $translator->translate('Wanita', ' gr', 'id' ),        
        "act"       => $translator->translate('Aktif', ' gr', 'id' ),        
        "nact"      => $translator->translate('Nonaktif', ' gr', 'id' ),        
        "txtadrs"   => $translator->translate('Masukkan Alamat Anggota', ' gr', 'id' ),        
        "txtname"   => $translator->translate('Masukkan Nama User', ' gr', 'id' ),        
        "txtname2"  => $translator->translate('Masukkan Nama Anggota', ' gr', 'id' ),        
        "txtphone"  => $translator->translate('Masukkan Nomor Telepon Anggota', ' gr', 'id' ),        
        "txtktp"    => $translator->translate('Masukkan Nomor KTP Anggota', ' gr', 'id' ),        
    ],
    "bunga" => [
        "list"      => $translator->translate('Daftar Bunga Simpanan', ' gr', 'id' ),        
        "proc"      => $translator->translate('Proses Bunga Simpanan', ' gr', 'id' ),        
        "lproc"     => $translator->translate('Daftar Proses Bunga Simpanan', ' gr', 'id' ),        
        "add"       => $translator->translate('Tambah Bunga Simpanan', ' gr', 'id' ),        
        "edit"      => $translator->translate('Rubah Bunga Simpanan', ' gr', 'id' ),        
        "number"    => $translator->translate('Nomor', ' gr', 'id' ),        
        "percent"   => $translator->translate('Persentase Bunga', ' gr', 'id' ),        
        "date"      => $translator->translate('Tanggal Berlaku', ' gr', 'id' ),        
        "pdate"     => $translator->translate('Tanggal Proses', ' gr', 'id' ),        
        "number"    => $translator->translate('Nomor', ' gr', 'id' ),        
        "action"    => $translator->translate('Aksi', ' gr', 'id' ),        
        "sdate"     => $translator->translate('Tanggal Mulai Berlaku', ' gr', 'id' ),        
        "user"      => $translator->translate('User', ' gr', 'id' ),        
        "txtpercnt" => $translator->translate('Masukkan Presentase Bunga (Tanpa % ),', ' gr', 'id' ),        
        "txtsdate"  => $translator->translate('Masukkan Tanggal Mulai Berlaku', ' gr', 'id' ),        
    ],      
    "report" => [
        "repday"    => $translator->translate('Laporan Harian', ' gr', 'id' ),        
        "repweek"   => $translator->translate('Laporan Mingguan', ' gr', 'id' ),        
        "repmonth"  => $translator->translate('Laporan Bulanan', ' gr', 'id' ),        
        "repyear"   => $translator->translate('Laporan Tahunan', ' gr', 'id' ),        
        "repmem"    => $translator->translate('Laporan Nasabah', ' gr', 'id' ),        
        "findmem"   => $translator->translate('Cari Nasabah', ' gr', 'id' ),        
        "chadate"   => $translator->translate('Ganti Tanggal', ' gr', 'id' ),        
        "num"       => $translator->translate('Nomor', ' gr', 'id' ),        
        "date"      => $translator->translate('Tanggal', ' gr', 'id' ),        
        "deb"       => $translator->translate('Debit', ' gr', 'id' ),        
        "kre"       => $translator->translate('Kredit', ' gr', 'id' ),        
        "sum"       => $translator->translate('Total', ' gr', 'id' ),        
        "txtdate"   => $translator->translate('Masukkan Tanggal', ' gr', 'id' ),        

    ],
    "basic" => [
        "send"      => $translator->translate('Kirim', ' gr', 'id'  ),   
        "back"      => $translator->translate('Kembali', ' gr', 'id'  ),   
        "view"      => $translator->translate('Tampilkan', ' gr', 'id'  ), 
        "edit"      => $translator->translate('Ubah', ' gr', 'id'  ),  
        "delete"    => $translator->translate('Hapus', ' gr', 'id'  ),   
        "cancel"    => $translator->translate('Batal', ' gr', 'id'  ),    
        "find"      => $translator->translate('Cari', ' gr', 'id'  ),      
        "mon"       => $translator->translate('Bulan', ' gr', 'id'  ),    
        "yea"       => $translator->translate('Tahun', ' gr', 'id'  ),    
        "stat"      => $translator->translate('Status', ' gr', 'id'  ),    
        "pro"       => $translator->translate('Proses', ' gr', 'id' ),    
    ]
]

?>