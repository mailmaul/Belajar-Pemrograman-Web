<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 1 PHP</title>
</head>

<body>
    <?php
    if (isset($_POST['hitung'])) {
        //deklarasi variable
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        //mengunakan switch untuk memilih operator mana yg dipilih user
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
        }
    }
    ?>
    <form action="index.php" method="post">
        <input type="text" name="bil1" placeholder="Masukan Bilangan Pertama">
        <br>
        <input type="text" name="bil2" placeholder="Masukan Bilangan Kedua">
        <br>
        <select name="operasi">
            <option value="tambah">+(tambah)</option>
            <option value="kurang">-(kurang)</option>
            <option value="kali">*(kali)</option>
            <option value="bagi">/(bagi)</option>
        </select>
        <input type="submit" name="hitung" value="=">
    </form>

    <?php if (isset($_POST['hitung'])) { ?>
        <input type="text" value="<?php echo $hasil; ?>">
    <?php } else { ?>
        <input type="text" value="0">
    <?php } ?>
</body>

</html>