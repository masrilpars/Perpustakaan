<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<h2>Perpustakaan_masril</a></h2>
	<h3>Data Buku Perpustakaan</h3>
 
	<a href="/databuku"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/databuku/store" method="post">
		{{ csrf_field() }}
		Judul <input type="text" name="judul" required="required"> <br/>
		Pengarang <input type="text" name="pengarang" required="required"> <br/>
		Tahun <input type="integer" name="tahun" required="required"> <br/>
		Deskripsi <textarea name="deskripsi" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>