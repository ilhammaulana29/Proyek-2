<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form Register</title>
</head>
<body>
    <div class="container">
        <form>
            <h3 style="font-weight: bold;">Daftar</h3>
            <div class="mb-3">
                <label for="exampleInputNama" class="nama">Nama Lengkap<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Lengkap">
            </div>            
            <div class="mb-3">
                <label for="exampleInputEmail" class="email">Alamat Email<span style="color: red;">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Alamat Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputSandi" class="sandi">Kata Sandi<span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="exampleInputSandi" placeholder="Kata Sandi">
            </div>
            <div class="mb-3">
                <label for="exampleInputUlangiSandi" class="ulang sandi">Ulangi Kata Sandi<span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="exampleInputUlangiSandi" placeholder="Ulangi Kata Sandi">
            </div>
            <div class="mb-3">
                <label for="exampleInputNomor" class="nomor handphone">Nomor Handphone<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputNomor">
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-success btn-login custom-button" style="background:rgba(230, 83, 176, 0.756)">Daftar</button>
            </div>
            <div style="text-align: center; margin: 20px 0;">
                <span style="font-weight: bold;">Sudah punya akun?</span>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-success btn-login custom-button" style="background: rgba(230, 83, 176, 0.756)">Daftar di sini</button>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-success btn-login custom-button" style="background: rgba(230, 83, 176, 0.756)">Verifikasi ulang di sini</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>