<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <div class="about-section">
        <h1 style ="text-align:center">ABOUT US</h1>

            <p style ="text-align:center"> <b>NAMA  : SYUKUR YAKUB</b></p>
            <p style ="text-align:center"> <b>NIM   : 311910696</b></p>
            <p style ="text-align:center"> <b>KELAS : TI.19.C1</b></p>
            <p style ="text-align:center"> <b><i>from Pelita Bangsa University</i></b></p>

        <h2 style = "text-align:center">LOGO UNIVERSITAS PELITA BANGSA</h2>
            <img class = "logo" src="logo_upb.png" width="200" >
            <style>
                h2
                {
                    background-color: yellow;
                    color: rgb(20, 57, 220);
                    font-family: sans-serif;
                    text-align: center;
                    width: 45%;
                    margin:auto;
                    padding: 10px;
                }  
            </style> 
    </div>
    <h3>DESKRIPSI TENTANG UNIVERSITAS PELITA BANGSA</h3>
    <style>
        h3
        {
            background-color: yellow;
            color: rgb(20, 57, 220);
            font-family: sans-serif;
            text-align: center;
            width: 100%;
            margin:auto;
            padding: 10px;
        }  
    </style>
    <p3><i>Pelita Bangsa (UPB) merupakan perguruan tinggi baru hasil perubahan 
    bentuk dari penggabungan antara Sekolah Tinggi Ilmu Ekonomi (STIE) dan Sekolah Tinggi Teknik (STT) 
    sesuai dengan Surat Keputusan Menteri Pendidikan Nasional Republik  Indonesia Nomor : 664/KPTI/I/2019 tanggal 2 Agustus 2019.
    UPB berdiri pada hamparan lahan seluas 11.603 m2yang beralamatkan 
    di Jalan Inpeksi Kalimalang Tegal Danas Arah DELTAMAS, Cikarang Pusat – Kabupaten Bekasi,
    yang mana berada di tengah-tengah Pusat Segitiga Emas LIPPO Cikarang/ Meikarta, Jababeka, 
    Delta Mas yang dikelilingi oleh Kawasan Industri terbesar di Asia Tenggara</i></p3>
    
    <?= $this->include('template/footer'); ?>
</body>
</html>
