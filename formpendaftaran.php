<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <title>form Registrasi</title>
  </head>
  <body>
    <div class="header">
        <h1>e - Perpustakaan</h1>
        <h3>Jurusan Teknologi Informasi</h3>
    </div>
    <div class="container">
        <div class="card-body">
          <h3 class="card-title">Registrasi</h3>
          
          <form>
            <div class="mt-4">
              <label for="inputname" class="form-label">Nama</label>
              <input type="name" class="form-control" id="exampleinputname" placeholder="Masukkan nama anda">
            </div>
            <div class="mb-3 mt-2">
              <label for="inputnim" class="form-label">Nomor Induk Mahasiswa</label>
              <input type="varchar" class="form-control" id="exampleinputnim" placeholder="Masukkan NIM ">
            </div>
            <div class="mb-3 mt-2">
              <label for="inputdate" class="form-label">Tempat, Tanggal Lahir</label>
              <input type="date" class="form-control" id="exampleinputdate">
            </div>
            <div class="mb-3 mt-2">
              <label for="inputusername" class="form-label">Username</label>
              <input type="username" class="form-control" id="exampleinputusername" aria-describedby="usernameHelp" placeholder="Masukkan username">
            </div>
            <div class="mb-3 mt-2">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 mt-2">
              <label for="inputjurusan" class="form-label">Jurusan</label>
              <input type="text" class="form-control" id="exampleinputjurusan" placeholder="Masukkan jurusan">
            </div>
            <div class="tombol">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" class="btn btn-danger">Reset</button>
            </div>      
          </form>
          <div class="create">
              <p>Sudah Memiliki akun? <a href="index.php">Login</a></p>
          </div>

        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>