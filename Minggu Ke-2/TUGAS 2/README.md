<html>

<head>
	<title>Latihan Form</title>
</head>

<body>
	<h2>FORM BIODATA BAI</h2>
	<form name="fbiomhs" action="action_page.php" method="post">
		<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" placeholder="NIM"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tanggallahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="gender" value="male" checked>Laki - laki</td>
			<td><input type="radio" name="gender" value="female" >Perempuan</td>
		</tr>
		<tr>
			<td>IPK</td>
			<td><input type="text" name="IPK" placeholder="IPK"></td>
		</tr>
		<tr>
			<td>Bidang Peminatan</td>
			<td>
			<select>
				<option>KADERISASI</option>
				<option>SYI'AR</option>
				<option>HUMAS</option>
				<option>MEDIA</option>
				<option>ANNISA</option>
			</select></td>
		</tr>
		<tr>
			<td>Motivasi</td>
			<td><textarea name="message" rows="10" cols="30"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"</td>
		</tr>
		</table>
	</form>
</body>

</html>	
