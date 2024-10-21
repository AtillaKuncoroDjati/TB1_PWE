<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar produk.
     */
    public function ViewProduk()
    {
        $produk = Produk::all(); // Mengambil semua data produk
        return view('produk', ['produk' => $produk]); // Menampilkan view produk.blade.php
    }

    /**
     * Menampilkan form untuk menambah produk.
     */
    public function ViewAddProduk()
    {
        return view('addproduk'); // Menampilkan form penambahan produk
    }

    /**
     * Membuat produk baru.
     */
    public function CreateProduk(Request $request)
    {
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '_' . $imageFile->getClientOriginalName(); // Menyimpan nama file gambar
            $imageFile->storeAs('public/images', $imageName); // Simpan file gambar
        }

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $imageName
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit produk.
     */
    public function ViewEditProduk($kode_produk)
    {
        $ubahproduk = Produk::where('kode_produk', $kode_produk)->first();
        return view('editproduk', compact('ubahproduk'));
    }

    /**
     * Memperbarui produk.
     */
    public function UpdateProduk(Request $request, $kode_produk)
    {
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '_' . $imageFile->getClientOriginalName(); // Menyimpan nama file gambar
            $imageFile->storeAs('public/images', $imageName); // Simpan file gambar
        }
        Produk::where('kode_produk', $kode_produk)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $imageName
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Menghapus produk.
     */
    public function DeleteProduk($kode_produk)
    {
        Produk::where('kode_produk', $kode_produk)->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }
}
