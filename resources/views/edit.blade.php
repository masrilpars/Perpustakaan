<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>Perpustakaan_Masril</a></h2>
	<h3>Edit data_perpustakaan</h3>
 
	<a href="/databuku"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($databuku as $p)
	<form action="/databuku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_buku }}"> <br/>
		Judul <input type="text" required="required" name="judul" value="{{ $p->judul_buku }}"> <br/>
		Pengarang <input type="text" required="required" name="pengarang" value="{{ $p->pengarang_buku }}"> <br/>
		Tahun <input type="integer" required="required" name="tahun" value="{{ $p->tahun_buku }}"> <br/>
		Deskripsi <textarea required="required" name="deskripsi">{{ $p->deskripsi_buku }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>