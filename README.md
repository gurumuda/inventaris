# Aplikasi Inventaris Barang

Aplikasi ini dibangun untuk mempermudah dalam pendataan barang di sekolah. Barang-barang yang termasuk SNP telah dimasukkan di dalam database. Selain barang SNP, pengguna juga dapat menambahkan barang non SNP dalam database.

Selain aplikasi inventaris, aplikasi ini telah terintegrasi dengan aplikasi pengajuan barang. Biasanya dilakukan pada awal tahun anggaran.

## Server

- Web Server
- PHP Versi 7 (disarankan 7.3 karena aplikasi dibangun dengan php versi ini)
- Database (Mysql)

## Installasi

- Clone / Download source code dari github

```base
git clone https://github.com/gurumuda/inventaris.git
```

- Buat database
- Import file `database.sql` ke database
- Lakukan pengaturan pada file `database.php` di dalam folder `application/config`

## User Default

1. Administrator
2. Kepala Sekolah
3. Wakil kepala sekolah
4. Pengelola ruang (`Kepala Perpustakaan, Wali Kelas, Laboratorium, Mushola, dll`)

| Level          | Username          | Password |
| -------------- | ----------------- | -------- |
| Administrator  | admin@sch.id      | admin    |
| Kepala Sekolah | yusuf@admin.com   | admin    |
| Wakil Kepsek   | suyanto@admin.com | admin    |
| Pengelola Lab  | alvian@admin.com  | admin    |

Anda dapat menambahkan user dan mengatur level dengan menggunakan akun administrator

## Fitur Aplikasi

- Manajemen pengguna
- Manajemen barang SNP dan Non SNP
- Input keadaan barang
- Cetak keadaan barang
- Pengajuan pembelian barang
- Review pengajuan barang
- Persetujuan usulan barang
- Cetak pengajuan barang

Bantu subscribe, comment, dan like youtube chanel [Youtube Chanel](https://youtube.com/@gurumuda1987)
Contact Telegram [Telegram](https://t.me/yuwandianto)
