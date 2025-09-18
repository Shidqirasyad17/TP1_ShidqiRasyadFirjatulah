#include <iostream>
#include <string>
#include <vector>
#include "laptop.cpp"
using namespace std; 

class ManageLaptop
{
 
private:
    // Menyimpan daftar laptop menggunakan vector
    vector<Laptop> daftar_laptop;

public:
    // untuk menambah data laptop baru ke daftar laptop
    void addData(int id_laptop, string merk, int harga, int stok)
    {
        daftar_laptop.push_back(Laptop(id_laptop, merk, harga, stok)); 
          cout << "\nData Berhasil Ditambahkan! " << endl;
    }

    //untuk menampilkan seluruh data yang ada di daftar laptop
    void showData()
    {   
        cout << "\nDaftar Laptop:" << endl;
        if (daftar_laptop.empty())
        {
            cout << "Data Not Found" << endl;
        }
        else
        {   
            //looping untuk menampilkan semua data yang ada
            for (int i = 0; i < daftar_laptop.size(); i++)
            {
                cout << "ID : " << daftar_laptop[i].getid_laptop()
                     << " | Merk : " << daftar_laptop[i].getMerk()
                     << " | Harga : " << daftar_laptop[i].getHarga()
                     << " | Stok :  " << daftar_laptop[i].getStok() << endl;
            }
        }
    }

    //untuk mengupdate berdasarkan ID
    void updateData(int id_laptop, string merk = "", int harga = -1, int stok = -1)
    {
        for (int i = 0; i < daftar_laptop.size(); i++)
        {
            if (daftar_laptop[i].getid_laptop() == id_laptop) //cari id
            {
                  //Bisa mengupdate salah satunya saja
                if (!merk.empty())  //update merk kalau ada merk baru
                {
                    daftar_laptop[i].setMerk(merk);
                }
                if (harga != -1) //update harga kalau ada harga baru
                {
                    daftar_laptop[i].setHarga(harga);
                }
                if (stok != -1) //update stok kalau ada stok baru
                {
                    daftar_laptop[i].setStok(stok);
                }
                cout << "Data Laptop dengan ID : " << id_laptop << "\nUpdate Berhasil!\n";
                return;
            }
        }
        cout << "Data not found\n"; //kalau id yang ingin diupdate tidak ada
    }

    //untuk menghapus data laptop berdasarkan id
    void deleteData(int id_laptop)
    {   
        for (int i = 0; i < daftar_laptop.size(); i++)
        {
            if (daftar_laptop[i].getid_laptop() == id_laptop) //cek id
            {
                daftar_laptop.erase(daftar_laptop.begin() + i); //jika ada hapus dari vector
                cout << "Data Laptop dengan ID : " << id_laptop << "\nHapus Berhasil!\n";
                return;
            }
        }
        cout << "Data not found\n"; //jika id tidak ditemukan
    }

    //untuk mencari data berdasarkan merk
    void searchData(string merk)
    {
        int found = 0; // untuk menandakan apakaha sudah ditemukan

        for (int i = 0; i < daftar_laptop.size(); i++)// 
        {   
            //menggunakan find untuk mencari merk
            if (daftar_laptop[i].getMerk().find(merk) != string::npos)
            {
                cout << "ID: " << daftar_laptop[i].getid_laptop()
                     << " | Merk: " << daftar_laptop[i].getMerk()
                     << " | Harga: " << daftar_laptop[i].getHarga()
                     << " | Stok: " << daftar_laptop[i].getStok() << endl;
                found = 1;
            }
        }

        if (found == 0)
        {
            cout << "Data not found\n"; //kalau merk yg dicari tidak ada
        }
    }
};