#  MANAJEMEN TOKO ELEKTRONIK (TOKO LAPTOP)

**Janji:**  
Saya, Shidqi Rasyad Firjatulah 2408156, mengerjakan TP1 pada mata kuliah DPBO. Dengan keberkahan-Nya, saya menyatakan bahwa saya tidak melakukan kecurangan sebagaimana yang dispesifikasikan.

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
 - Menyediakan getter dan setter
  **Class ManageLaptop**
- Menyediakan metode untuk crud, seperti:
  - AddData (Untuk menambahkan data baru)
  - ShowData (Untuk melihat semua data yang ada di daftarlaptop)
  - UpdateData (Untuk mengupdate data jika ada yang ingin diubah)
  - DeleteData (Untuk menghapus data menggunakan id)
  - SearchData (Untuk mencari data berdasarkan merk)
    
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
  ![python](https://github.com/user-attachments/assets/15325f54-1981-42fc-a63c-f7f095370bb0)

---
### 3 PHP
- **Laptop Class:** Menyimpan atribut laptop (id, merk, harga, stok, gambar)  
- **ManageLaptop Class:** Menangani CRUD, data disimpan di **session**  
- **Index.php:** Form tambah laptop, tabel daftar laptop, search untuk mencari data laptop, tombol Update dan Hapus
  **Dokumentasi**
  ![python](https://github.com/user-attachments/assets/fb8e2465-7036-484d-b901-923931a99fdb)

---
### 4️4 Java
- **Laptop Class:** Menyimpan atribut laptop (id, merk, harga, stok)  
- **ManageLaptop Class:** CRUD menggunakan **ArrayList<Laptop>**  
- **Main Program:** Menerima input user dan memanggil method CRUD
  **Dokumentasi**
  <img width="1914" height="1020" alt="Java" src="https://github.com/user-attachments/assets/9e8801fb-550a-4242-8681-47949358df21" />

---


