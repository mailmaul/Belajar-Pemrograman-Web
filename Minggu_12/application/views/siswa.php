<div class="container-fluid mt-3">
    <a href="#" type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data Siswa</a>

    <h3 class="mt-3">Data Sekolah</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
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
                        <img src="<?= base_url() ?>assets/foto/<?= $s->logo; ?>" class="img-mini" />
                    </td>
                    <td>
                        <?= anchor('Siswa/delete/' . $s->id, '<button type="button" class="btn btn-sm btn-danger">Hapus</button>') ?>
                        <?= anchor('Siswa/edit/' . $s->id, '<button type="button" class="btn btn-sm btn-warning">Ubah</button>') ?>
                        <?= anchor('Siswa/pdf/' . $s->id, '<button type="button" class="btn btn-sm btn-primary">PDF</button>') ?>
                        <a href="<?= base_url('Siswa/pdf/' . $s->id) ?>" target="_blank" class="btn btn-sm btn-primary">Download</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('Siswa/add') ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <input type="file" class="form-control" placeholder="Logo" name="logo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>