<?php
// Jualan produk
// Komik
// Game
class Produk{
    //properti
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    //method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Drackmann", "Sony Computer", 25000);

echo "Komik : " . $produk1->getLabel();
echo "<hr>";    
echo "Games : " . $produk2->getLabel();