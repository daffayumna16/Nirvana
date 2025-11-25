<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nisbah;
use App\Models\HargaEmas;
use App\Models\Berita;
use App\Models\ProfilBagian;
use App\Models\Slider;
use App\Models\Galeri;

class PublicController extends Controller
{
public function home()
    {
// 1. Ambil semua data dari tabel nisbahs
    $nisbahs = Nisbah::all();
    $hargaEmas = HargaEmas::all();
    $sliders = Slider::all();
    // 3. Kirim data nisbahs ke view 'home'
    return view('home', [
        'nisbahs' => $nisbahs,
        'hargaEmas' => $hargaEmas,
        'sliders' => $sliders,
    ]);
    }

    public function tentangKami()
    {
        // 1. Ambil semua bagian profil dari database
    $profilBagians = ProfilBagian::all();

    // 2. Kirim data tersebut ke view 'tentang-kami'
    return view('tentang-kami', ['profilBagians' => $profilBagians]);
    }

    public function beritaIndex()
    {
        // Ambil semua berita, urutkan dari yang terbaru
        $beritas = Berita::latest()->get();

        // Tampilkan view (yang akan kita buat) dan kirim datanya
        return view('berita-publik.index', ['beritas' => $beritas]);
    }

    public function beritaShow(Berita $berita) // <-- Route Model Binding
    {
        // Laravel otomatis mengambil berita berdasarkan ID di URL

        // Tampilkan view (yang akan kita buat) dan kirim datanya
        return view('berita-publik.show', ['berita' => $berita]);
    }

    public function syariah()
    {
        return view('syariah');
    }
    
    public function profilBagianShow(ProfilBagian $profilBagian) // Route Model Binding
{
    // 1. Laravel sudah otomatis mengambil data ProfilBagian berdasarkan ID di URL.

    // 2. Kirim data itu ke view baru
    return view('profil-bagian.show', ['bagian' => $profilBagian]);
}
    

public function galeriIndex()
{
    // Ambil semua foto galeri, urutkan dari yang terbaru
    $galeris = Galeri::latest()->get();

    // Tampilkan view (yang akan kita buat) dan kirim datanya
    return view('galeri-publik.index', ['galeris' => $galeris]);
}
}
