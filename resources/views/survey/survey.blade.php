<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="shortcut icon" href="{{url('img/logo_small.png')}}" type="image/x-icon">
    <title>Survey</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        @if(session('success'))
        <div class="alert alert-success">
           {{session('success')}}
        </div>
        @endif
        <h1 class="p-0 fw-bold mb-3">Survey Kepuasan Pengguna</h1>
        <div class="col-12 col-xl-12 p-0">
            <p class="url"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > <a class="text-secondary text-decoration-none" href="/">Survey</a> > </span><span class="text-danger fw-bold">Survey Kepuasan Pengguna</span></p>
            <hr>
        </div>
        <div class="col-10 col-xl-10 p-0 m-auto ">
            <form action="/kirim-survey" method="post">
                @csrf
                <ul>
                    <li class="fw-bold">Apakah Anda Puas Dengan Pelayanan Website Ini?</li>
                    <input class="mt-3" type="radio" name="kepuasan" id="sangat_puas" value="Sangat Puas">
                    <label for="sangat_puas">Sangat Puas</label><br>
                    <input class="mt-3" type="radio" name="kepuasan" id="puas" value="Puas">
                    <label for="puas">Puas</label><br>
                    <input class="mt-3" type="radio" name="kepuasan" id="cukup_puas" value="Cukup Puas">
                    <label for="cukup_puas">Cukup Puas</label><br>
                    <input class="mt-3" type="radio" name="kepuasan" id="tidak_puas" value="Tidak Puas">
                    <label for="tidak_puas">Tidak Puas</label><br><br>

                    <li class="fw-bold">Kritik dan Saran</li><br>
                    <textarea name="kritik" id="kritik" cols="80" style="width: 95%;" rows="10" class="p-3" placeholder="Ketik di sini..."></textarea>
                </ul>
                <div class="d-flex justify-content-end me-5">
                    <button type="submit" class="btn btn-danger px-5 py-2">Kirim</button>
                </div>
            </form>
        </div>
    </section>
    <!-- akhir jumbotron -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>

</html>