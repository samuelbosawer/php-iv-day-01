    <?php
        include_once('include/header.php');
        // Nama Lengkap
        $namaDepan = 'Samuel';
        $namaBelakang = 'Bosawer';

        $textWelcome = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, suscipit!';
        $textSubTitle = 'Belajar PHP DAY 01';
    ?>

    <!-- Hello -->
    <h1>Hello  <?php echo $namaDepan .' '.$namaBelakang?> </h1>
    <h2> <?= $textSubTitle?> </h2>
    <p> <?= $textWelcome?> </p>
    <a href="home.php"> Halaman Home</a>

    <?php include_once('include/footer.php') ?>
