<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .img-mini {
            max-width: 50px;
            max-height: 50px;
        }
    </style>
</head>

<body>
    <h3 class="mt-3">Data Sekolah</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Logo</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($siswa as $s) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $s->nama ?></td>
                    <td><?= $s->alamat ?></td>
                    <td>
                        <img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . "/Minggu_12/assets/foto/" . $s->logo ?>" class=" img-mini" />
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>