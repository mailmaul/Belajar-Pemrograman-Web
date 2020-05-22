<?php
$lib = new Library();
$data = $lib->show();
?>

<a href="index.php?p=sekolah&m=add" class="btn-pull-right">Tambah Baru</a>
<h2>Data Sekolah</h2>
<div style="clear:both;width:200px;margin-right:12px;" class="pull-right">
    <form action="index.php?p=sekolah&m=search">
        <input type="hidden" autocomplete="off" name="p" value="sekolah">
        <input type="hidden" autocomplete="off" name="q" placeholder="Type and enter to search" value="<?php echo (get("q")); ?>">
    </form>
</div>

<div>
    <?php echo get("q") != "" ? "hasil pencarian untuk '" . get("q") . "'" : ""; ?>
</div>
<div style="clear:both">&nbsp;</div>
<table class="data">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Logo</th>
            <th colspan="4">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($data as $key) { ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $key['nama']; ?></td>
                <td><?php echo $key['alamat']; ?></td>
                <td><img src="assets/foto/<?php echo $key['logo']; ?>" class="img-mini"></td>
                <td><a target="_blank" href="proses/sekolah/pdf.php?id=<?php echo $key['id']; ?>">PDF</a></td>
                <td><a href="proses/sekolah/download.php?id=<?php echo $key['id']; ?>">Download</a></td>
                <td><a href="index.php?p=sekolah&m=edit&id=<?php echo $key['id'] ?>">Ubah</a></td>
                <td><a onclick="return confirm('Hapus Data <?php echo $key['nama']; ?>')" href="proses/sekolah/hapus.php?id=<?php echo $key['id'] ?>">Hapus</a></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>