<?php

require_once "Motor.php"; //<--- digunakan untuk memanggil file terpisah
require_once "Bengkel.php";

//class seperti blueprint, dan blueprint akan membuat objek rumah
 //class mendefinisikan object
//class dapat menyimpan data dan prilaku yang disebut dengan property dan method


//cara membuat class dawali dengan "class", di ikuti dengan nama class dan di batasi dengan "{}" untuk menyimpan property dan method
//aturan penamaan class sama seperti variable, jadi tidak boleh di awali dengan angka dan tidak boleh menggandung sepasi

class Honda extends Motor implements Bengkel
{  //<-------didalam ini dapat di isi property dan method

    private $bahanBakar = "Pertalite"; //<---nilai default nya adalah "pertalite"

    //constructor ini merupakan sebuah method yang sepesial. karena method ini adalah method yang otomatis di jalankan ketika sebuah kelas kita instansiasi (di buat object nya),jadi ketika kita membuat object mengunakan sebuah keyword "new" secara otomatis ada sebuah method yang di jalankan
    public function __construct($tipe) //<---(cara membuat contructor sama seperti membuat kita membuat method di dalam
    {                                  //    class. bedanya ada keyword seperti itu)

        $this->merk = get_class($this);// <--untuk memanggil property merk di file Motor.php
        $this->tipe = $tipe;
    }

    public function bahanBakar() { //<---- ini adalah method, di depanya di kasih visibility
        return "Bensin \n";
    }

    public function setbahanBakarVersion($bahanBakar) { //<---method set digunakan untuk setnilai
        $this->bahanBakar = $bahanBakar; //<--- digunakan untuk menimpa nilai default
    }

    public function getbahanBakarVersion() { //<---method get digunakan untuk melihat nilai
        return "Rekomendasi Bahan Bakar {$this->bahanBakar}"; //<---untuk memanggil hasil dari set nilai
    }

    public function oli() {
        return "SPX 1 \n";
    }
} //<---- harus di akhiri dengan ini