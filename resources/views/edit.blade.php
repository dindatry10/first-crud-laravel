<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title>First CRUD</title>
</head>

<body>
    <div class="p-2">
    <h3 class="text-center">Edit Data</h3>
    <div class="p-5">
    <form action="{{ route('user.update', ['id_user' => $user->id_user]) }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group mb-3">
          <label>Nama*</label>
          <input name="nama_user" type="text" class="form-control" placeholder="Masukkan nama" value="{{ $user->nama_user}}">
          <small id="emailHelp" class="form-text text-muted">Masukkan Nama Lengkap Anda</small>
        </div>
        <div class="form-group mb-3">
          <label>Email*</label>
          <input name="email" type="email" class="form-control" placeholder="Masukkan email" value="{{ $user->email}}">
          <small class="form-text text-muted">Jangan lupa pakai @</small>
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Jenis Kelamin*</label>
            <select class="form-control" id="jekel" name="jekel">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
              <script>
                document.getElementById('jekel').value = "{{ $user->jekel}}";
              </script>
            </select>
          </div>
        <div class="form-group mb-3">
          <label>No Hp</label>
          <input name="nohp" type="number" class="form-control" placeholder="Masukkan No Handphone" value="{{ $user->nohp}}">
        </div>
        <div class="form-group mb-3">
          <label>Alamat*</label>
          <textarea name="alamat" type="text" class="form-control" placeholder="Masukkan alamat">{{ $user->alamat }}</textarea>
        </div>

        <a href="/" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Update</button>
        
      </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>