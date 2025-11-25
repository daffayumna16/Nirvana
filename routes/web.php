<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\NisbahController;
use App\Http\Controllers\HargaEmasController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProfilBagianController;
use App\Http\Controllers\TrixUploadController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GaleriController;

/*
|--------------------------------------------------------------------------
| ROUTES PUBLIK (Bisa diakses siapa saja)
|--------------------------------------------------------------------------
*/
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/produk-dan-jasa', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/tentang-kami', [PublicController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/berita', [PublicController::class, 'beritaIndex'])->name('berita.public.index');
Route::get('/berita/{berita}', [PublicController::class, 'beritaShow'])->name('berita.public.show');
Route::get('/produk-dan-jasa/{kategoriProduk}', [ProdukController::class, 'showKategori'])->name('produk.kategori.show');
Route::get('/produk/{produk}', [ProdukController::class, 'showProdukDetail'])->name('produk.detail.show');
Route::get('/syariah', [PublicController::class, 'syariah'])->name('syariah');
Route::get('/tentang-kami/{profilBagian}', [PublicController::class, 'profilBagianShow'])->name('profil.bagian.show');
Route::get('/galeri-foto', [PublicController::class, 'galeriIndex'])->name('galeri.public.index');

// (Tambahkan route publik lain seperti /layanan, /berita di sini)


/*
|--------------------------------------------------------------------------
| ROUTES NASABAH (Hanya untuk user yang login, 'role' tidak dicek)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/produk/create', ...) <-- SUDAH DIHAPUS DARI SINI
});


/*
|--------------------------------------------------------------------------
| ROUTES ADMIN (Hanya untuk user yang login DAN role='admin')
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Nanti kita buat dashboard admin di sini
    // Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/produk', [ProdukController::class, 'adminIndex'])->name('produk.index');
    // Halaman Form 'Create'
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    
    // Route untuk 'menyimpan' data dari form. 
    // Kita tambahkan sekarang walaupun fungsinya belum dibuat
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    
    // (Nanti route 'edit' dan 'delete' produk juga masuk sini)
    // 1. Halaman Form 'Edit'
    //    Parameter {produk} akan berisi ID dari produk yang ingin diedit
    Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');

    // 2. Logika 'Update' (Simpan perubahan dari form edit)
    //    Kita menggunakan method PUT/PATCH untuk update
    Route::patch('/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');

    // 3. Logika 'Delete' (Hapus data)
    Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    // --- CRUD NISBAH ---
    Route::resource('nisbah', NisbahController::class);

    // --- CRUD HARGA EMAS ---
    Route::resource('harga-emas', HargaEmasController::class);

    // --- CRUD BERITA ---
    Route::resource('berita', BeritaController::class);

    // --- CRUD KATEGORI PRODUK ---
    Route::resource('kategori-produk', KategoriProdukController::class);

    // --- CRUD PROFIL BAGIAN (TENTANG KAMI) ---
    Route::resource('profil-bagian', ProfilBagianController::class);

    // --- TRIX UPLOAD HANDLER ---
    Route::post('/trix-upload', [TrixUploadController::class, 'store'])->name('trix.upload');

    // --- CRUD SLIDER HOMEPAGE ---
    Route::resource('sliders', SliderController::class);

    // --- CRUD GALERI FOTO ---
    Route::resource('galeri', GaleriController::class);
});
// Batas Ya Anjg jangan kelewat
/*
|--------------------------------------------------------------------------
| File 'auth' bawaan Laravel Breeze
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';