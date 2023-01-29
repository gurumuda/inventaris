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
- Buka tab SQL pada database yang telah dibuat
- Buat tabel `tb_pengguna` dan strukturnya dengan mengetikkan kode berikut

```base
CREATE TABLE tb_pengguna (id_ INT(11) AUTO_INCREMENT, identitas VARCHAR(40) NOT NULL,
nama VARCHAR(100) NOT NULL, xuser VARCHAR(50) NOT NULL, xpass VARCHAR(70) NOT NULL, status ENUM('1','0'), level ENUM('1','2','3','4','5','6','7','8','9','10','11','12','100'), PRIMARY KEY(id_));
```

- Buat indeks untuk kolom identitas

```base
CREATE INDEX identitas ON tb_pengguna (identitas);
```

- Buat pengguna baru untuk administrator, langkah-langkah pembuatan user silakan lihat pada video berikut [Video Installasi](https://youtu.be/3n-8hNs3tGE)

## Level Pengguna Pada Aplikasi

1. Administrator
2. Kepala Sekolah
3. Wakil kepala sekolah
4. Pengelola ruang (`Kepala Perpustakaan, Wali Kelas, Laboratorium, Mushola, dll`)

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

---

### Bantu subscribe, comment, dan like youtube chanel [Youtube Chanel](https://youtube.com/@gurumuda1987)

### Contact Telegram [Telegram](https://t.me/yuwandianto)

---
