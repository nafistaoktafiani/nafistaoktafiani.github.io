<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <button class="btn btn-danger">Danger</button>
    <button class="btn btn-warning">Warning</button>
    <button class="btn btn-info">Info</button>
    <button class="btn btn-success">Success</button>
    <button class="btn btn-primary">Primary</button>
    <button class="btn btn-dark">Dark</button>
    <button class="btn btn-secondary">Secondary</button>
    <button class="btn btn-light">Light</button>
    <br>
    <table border="1" class="table table-hover table-bordered table-striped table-primary">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>OPSI</th>

    </tr> 
    <tr>
        <td>23</td>
        <td>Nafista Oktafiani Hidayat</td>
        <td>XI RPL</td>
        <td><i</td>
    </tr>
</table>
<br><br>
<form action="" method="post" class="form form-control">
    <div class="row">
        <label class="col col-2">Nama</label>
        <div class=" col col-6">
            <input type="text" class="form-control" name="nama" placeholder="Masukan nama anda" require>
        </div>
    <div class="row md">
        <label class="col col-2">Email</label>
        <div class=" col col-6">
            <input type="email" class="form-control" name="email" placeholder="Masukan email anda" require>
        </div>
    <div class="row md">
        <label class="col col-2">Alamat</label>
        <div class=" col col-6">
            <textarea name="alamat" class="form-control" placeholder="Masukan alamat anda"></textarea>
        </div>
</div>
<div class="row md">
    <input type="submit" name="kirim" value="KIRIM" class="btn btn-info col-1">
</div>
</body>
</html>