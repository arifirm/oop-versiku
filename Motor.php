<?php

//abstract class adalah sebuah kelas yang tidak dapat di instansiasi. jadi kita tidak bisa bikin object dari kelas abstract
//class abstract ini akan mendefinisikan interface untuk kelas lain yang menjadi turunannya
//class abstact ini juga akan berperan sebagai "kerangka dasar" untuk kelas turunannya. jadi nanti kelas turunannya akan berkerja seseuai dengan kerangka atau interface yang telah kita buat di class abstract ini
//di dalam class abstract ini harus memiliki minimal 1 method abstract. dan nanti method ini yang akak kita anggap sebagai interface dari method yang akan kita buat di class-class turunannya
// absctract digunakan dalam pewarisan/inheritance untuk memaksakan implementasi method abstract yang sama untuk kelas trunannya. 
abstract class Motor //<---class Motor adalah kelas utama untuk mendefinisikan komponen dasar dari sebuah motor
{ //<-------didalam ini dapat di isi property dan method

    protected $merk;   //<------(ini adalah property.di depan property tambahi dengan visibility di depannya
    //                         ada 3 visibility (public, protected, private))

    protected $tipe; //<---- cara bikinya sama seperti variabel, tetapi di tambahi visibility di depannya

    protected $gear = 0; //<---- di defiisikan secara default

    public function nyalakan() {  
        echo "Menyalakan {$this->merk} {$this->tipe} \n";
    }

    public function matikan() {
        echo "Mematikan {$this->merk} {$this->tipe} \n";
    }

    public function gearUp() {
        if ($this->gear < 5) {
            $this->gear++;
            echo "gear motor {$this->merk} {$this->tipe} naik\n";
        }
    }

    public function gearDown() {
        if ($this->gear != 0) {
            $this->gear--;
            echo "gear motor {$this->merk} {$this->tipe} turun\n";
        }
    }

    abstract public function bahanBakar(); //<---(ini adalah method abstract. method abstract tidak boleh punya 
    //                                           implementasi. hanya boleh punya interfacenya saja)

    public function getMerk() { //<---- ini adalah method, di depanya di kasih visibility
        return $this->merk . "\n"; //<---(untuk menggambil variable di atas harus menambahkan keyword 
    }//                                   "$this")
    

    public function getTipe() {
        return $this->tipe. "\n";
    }

    public function getGear() {
        return "gear sekarang : {$this->gear} \n";
    }
} //<---- harus di akhiri dengan ini