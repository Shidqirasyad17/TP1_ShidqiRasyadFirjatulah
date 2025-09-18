#  MANAJEMEN TOKO ELEKTRONIK (TOKO LAPTOP)

**Janji:**  
Saya Shidqi Rasyad Firjatulah dengan NIM 2408156 mengerjakan TP1 pada mata kuliah DPBO untuk keberkahannya saya menyatakan bahwa saya tidak melakukan kecurangan sebagaimana yang dispesifikasikan.

---

# TUJUAN PROGRAM
Program ini bertujuan membuat **aplikasi CRUD** untuk mengelola **data laptop**, menggunakan beberapa bahasa pemrograman: **C++, Python, PHP, dan Java**.

---

# FLOW KODE
**Class Laptop**
- Menyimpan Data Laptop seperti : 
  - Id_Laptop
  - Merk
  - Harga
  - Stok
  - Gambar(hanya di php)
  - Menyediakan getter dan setter
  **Class ManageLaptop**
- Menyediakan metode untuk crud, seperti:
  - AddData -> membuat data laptop baru -> menyimpan ke list/vector/arrayList/session
  - ShowData -> Mengecek data kosong atau tidak -> menampilkan semua data
  - UpdateData -> mencari berdasarkan id -> mengubah data yang ditemukan
  - DeleteData -> mencari berdasarkan id -> menghapus data yang ditemukan
  - SearchData -> Mencari berdasarkan merk -> menampilkan data
---
##  FITUR UTAMA
- **TAMBAH LAPTOP**  
- **TAMPILKAN LAPTOP**  
- **UPDATE LAPTOP**  
- **HAPUS LAPTOP**  
- **CARI LAPTOP**  
---
##  DESAIN PROGRAM

### 1 C++ 
- **Laptop Class:** Menyimpan atribut laptop (id, merk, harga, stok)  
- **ManageLaptop Class:** Mengelola CRUD menggunakan vector
- **Main Program:** Menerima input user dan memanggil method CRUD
 **Dokumentasi**
  <img width="1904" height="913" alt="CPP" src="https://github.com/user-attachments/assets/fa8a3a4d-cade-4ac4-b033-6194d0fcaec8" />
---
### 2️ Python
- **Laptop Class:** Menyimpan atribut laptop (id, merk, harga, stok)    
- **ManageLaptop Class:** Mengelola CRUD menggunakan **list**  
- **Main Program:** Menerima input user dan memanggil method CRUD
  **Dokumentasi**
![python](https://github.com/user-attachments/assets/93849b79-c5c3-4e7a-b81b-fbc28b7acebe)
---
### 3 PHP
- **Laptop Class:** Menyimpan atribut laptop (id, merk, harga, stok, gambar)  
- **ManageLaptop Class:** Menangani CRUD, data disimpan di **session**  
- **Index.php:** Form tambah laptop, tabel daftar laptop, search untuk mencari data laptop, tombol Update dan Hapus
  **Dokumentasi**
  <img width="1919" height="1079" alt="PHP" src="https://github.com/user-attachments/assets/694871ed-76e1-4ac3-ba10-5859a62ea125" />
---
### 4️4 Java
- **Laptop Class:** Menyimpan atribut laptop (id, merk, harga, stok)  
- **ManageLaptop Class:** CRUD menggunakan **ArrayList<Laptop>**  
- **Main Program:** Menerima input user dan memanggil method CRUD
  **Dokumentasi**
  <img width="1914" height="1020" alt="Java" src="https://github.com/user-attachments/assets/9e8801fb-550a-4242-8681-47949358df21" />
---


