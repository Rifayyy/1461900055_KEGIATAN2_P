<!DOCTYPE html>
<html>
    <head>
        <title>1461900055</title>
    </head>
    <body>
        <h2><center>Data Peserta<center></h2>
        <p><center>Cari Peserta :</center></p>  
        <center><form action="/mahasiswa/cari" method="GET">
        <input type="text" name="lihat" placeholder="Cari Peserta .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form></center>
        <center><table border="1">
    <tr>
    <th>Nama</th>
    <th>NBI</th>
    <th>id</th>
    </tr>
@foreach($mahasiswa as $p)
    <tr>
    <td>{{ $p->mahasiswa_id }}</td>
    <td>{{ $p->mahasiswa_nbi }}</td>
    <td>{{ $p->mahasiswa_nama_mhs }}</td>
    </tr>
@endforeach
    </table></center>
 </body>
</html>