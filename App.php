<?php

require_once "Honda.php"; //<--- memanggil file terpisah
require_once "Suzuki.php";
require_once "Kawasaki.php";

// definisi object adalah
// Instance yang di definisikan oleh class jadi bentuk nyatanya adalah object bukan class karena class hanya template saja
//banyak object dapat dibuat menggunakan satu class
//object dibuat dengan menggunakan keyword "new"

$hondaSupra = new Honda('Supra GTR');
$hondaCb = new Honda('Cb150r'); //<---- (untuk membuat instace lain kita harus membuat variabel lain dengan nama
//										 yang berbeda disi dengan "new" dan "nama class")

$suzukiGsx = new Suzuki('Gsx 150r');
$kawasakiZx = new Kawasaki('Zx 250r');

echo $hondaSupra->getMerk(); //<---- cara memanggil method
echo $suzukiGsx->getMerk();
echo $kawasakiZx->getMerk();

echo "<hr>";

echo $hondaSupra->bahanBakar();
echo "<br>";
echo $hondaSupra->nyalakan();
echo "<br>";
echo $hondaSupra->getMerk();
echo "<br>";
echo $hondaSupra->getTipe();
echo "<br>";
echo $hondaSupra->getGear();
echo "<br>";
echo $hondaSupra->gearUp();
echo "<br>";
echo $hondaSupra->gearUp();
echo "<br>";
echo $hondaSupra->gearUp();
echo "<br>";
echo $hondaSupra->gearUp();
echo "<br>";
echo $hondaSupra->gearUp();
echo "<br>";
echo $hondaSupra->gearUp();
echo $hondaSupra->getGear();
echo "<br>";
echo $hondaSupra->gearDown();
echo "<br>";
echo $hondaSupra->getGear();
echo "<br>";
echo $hondaSupra->oli();
echo "<br>";
echo $hondaSupra->matikan();

echo "<hr>";
echo $hondaCb->getMerk();
echo "<br>";
echo $hondaCb->getTipe();
echo $hondaCb->setbahanBakarVersion("Pertamax");
echo "<br>";
echo $hondaCb->getbahanBakarVersion();
echo "<hr>";

echo $kawasakiZx->bahanBakar();
echo "<br>";
echo $kawasakiZx->nyalakan();
echo "<br>";
echo $kawasakiZx->getMerk();
echo "<br>";
echo $kawasakiZx->getTipe();
echo "<br>";
echo $kawasakiZx->getGear();
echo "<br>";
echo $kawasakiZx->gearUp();
echo "<br>";
echo $kawasakiZx->gearUp();
echo "<br>";
echo $kawasakiZx->gearUp();
echo "<br>";
echo $kawasakiZx->gearUp();
echo "<br>";
echo $kawasakiZx->gearUp();
echo "<br>";
echo $kawasakiZx->gearUp();
echo $kawasakiZx->getGear();
echo "<br>";
echo $kawasakiZx->gearDown();
echo "<br>";
echo $kawasakiZx->getGear();
echo "<br>";
echo $kawasakiZx->oli();
echo "<br>";
echo $kawasakiZx->matikan();