<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table databuku
    	$databuku = DB::table('databuku')->get();
 
    	// mengirim data databuku ke view index
    	return view('index',['databuku' => $databuku]);
 
    }
    // method untuk menampilkan view form tambah databuku
	public function tambah()
	{
 
	// memanggil view tambah
	return view('tambah');
 
	}

	// method untuk insert data ke table databuku
	public function store(Request $request)
	{
	// insert data ke table databuku
	DB::table('databuku')->insert([
		'judul_buku' => $request->judul,
		'pengarang_buku' => $request->pengarang,
		'tahun_buku' => $request->tahun,
		'deskripsi_buku' => $request->deskripsi
	]);
	// alihkan halaman ke halaman databuku
	return redirect('/databuku');
 
	}

	// method untuk edit data databuku
	public function edit($id)
	{
	// mengambil data databuku berdasarkan id yang dipilih
	$databuku = DB::table('databuku')->where('id_buku',$id)->get();
	// passing data databuku yang didapat ke view edit.blade.php
	return view('edit',['databuku' => $databuku]);
 
	}

	// update data databuku
	public function update(Request $request)
	{
	// update data databuku
	DB::table('databuku')->where('id_buku',$request->id)->update([
		'judul_buku' => $request->judul,
		'pengarang_buku' => $request->pengarang,
		'tahun_buku' => $request->tahun,
		'deskripsi_buku' => $request->deskripsi
	]);
	// alihkan halaman ke halaman databuku
	return redirect('/databuku');
	}

	// method untuk hapus data databuku
	public function hapus($id)
	{
	// menghapus data databuku berdasarkan id yang dipilih
	DB::table('databuku')->where('id_buku',$id)->delete();
		
	// alihkan halaman ke halaman databuku
	return redirect('/databuku');
	}
}
