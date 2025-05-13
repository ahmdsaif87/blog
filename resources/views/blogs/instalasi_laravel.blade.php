<h1>Instalasi Laravel</h1>

<p>Laravel adalah salah satu framework PHP paling populer untuk pengembangan aplikasi web, dikenal dengan sintaks yang elegan dan fitur yang kuat. Panduan ini akan memandu Anda melalui proses instalasi langkah demi langkah.</p>

<h2>Prasyarat</h2>
<p>Sebelum menginstal Laravel, pastikan Anda memiliki:</p>
<ul>
    <li>PHP >= 8.1</li>
    <li>Composer (Manajer Dependensi untuk PHP)</li>
    <li>Ekstensi PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo</li>
</ul>

<h2>Menginstal Composer</h2>
<p>Unduh dari <a href="https://getcomposer.org/" target="_blank">getcomposer.org</a>.</p>

<h3>Windows</h3>
<p>Unduh dan jalankan installer <code>Composer-Setup.exe</code>.</p>

<h3>macOS/Linux</h3>
<pre><code>php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer</code></pre>

<h2>Menginstal Laravel</h2>

<h3>Metode 1: Composer Create-Project</h3>
<pre><code>composer create-project laravel/laravel example-app</code></pre>

<h3>Metode 2: Laravel Installer</h3>
<pre><code>composer global require laravel/installer
laravel new example-app</code></pre>

<h3>Metode 3: Laravel Sail (Docker)</h3>
<pre><code>curl -s "https://laravel.build/example-app" | bash
cd example-app
./vendor/bin/sail up</code></pre>

<h2>Menyiapkan Aplikasi</h2>

<h3>1. Konfigurasi Lingkungan</h3>
<pre><code>cp .env.example .env
php artisan key:generate</code></pre>

<h3>2. Konfigurasi Database</h3>
<pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>

<h3>3. Jalankan Migrasi</h3>
<pre><code>php artisan migrate</code></pre>

<h2>Menjalankan Aplikasi</h2>
<pre><code>php artisan serve</code></pre>
<p>Aplikasi tersedia di <a href="http://localhost:8000" target="_blank">http://localhost:8000</a>.</p>

<h2>Masalah Umum</h2>

<h3>Izin Folder</h3>
<pre><code>chmod -R 755 storage bootstrap/cache</code></pre>

<h3>Composer Kehabisan Memori</h3>
<pre><code>COMPOSER_MEMORY_LIMIT=-1 composer require package/name</code></pre>

<h3>Ekstensi PHP Hilang</h3>
<p>Untuk Ubuntu/Debian:</p>
<pre><code>sudo apt-get install php-[nama_ekstensi]</code></pre>
<p>Untuk macOS (Homebrew):</p>
<pre><code>brew install php@8.1</code></pre>

<h2>Sumber Belajar</h2>
<ul>
    <li><a href="https://laravel.com/docs" target="_blank">Dokumentasi Laravel</a></li>
    <li><a href="https://laracasts.com/" target="_blank">Laracasts</a></li>
    <li><a href="https://laravel-news.com/" target="_blank">Laravel News</a></li>
</ul>

<h2>Kesimpulan</h2>
<p>Selamat! Anda telah berhasil menginstal Laravel dan siap membangun aplikasi web. Laravel memiliki komunitas besar dan dokumentasi lengkap untuk membantu Anda dalam proses pengembangan.</p>
