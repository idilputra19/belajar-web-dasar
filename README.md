
# CRUD Application with PHP

Repository ini berisi kode sumber aplikasi CRUD sederhana yang dibangun dengan PHP sebagai tugas Mata Kuliah Website di STTIND Padang.

## Fitur

- **Create** - Tambah data baru ke dalam database
- **Read** - Menampilkan data yang ada di database
- **Update** - Ubah data yang sudah ada
- **Delete** - Hapus data dari database

## Teknologi

- **PHP**: Digunakan untuk logika backend dan interaksi dengan database.
- **MySQL**: Database yang menyimpan data.
- **HTML/CSS**: Untuk tampilan dasar antarmuka pengguna.
- **Bootstrap**: Framework CSS opsional untuk meningkatkan tampilan UI (jika digunakan).

## Persiapan

1. **Kloning repository** ini:
   ```bash
   git clone https://github.com/username/CRUD-application-php.git
   ```

2. **Konfigurasi database**:
   - Buat database baru di MySQL, misalnya `crud_db`.
   - Impor file `crud_db.sql` yang ada di repository ini untuk membuat tabel yang diperlukan.

3. **Konfigurasi Koneksi Database**:
   - Buka file `config.php` dan perbarui informasi database seperti berikut:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'crud_db';
     ```

## Cara Menggunakan

1. Akses aplikasi melalui `http://localhost/nama-folder-project` di browser.
2. Gunakan menu untuk menambah, melihat, mengedit, atau menghapus data.

## Struktur Folder

- `index.php` - Halaman utama yang menampilkan semua data.
- `create.php` - Halaman untuk menambah data baru.
- `update.php` - Halaman untuk mengubah data.
- `delete.php` - Script untuk menghapus data.
- `config.php` - Pengaturan koneksi database.
- `crud_db.sql` - File SQL untuk membuat database dan tabel.

## Kontribusi

Fork, buat perubahan, dan kirimkan pull request jika ingin berkontribusi dalam pengembangan aplikasi ini.

## Lisensi

Aplikasi ini hanya dibuat untuk tugas Pemograman Website bersama dengan Buk Indah STTIND padang
