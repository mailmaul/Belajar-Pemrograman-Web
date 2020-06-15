<div class="container">
    <?php foreach ($siswa as $s) : ?>
        <?= form_open_multipart('Siswa/update') ?>
        <div class="form-group">
            <input type="hidden" class="form-control" placeholder="Nama" name="id" value="<?= $s->id ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $s->nama ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $s->alamat ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Logo</label>
            <input type="file" class="form-control" placeholder="Logo" name="logo" value="<?= $s->logo ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close(); ?>
    <?php endforeach ?>
</div>