<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="box">
        <div class="container">

            <div class="top-header">
                <h5>Laundry Dar</h5>
                <p>Cepat bersih dan wangi</p>
            </div>

            <form action="/form" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" placeholder="...">
                    @error('nama')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" name="notelp" placeholder="...">
                    @error('notelp')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Berat laundry (minimal 2.5 kg, maksimal 99.99 kg)</label>
                    <input class="form-control" type="text" name="berat" placeholder="...">
                    @error('berat')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <div class="select-wrapper">
                        <select id="layanan" name="layanan" class="form-control">
                            <option selected value="0">Cuci kilat (Rp9000/kg)</option>
                            <option value="1">Cuci basah (Rp3000/kg)</option>
                            <option value="2">Cuci kering (Rp4000/kg)</option>
                            <option value="3">Cuci lipat (Rp5000/kg)</option>
                            <option value="4">Cuci setrika (Rp6000/kg)</option>
                            <option value="5">Setrika (Rp4000/kg)</option>
                            <option value="6">Penghilangan noda (Rp15000/kg)</option>
                        </select>
                        <div class="select-icon"></div>
                    </div>
                    @error('layanan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Bukti Pembayaran (transfer ke ovo/gopay/dana 089371623991)</label>
                    <input class="form-control" type="file" name="bukti">
                    @error('bukti')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>

        </div>
    </div>

    <div class="submit">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" `integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>