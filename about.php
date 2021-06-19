<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="foto saya" title="M.Iqbal Maulana" alt="M.Iqbal Maulana" class="image-circle" width="230"
            style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p> Nama saya M.Iqbal Maulana dan sering dipanggil iqbal. Saya lahir di <i>Kebumen</i> pada tanggal 08 November 2000 
          sebagai anak pertama dari 3 bersaudara. Saat ini, saya tinggal bersama orang tua dan keluarga di <i>Bekasi</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
