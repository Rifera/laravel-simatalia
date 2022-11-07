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
    <title>Alur Layanan</title>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- akhir Navbar -->
    </>
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Formulir Kependudukan</h1>
        <div class="col-12 col-xl-8 p-0">
            <p class="url"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > </span><span class="text-danger fw-bold">Formulir Kependudukan</span></p>
            <!-- <h2>Formulir Biodata Penduduk Warga Negara</h2> -->
            <!-- <h5 class="p-0 fw-bold">Formulir Biodata Penduduk Warga Negara</h5>
            <iframe src="https://drive.google.com/file/d/1yuANDM67g5ROJrT0fDyqP_ubH5C4eAa2/preview" width="100%" height="600" allow="autoplay"></iframe>

            <h5 class="p-0 fw-bold mt-3">Formulir Permohonan Perubahan Kartu Keluarga</h5>
            <iframe src="https://drive.google.com/file/d/1m92LGMVPG1nqL6WN4xrIHkl-dTCUzFpc/preview" width="100%" height="600" allow="autoplay"></iframe>

            <h5 class="p-0 fw-bold mt-3">Formulir Permohonan Kartu Tanda Penduduk</h5>
            <iframe src="https://drive.google.com/file/d/1d0JeeUBmRAkvmLNpULFaH_WzFVnGG4Wh/preview" width="100%" height="600" allow="autoplay"></iframe> -->
            <ol>
                @foreach($data as $data)
                <li><a href="{{ $data['url'] }}" target="_blank">{{ $data['nama'] }}</a></li>
                @endforeach
            </ol>

        </div>
        <div class="col d-flex flex-column side-content">
            <h4 class="fw-bolder mb-3">Terbaru</h4>
            <div class="d-flex flex-column flex-md-row flex-xl-column gap-4">
                <div class="card pad-40">
                    <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid ">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-title mb-2 text-muted">01 November 2021</p>
                    </div>
                </div>
                <div class="card pad-40">
                    <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-title mb-2 text-muted">01 November 2021</p>
                    </div>
                </div>
                <div class="card pad-40">
                    <img src="{{url('img/img-berita-1.png')}}" alt="berita-1" class="img-fluid">
                    <div class="card-body px-0 pb-0">
                        <h5 class="card-title fw-bold">Judul Berita</h5>
                        <p class="card-title mb-2 text-muted">01 November 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir jumbotron -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>

</html>