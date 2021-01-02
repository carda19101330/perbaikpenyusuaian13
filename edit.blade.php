<h3>Edit data buku</h3>
<a href="/buku"><h2>back</h2></a>
@foreach ($buku as $a => $tampilkan)

@endforeach
<form action="{{route('buku.update',$tampilkan->id_buku)}} "method="POST">
<input type="hidden" name="_method" value="PUT">
{{csrf_field()}}
<table>
		<tr>
		<th>id</th>
		<td>
			<input type="text" name="id_buku" value="{{$tampilkan->id_buku}}">
		</td>
	</tr>
	<tr>
		<th>judul</th>
		<td>
			<input type="text"name="judul_buku"value="{{$tampilkan->judul_buku}}">
		</td>
	</tr>
	<tr>
		<th>kategori</th>
		<td>
			<input type="text"name="kategori_buku"value="{{$tampilkan->kategori_buku}}">
		</td>
	</tr>
	<tr>
		<th>penerbit</th>
		<td>
			<input type="text" name="penerbit" value="{{$tampilkan->penerbit}}">
		</td>
	</tr>
	<tr>
		<th>penulis</th>
		<td>
			<input type="text" name="penulis" value="{{$tampilkan->penulis}}">
		</td>
	</tr>
	<tr>
		<th>stok</th>
		<td>
			<input type="number" name="stok" value="{{$tampilkan->stok}}">
		</td>
	</tr>
	<tr>
		<th>harga</th>
		<td>
			<input type="number" name="harga" value="{{$tampilkan->harga}}">
		</td>
	</tr>
			<input type="submit" value="SAVE">
</form>
	<input type="hidden"name="_method"value="Edit">
	</table>