<?php
require_once "laptop.php";

class ManageLaptop {
    private string $sessionKey = "daftar_laptop";

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION[$this->sessionKey])) {
            $_SESSION[$this->sessionKey] = [];
        }
    }

    //agar id nya otmatis dan berurutan
    private function IdOto(): int{
        $laptop = $_SESSION[$this->sessionKey];
        if (empty($laptop)) {
            return 1;
        }
        $lLaptop = end($laptop);
        return $lLaptop->getId_laptop() + 1;
    }

    //menambah data laptop baru
    public function addLaptop(Laptop $laptop): void {
          if ($laptop->getId_laptop() === 0) {
           $laptop->setId_laptop($this->IdOto());
        }
        $_SESSION[$this->sessionKey][] = $laptop;
    }


    public function getAll(): array {
        return $_SESSION[$this->sessionKey];
    }


    //mengupdate salah satu / semua data yang telah ada
    public function updateLaptop(int $id, string $merk = "", int $harga = -1, int $stok = -1, string $gambar = ""): void {
        foreach ($_SESSION[$this->sessionKey] as $laptop) {
            if ($laptop->getId_laptop() === $id) {
                if ($merk !== "") {
                    $laptop->setMerk($merk);}
                if ($harga !== -1) {
                    $laptop->setHarga($harga);}
                if ($stok !== -1) {
                    $laptop->setStok($stok);}
                if ($gambar !== "") {
                    $laptop->setGambar($gambar);};
                return;
            }
        }
    }
    
    //menghapus data menggunakan id
    public function deleteLaptop(int $id): void {
        foreach ($_SESSION[$this->sessionKey] as $index => $laptop) {
            if ($laptop->getId_laptop() === $id) {
                unset($_SESSION[$this->sessionKey][$index]);
                $_SESSION[$this->sessionKey] = array_values($_SESSION[$this->sessionKey]);
                return;
            }
        }
    }

    //untuk mencari data menggunakan merk
    public function searchLaptop(string $merk): array {
        $result = [];
        foreach ($_SESSION[$this->sessionKey] as $laptop) {
            if (stripos($laptop->getMerk(), $merk) !== false) {
                $result[] = $laptop;
            }
        }
        return $result;
    }
    
}
