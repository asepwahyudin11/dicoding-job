# dicoding-job-application
`asepwahyudin11/dicoding-job` adalah aplikasi berbasis framework Laravel untuk mengakomodir proses melamar pekerjaan. Ada dua feature utama yaitu:
1. Daftar pekerjaan yang tersedia
2. Apply pekerjaan


## Quick Installation
Buka Command Line / Git Bash kemudian jalankan perintah dibawah di direktori tujuan untuk melakukan instalasi:
```
git clone https://github.com/asepwahyudin11/dicoding-job.git
```
Setelah proses selesai, jalankan composer install seperti berikut:
```
composer install
```
Jika proses installasi telah selesai, maka aplikasi sudah bisa dijalankan menggunakan perintah:
```
php artisan serve
```


## Migration
Sebelum menjalankan aplikasi, kita perlu melakukan migration database terlebih dahulu. Pastikan mysql sudah diaktifkan untuk saya sendiri menggunakan XAMPP dalam menjalankan aplikasi ini.
Sebelum proses migrasi dijalankan, silahkan buat database dengan nama apapun lalu setup di `.env` bagian `DB_DATABASE`
Buka Command Line dan masuk ke direktori aplikasi lalu jalankan perintah berikut:
```
php artisan migrate
```
Perintah tersebut sudah menjalankan migrasi data berupa : Membuat 8 tabel yang dibutuhkan untuk aplikasi ini serta table bawaan dari Laravel


## Insert Data Dummy
Data Dummy untuk mengisi data master aplikasi sudah disiapkan di repository ini. Untuk data master bisa dilihat di spreadsheet berikut : [Spreadsheet Data Master](https://docs.google.com/spreadsheets/d/1JBelhWhpDXDgqhKMwFEw-MAyK5Yk2xJnMSYjLSbXXyo/edit?usp=sharing) 
Jalankan perintah berikut agar data dummy ready di aplikasi
```
php artisan db:seed
```


## Running Test
Untuk menjalankan test aplikasi bisa menggunakan perintah:
```
php artisan test
```
Terdapat `Feature Test` dan `Unit Test` yang akan dijalankan oleh aplikasi.


## Konfigurasi Email Notifikasi
Jika ingin mengganti email notifikasi yang akan dikirimkan kepada Recruiter setiap ada yang submit form. Bisa menyesuaikannya di `database/miggrations/2022_09_20_160008_create_jobs_table.php`
