# Instalasi Laravel

Laravel adalah salah satu framework PHP paling populer untuk pengembangan aplikasi web, dikenal dengan sintaks yang elegan dan fitur yang kuat. Panduan ini akan memandu Anda melalui proses instalasi langkah demi langkah.

## Prasyarat

Sebelum menginstal Laravel, pastikan Anda memiliki prasyarat berikut:

- PHP >= 8.1
- Composer (Manajer Dependensi untuk PHP)
- Ekstensi PHP OpenSSL
- Ekstensi PHP PDO
- Ekstensi PHP Mbstring
- Ekstensi PHP Tokenizer
- Ekstensi PHP XML
- Ekstensi PHP Ctype
- Ekstensi PHP JSON
- Ekstensi PHP BCMath
- Ekstensi PHP Fileinfo

## Menginstal Composer

Composer adalah manajer dependensi untuk PHP yang digunakan Laravel. Jika Anda belum menginstalnya, unduh dari [getcomposer.org](https://getcomposer.org/).

### Windows
Unduh dan jalankan installer `Composer-Setup.exe` dari situs web.

### macOS/Linux
Jalankan perintah berikut di terminal:

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

## Menginstal Laravel

Ada beberapa cara untuk menginstal Laravel. Berikut adalah metode yang paling umum:

### Metode 1: Menggunakan Composer Create-Project

Cara termudah untuk membuat proyek Laravel baru adalah dengan perintah `create-project` dari Composer:

```
composer create-project laravel/laravel example-app
```

Ini akan membuat direktori baru bernama `example-app` yang berisi instalasi Laravel dengan semua dependensi yang diperlukan.

### Metode 2: Menggunakan Laravel Installer

Pertama, instal Laravel installer sebagai dependensi global Composer:

```
composer global require laravel/installer
```

Pastikan direktori bin vendor sistem-wide Composer ada di `$PATH` agar perintah Laravel dapat dikenali oleh sistem.

Setelah terinstal, Anda dapat membuat proyek Laravel baru dengan:

```
laravel new example-app
```

### Metode 3: Menggunakan Docker dengan Laravel Sail

Laravel menyediakan Laravel Sail, antarmuka baris perintah ringan untuk lingkungan pengembangan berbasis Docker.

```
curl -s "https://laravel.build/example-app" | bash
```

Setelah aplikasi dibuat, navigasikan ke direktori aplikasi dan jalankan Laravel Sail:

```
cd example-app
./vendor/bin/sail up
```

## Menyiapkan Aplikasi Laravel

Setelah instalasi, Anda perlu mengonfigurasi aplikasi:

### 1. Konfigurasi Lingkungan

Salin file `.env.example` untuk membuat file `.env` baru:

```
cp .env.example .env
```

Hasilkan kunci aplikasi:

```
php artisan key:generate
```

### 2. Konfigurasi Basis Data

Edit file `.env` Anda untuk mengatur koneksi basis data:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Menjalankan Migrasi

Jalankan migrasi basis data untuk membuat tabel-tabel yang diperlukan:

```
php artisan migrate
```

## Menjalankan Aplikasi Anda

Laravel memiliki server pengembangan bawaan yang dapat digunakan untuk menguji aplikasi secara lokal:

```
php artisan serve
```

Aplikasi Anda akan tersedia di `http://localhost:8000`.

## Masalah Umum dan Pemecahannya

### Masalah Izin

Jika mengalami masalah izin, terutama di sistem Unix, atur izin yang sesuai:

```
chmod -R 755 storage bootstrap/cache
```

### Batas Memori Composer

Jika Composer kehabisan memori, Anda dapat meningkatkan batasnya:

```
COMPOSER_MEMORY_LIMIT=-1 composer require package/name
```

### Ekstensi PHP yang Hilang

Jika ada ekstensi PHP yang hilang, instal menggunakan manajer paket sistem Anda:

Untuk Ubuntu/Debian:
```
sudo apt-get install php-extension-name
```

Untuk macOS (menggunakan Homebrew):
```
brew install php@8.1
```

## Sumber Belajar Lebih Lanjut

- [Dokumentasi Laravel](https://laravel.com/docs)
- [Laracasts](https://laracasts.com/)
- [Laravel News](https://laravel-news.com/)

## Kesimpulan

Selamat! Anda telah berhasil menginstal Laravel dan mengatur lingkungan pengembangan Anda. Sekarang Anda siap untuk mulai membangun aplikasi web dengan salah satu framework PHP paling populer.

Laravel memiliki komunitas yang aktif dan dokumentasi yang luas, jadi Anda akan menemukan banyak sumber daya untuk membantu Anda dalam perjalanan pengembangan.
