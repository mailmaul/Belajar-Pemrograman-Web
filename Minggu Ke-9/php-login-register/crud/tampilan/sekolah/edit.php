<?php
$hasil = $koneksi->prepare("SELECT * FROM sekolah WHERE `id` =
'".get('id')."'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);
?>
<form method="POST" 
action="proses/sekolah/update.php"enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo 
$data['id'];?>">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php 
echo $data['nama'];?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php 
echo $data['alamat'];?>"></td>
</tr>
<tr>
<td>Logo</td>
<td><img class="img-small" src="assets/<?php echo 
$data['logo'];?>">
<input type="file" name="logo"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">Update</button></td>
</tr>
</table>
</form>