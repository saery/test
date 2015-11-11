<html>
<head>
    <title>Persenjataan dan Perlengkapan Perang Enterprise</title>
</head>
<?php
// Standar Senjata Kapal Perang Kelas Galaxy
require("torpedo.php");
require("laser.php");
// Standar Perisai Kapal Perang Kelas Galaxy
include("shielding.php");
// Standar Mesin Penggerak Kapal Perang Kelas Galaxy
include("impuls.php");
include('Orang.php');
include("warp.php");
include('karakter.php');
?>
<body>
LCAR: Cek kesiapan perlengkapan perang USS Enterprise NCC-1701-D
<ol type="1">
    <li> Torpedo : <?php echo $torpedo; ?>
    <li> Laser : <?php echo $laser; ?>
    <li> Perisai : <?php echo $shielding; ?>
    <li> Mesin Impuls : <?php echo $impuls; ?>
    <li> Mesin Warp : <?php echo $warp; ?>
</ol><br>
Commander La Forge, segera laporkan semua sistem persenjataan telah dicek
dan berfungsi dengan baik.
USS Enterprise siap menghadapi Kapal Romulan. <br>


<pre>
<?php
// deklarasi obyek baru
$manusia = new Orang();
$manusia->setNama('Anthonius');
$manusia->setJk('laki2');
$manusia->setAgama('Katolik');
$manusia->setTl('21/07/1980');
?>

<?php echo Dekorator::tebalkan('Nama: ').$manusia->getNama(); ?><br/>
<?php echo Dekorator::tebalkan('Agama: ').$manusia->getAgama(); ?><br/>
<?php echo Dekorator::tebalkan('JK: ').$manusia->getJk();?><br/>
<?php echo Dekorator::tebalkan('Tanggal Lahir: ').Dekorator::italic($manusia->getTl()); ?><br/>

<?php echo Dekorator::anchor('Facebook','http://www.facebook.com'); ?>
<?php echo Dekorator::anchor('Twitter','http://www.twitter.com'); ?>
<?php echo Dekorator::anchor('Facebook','http://www.facebook.com'); ?>
<?php echo Dekorator::anchor('Twitter','http://www.twitter.com'); ?>
<?php echo Dekorator::anchor('Facebook','http://www.facebook.com'); ?>
<?php echo Dekorator::anchor('Twitter','http://www.twitter.com'); ?>
</pre>

</body>
</html>