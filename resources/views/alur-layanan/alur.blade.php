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
        <h1 class="p-0 fw-bold mb-3">Alur Layanan</h1>
        <div class="col-12 col-xl-8 p-0">
            <p class="url"><span class="text-secondary"><a class="text-secondary text-decoration-none" href="/">Si Mata Lia</a> > </span><span class="text-danger fw-bold">Alur Layanan</span></p>
            <!-- <iframe id="doc_23125" class="d-block mb-3" title="Struktur Organisasi Pemprov Kaltim" src="https://www.scribd.com/embeds/366861680/content?start_page=1&amp;view_mode=scroll&amp;access_key=key-pp8NtZQXIglozbQhQCSJ&amp;show_recommendations=true" width="100%" height="600px" frameborder="0" scrolling="no" data-auto-height="false" data-aspect-ratio="1.645985401459854"></iframe> -->
            <iframe class="scribd_iframe_embed" title="Sotk Cetak - Peta Jabatan" src="https://www.scribd.com/embeds/577362590/content?start_page=1&view_mode=scroll&access_key=key-qFqrIHDAdziXWzULjXSm" data-auto-height="false" data-aspect-ratio="0.6536231884057971" scrolling="no" id="doc_83802" width="100%" height="800" frameborder="0"></iframe>
            <iframe class="scribd_iframe_embed" title="Data Pns Ktl 2022 - Kec Tana Lia 2021" src="https://www.scribd.com/embeds/577362592/content?start_page=1&view_mode=scroll&access_key=key-nLqfd8xK4RoiZrUFl6Qw" data-auto-height="false" data-aspect-ratio="0.7068965517241379" scrolling="no" id="doc_14730" width="100%" height="800" frameborder="0"></iframe>
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