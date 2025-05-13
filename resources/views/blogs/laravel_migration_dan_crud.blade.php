<div class="gap-2 flex flex-col items-justify mx-auto mb-2 mt-2">
    <h1 class="text-center">Membuat Migration dan Implementasi CRUD pada Produk dengan Laravel + FluxUI</h1>

    <p class="text-sm text-gray-400">Created at: {{ date('d F Y H:i') }}</p>
    <img src="/blogs/img/tmb_migration.png" alt="Ilustrasi Migration di Laravel" class="rounded-lg shadow-lg mb-8">

    <p>Laravel adalah framework PHP yang sangat powerful dan elegan untuk membangun aplikasi web modern. Salah satu
        fitur andalannya adalah <strong>Migration</strong>, yang memungkinkan kita untuk mendefinisikan struktur
        database menggunakan kode. Pada artikel ini, saya akan membahas bagaimana cara:</p>

    <ul>
        <li>Membuat migration untuk tiga tabel penting (customers, orders, order_details).</li>
        <li>Menjalankan migrasi ke database.</li>
        <li>Membuat CRUD untuk tabel products dengan FluxUI.</li>
    </ul>

    <h2>1. Membuat Migration</h2>

    <p>Pastikan kamu sudah meng-install Laravel, kalau belum cek <a class="underline text-color-blue"
            href="https://saifdev.up.railway.app/blog/instalasi-laravel">artikel sebelumnya</a>, kalau sudah kamu atur
        koneksi database di file <code>.env</code>.</p>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>DB_CONNECTION= // Jenis database (mysql, sqlite, pgsql, sqlsrv)
DB_HOST= // Host database
DB_PORT= // Port database
DB_DATABASE= //Nama database yang kamu buat
DB_USERNAME= //Nama user database
DB_PASSWORD= //Password user database
</code></pre>

    <h3>📦 Tabel Customers</h3>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>php artisan make:migration create_customers_table</code></pre>

    <p>Edit file migrasi di <code>database/migrations</code>:</p>

    <div class="overflow-x-auto">
        <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code class="language-php">public function up()
{
        Schema::create('customers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->text('address')->nullable();
                $table->timestamps();
        });
}
</code></pre>
    </div>

    <h3>📦 Tabel Orders</h3>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>php artisan make:migration create_orders_table</code class="language-php"></pre>
    <p>Edit file migrasi di <code>database/migrations</code>:</p>
    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        $table->date('order_date');
        $table->decimal('total_amount', 10, 2)->default(0.00);
        $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
        $table->timestamps();
    });
}</code></pre>

    <h3>📦 Tabel Order Details</h3>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>php artisan make:migration create_order_details_table</code></pre>
    <p>Edit file migrasi di <code>database/migrations</code>:</p>
    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>public function up()
{
    Schema::create('order_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('order_id')->constrained()->onDelete('cascade');
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->unsignedInteger('quantity')->default(1);
        $table->decimal('unit_price', 10, 2);
        $table->decimal('subtotal', 10, 2);
        $table->timestamps();
    });
}</code></pre>

    <h3>🚀 Menjalankan Migrasi</h3>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>php artisan migrate</code></pre>

    <h2>2. CRUD Produk dengan FluxUI</h2>

    <p>Sekarang kita implementasi CRUD sederhana untuk <code>products</code> menggunakan Laravel dan FluxUI.</p>

    <h3>📌 Buat Controller</h3>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>php artisan make:controller ProductController --resource</code></pre>

    <p>Edit controller untuk menyertakan semua method CRUD seperti <code>index</code>, <code>create</code>,
        <code>store</code>, <code>edit</code>, <code>update</code>, dan <code>destroy</code>.</p>

    <h3>📌 Tambahkan Route</h3>

    <p>Tambahkan Route untuk <code>product</code> di <code>routes/web.php</code> :</p>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>use App\Http\Controllers\ProductsController;

Route::group(['prefix'=>'dashboard'], function () {
    Route::resource('products', ProductsController::class);
});</code></pre>

    <h3>📌 Gunakan FluxUI di Blade</h3>

    <p>Di dalam file blade, kita bisa menggunakan FluxUI untuk membuat tampilan CRUD yang responsif dan interaktif.</p>

    <pre class="border border-[var(--color-border)] rounded-md bg-gray-190"><code>flux::heading
flux::subheading
flux::from
flux::button
flux::badge
flux::dropdown</code></pre>

    <p class="mb-5">Untuk lebih lengkapnya, kamu bisa cek di <a href="https://fluxui.dev/docs" target="_blank"
            class="underline">dokumentasi FluxUI</a>.</p>

    <p>Dengan Laravel Migrations dan FluxUI, pengembangan aplikasi web menjadi jauh lebih cepat dan menyenangkan. Kita
        bisa dengan mudah mendesain database dan membangun antarmuka modern tanpa ribet styling dari nol. Selamat
        mencoba dan semoga bermanfaat!</p>

</div>
