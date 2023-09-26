<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    @if (session('status'))
    <div class="card alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <p class="card-text" style="font-size: 14px">Nama: <?php echo $results['nama']; ?></p>
            <p class="card-text" style="font-size: 14px">Nomor telepon: <?php echo $results['notelp']; ?></p>
            <p class="card-text" style="font-size: 14px">Berat: <?php echo $results['berat']; ?></p>
            <p class="card-text" style="font-size: 14px">Layanan yang dipilih:
                <?php
                if ($results['layanan'] == 0) echo 'Cuci kilat';
                else if ($results['layanan'] == 1) echo 'Cuci kering';
                else if ($results['layanan'] == 2) echo 'Cuci basah';
                else if ($results['layanan'] == 3) echo 'Cuci lipat';
                else if ($results['layanan'] == 4) echo 'Cuci setrika';
                else if ($results['layanan'] == 5) echo 'Setrika';
                else if ($results['layanan'] == 6) echo 'Penghilangan noda';
                ?></p>
            <p class="card-text" style="font-size: 14px">Bukti pembayaran: </p>
            <img class="img-fluid" src="{{ url('img').'/'.$results['bukti'] }}">
        </div>
    </div>
    
    <div class="print">
        <button class="btn btn-danger"><a style="text-decoration: none; color: white;">Cetak nota</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" `integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>