<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 2-1 PHP</title>
</head>
<body>
    <form method="post" action="hasil.php" class="ml-3 mt-3">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control w-25" name="nim" placeholder="A11.XXX.XXX">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <select class="form-control w-25" name="prodi">
                    <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                    <option value="Sistem Informasi S1">Sistem Informasi S1</option>
                    <option value="Teknik Informatika D3">Teknik Informatika D3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nilai Tugas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control w-25" name="nilai_tugas" placeholder="Masukan Nilai Tugas">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nilai UTS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control w-25" name="nilai_uts" placeholder="Masukan Nilai UTS">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nilai UAS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control w-25" name="nilai_uas" placeholder="Masukan Nilai UAS">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Catatan Khusus</label>
            <div class="col-sm-10">
                <p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
                <p><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
                <p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
            </div>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>