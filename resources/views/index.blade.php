<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<thead class="thead-dark">
	<h2>Perpustakaan_Masril</h2>
	<h3>Data Buku</h3>
</thead>
 
	<a href="/databuku/tambah"> + Tambah Buku Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Tahun</th>
			<th>DEskripsi</th>
			<th>Opsi</th>
		</tr>
		@foreach($databuku as $p)
		<tr>
			<td>{{ $p->judul_buku }}</td>
			<td>{{ $p->pengarang_buku }}</td>
			<td>{{ $p->tahun_buku }}</td>
			<td>{{ $p->deskripsi_buku }}</td>
			<td>
				<a href="/databuku/edit/{{ $p->id_buku }}">Edit</a>
				|
				<a href="/databuku/hapus/{{ $p->id_buku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>