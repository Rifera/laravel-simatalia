<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    //
    public function formulirKependudukan(){
        $data = [
            [
                "url" => "https://drive.google.com/file/d/1yuANDM67g5ROJrT0fDyqP_ubH5C4eAa2/view?usp=sharing",
                "nama" => "Formulir Biodata Penduduk Warga Negara",
            ],
            [
                "url" => "https://drive.google.com/file/d/1m92LGMVPG1nqL6WN4xrIHkl-dTCUzFpc/view?usp=sharing",
                "nama" => "Formulir Permohonan Perubahan Kartu Keluarga",
            ],
            [
                "url" => "https://drive.google.com/file/d/1d0JeeUBmRAkvmLNpULFaH_WzFVnGG4Wh/view?usp=sharing",
                "nama" => "Formulir Permohonan Perubahan Kartu Tanda Penduduk",
            ],
            [
                "url" => "https://drive.google.com/file/d/1s7Ouk1Dezf-G-w-z0Q91-2EFDbBI_tU-/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah Datang WNI Dalam Satu Desa/Kelurahan",
            ],
            [
                "url" => "https://drive.google.com/file/d/1JWz0GuChjc2BK9VFCREND1xyZeNc_NXL/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah WNI Antar Desa/Kelurahan Dalam Satu Kecamatan",
            ],
            [
                "url" => "https://drive.google.com/file/d/1-DxpiVwpYpIIm3_wk3KeGGcteMh6m34p/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah Datang WNI Antar Desa/Kelurahan Dalam Satu Kecamatan",
            ],
            [
                "url" => "https://drive.google.com/file/d/1WAcx4hts4RokyffdM1TJO0AGRP82uB7d/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah WNI Antar Kecamatan Dalam Satu Kabupaten/Kota",
            ],
            [
                "url" => "https://drive.google.com/file/d/16Xp4l6OhJ_PGro2Z0MY1ggleN9f7WRcJ/view?usp=sharing",
                "nama" => "Surat Keterangan Pindah WNI Antar Kecamatan Dalam Satu Kabupaten/Kota",
            ],
            [
                "url" => "https://drive.google.com/file/d/1oD6P1J6F1Ab1D7-nS6nOpYTw6V0Ovnr9/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah Datang WNI Antar Kecamatan Dalam Satu Kabupaten/Kota",
            ],
            [
                "url" => "https://drive.google.com/file/d/1bOGhirp40CGMw6Em8GtpU3FxAVgRfUcY/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah Datang WNI Antar Kecamatan Dalam Satu Kabupaten/Kota",
            ],
            [
                "url" => "https://drive.google.com/file/d/1hnneQimBgi8rxG5tp1sQBWTAHLtfW9Ki/view?usp=sharing",
                "nama" => "Surat Pengantar Pindah Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1s9547W9HyqBRbbwleaF2PjyqxtCttCNJ/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah WNI Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1IAa2L1BCqFgpRur6oez-dKVwTJ1iV1C2/view?usp=sharing",
                "nama" => "Surat Pengantar Pindah Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1fgBJNGnU47tm9C6_o2qPJ4ZzrJu2n3R3/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah WNI Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1P-wbbUSfU6OgOTRgM0RoawgB5gaiFbLM/view?usp=sharing",
                "nama" => "Surat Keterangan Pindah WNI Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1XOEiRCFbMIW1TeiMdXAud8cojDTGpBVA/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah Datang WNI Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1mrN_SddaIGoQrYL-1awMO8X9yVit099e/view?usp=sharing",
                "nama" => "Formulir Permohonan Pindah Datang WNI Antar Kabupaten/Kota atau Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1THiFnWZxVIIzHxXvGAUnJdlA73IN69_2/view?usp=sharing",
                "nama" => "Surat Keterangan Pindah Datang WNI Antar Kabupaten/Kota dan Antar Provinsi",
            ],
            [
                "url" => "https://drive.google.com/file/d/1yH5YDR1HC8QV8L2XD_61JSY207IXnew5/view?usp=sharing",
                "nama" => "Formulir Permohonan Kartu Keluarga Baru",
            ],
            [
                "url" => "https://drive.google.com/file/d/1zMApyAi3fWfI2wyqcFl7aAhadPrBzBi0/view?usp=sharing",
                "nama" => "Formulir Permohonan Perubahan Kartu Keluarga",
            ],
        ];

        return view('layanan.kependudukan', ['data' => $data]);
    }

    public function alurView(){
        $data = [
            [
                "url" => "https://drive.google.com/file/d/15gwQrVup_sms2WVFEJHFagO1hFClh0pd/view?usp=sharing",
                "nama" => "SOP Akta Perkawinan",
            ],
            [
                "url" => "https://drive.google.com/file/d/1pTkBEGlFV4i2yYGeqMqqUdbdC9dBYD03/view?usp=sharing",
                "nama" => "SOP Permohonan Akta Kelahiran 3in1",
            ],
            [
                "url" => "https://drive.google.com/file/d/1THxT2dn9Zw0YiAjqe52xQ_v-a8GkkCBC/view?usp=sharing",
                "nama" => "SOP Permohonan Akta Kelahiran",
            ],
            [
                "url" => "https://drive.google.com/file/d/1y6ExNx2KbNUPHclEw36eQN4OCerrnqwN/view?usp=sharing",
                "nama" => "SOP Permohonan Akta Kematian",
            ],
            [
                "url" => "https://drive.google.com/file/d/1Gseoulhc8EsAVgl8C7KOMUEHzkWmiD0p/view?usp=sharing",
                "nama" => "SOP Permohonan Akta Perceraian",
            ],
            [
                "url" => "https://drive.google.com/file/d/1UdTFwaBW0HROmo-zSPOi8iLDTlQNKAMj/view?usp=sharing",
                "nama" => "SOP Permohonan KK Baru",
            ],
            [
                "url" => "https://drive.google.com/file/d/1ITjE9xYhv-UFHAuasusPmoeLuXCQEcqp/view?usp=sharing",
                "nama" => "SOP Permohonan KK Hilang",
            ],
            [
                "url" => "https://drive.google.com/file/d/10MNFwXTucdBO0mEMeuCrAsiJ_RO9-UKE/view?usp=sharing",
                "nama" => "SOP Permohonan KK Penambahan Anggota Keluarga",
            ],
            [
                "url" => "https://drive.google.com/file/d/1R9zqBr1FgPbEOhYwXCTC-jksJdDKeAz6/view?usp=sharing",
                "nama" => "SOP Permohonan KK Perubahan",
            ],
            [
                "url" => "https://drive.google.com/file/d/13tkmSc3PgczIMcManmPF0oGmTlaUOPj9/view?usp=sharing",
                "nama" => "SOP Permohonan KK Pindah Datang",
            ],
            [
                "url" => "https://drive.google.com/file/d/1gMFpbyX31Mx2YXcezpXdTd1Jtz5182FO/view?usp=sharing",
                "nama" => "SOP Permohonan KTP-el Baru",
            ],
            [
                "url" => "https://drive.google.com/file/d/1wuWYdqa0PdnCxsNcPZcFw34IJtYqN1_i/view?usp=sharing",
                "nama" => "SOP Permohonan KTP-el Hilang-Rusak",
            ],
            [
                "url" => "https://drive.google.com/file/d/1rlmfE4PknLmRCHTTYoB_iJPOAAq0oo_0/view?usp=sharing",
                "nama" => "SOP Permohonan KTP-el Perubahan",
            ],
            [
                "url" => "https://drive.google.com/file/d/19qHtPQHUJobYyIp5F6QA8YMKwRnyN9Ys/view?usp=sharing",
                "nama" => "SOP Permohonan SKPWNI",
            ],

        ];

        return view('alur-layanan.alur', ['data' => $data]);
    }
    public function formulirSipil(){
        $data = [
            [
                "url" => "https://drive.google.com/file/d/17kpARNbR_V86m4MulAsaXjV-gewuL3Si/view?usp=sharing",
                "nama" => "Surat Keterangan Kelahiran",
            ],
            [
                "url" => "https://drive.google.com/file/d/1CeTvoKXMAoZkV_oNbTQlk43aQabJWxVu/view?usp=sharing",
                "nama" => "Surat Keterangan Kelahiran (Warga Negara Indonesia)",
            ],
            [
                "url" => "https://drive.google.com/file/d/1AD_pcCgxF9I9e-yFU8LPZbkCgedvxLf5/view?usp=sharing",
                "nama" => "Formulir Pencatatan Perkawinan",
            ],
            [
                "url" => "https://drive.google.com/file/d/1wSOb0Bh4_h7sXu8X5CH4vpfOhueaR72e/view?usp=sharing",
                "nama" => "Formulir Pencatatan Perceraian",
            ],
            [
                "url" => "https://drive.google.com/file/d/1ohas7oHsk1S6nL5eI8IzqM-O5auPZDWG/view?usp=sharing",
                "nama" => "Formulir Pelaporan Kematian",
            ],
            [
                "url" => "https://drive.google.com/file/d/1ZVUabS5hjie7cRgVBQmKNLjf0YcbvAXb/view?usp=sharing",
                "nama" => "Surat Keterangan Kematian",
            ],
            [
                "url" => "https://drive.google.com/file/d/1JDtYicO63zDPxAF6BPhzY7IKyjQ1uiRP/view?usp=sharing",
                "nama" => "Formulir Pelaporan Pengakuan Anak",
            ],
            [
                "url" => "https://drive.google.com/file/d/1PNK7-hQJTln7cUsA0uWvv4coIWaXX2Pk/view?usp=sharing",
                "nama" => "Formulir Pelaporan Pengesahan Anak",
            ],

        ];

        return view('layanan.pencatatan-sipil', ['data' => $data]);
    }
}