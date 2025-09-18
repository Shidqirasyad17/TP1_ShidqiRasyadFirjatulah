<?php

class Laptop{
    private int $id_laptop;
    private string $merk;
    private int $harga;
    private int $stok;
    private string $gambar;

    public function __construct(int $id_laptop, string $merk, int $harga, int $stok, string $gambar){
        $this->id_laptop = $id_laptop;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->gambar = $gambar;
    }

    //getter idlaptop
    public function getId_laptop(): int {
        return $this->id_laptop;
    }

    //setter id_laptop
    public function setId_laptop(string $id_laptop): void {
        $this->id_laptop = $id_laptop;
    }
    //getter merk
     public function getMerk(): string {
        return $this->merk;
    }
     //setter merk
    public function setMerk(string $merk): void {
        $this->merk = $merk;
    }
    //getter harga
    public function getHarga(): int {
        return $this->harga;
    }
     //setter harga
    public function setHarga(int $harga): void {
        $this->harga = $harga;
    }
    //getter stok
    public function getStok(): int {
        return $this->stok;
    }
     //setter stok
    public function setStok(int $stok): void {
        $this->stok = $stok;
    }
    //getter gambar
    public function getGambar(): string {
    return $this->gambar;
    }      
     //setter gambar
    public function setGambar(string $gambar): void {
    $this->gambar = $gambar;
    }
}

