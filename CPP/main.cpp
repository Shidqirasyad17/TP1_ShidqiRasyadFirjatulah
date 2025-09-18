#include <iostream>
#include "managelaptop.cpp"
using namespace std;

int main()
{
    ManageLaptop ml; 
    int pilih;

    do
    {   
        //tampilan menu
        cout << "\n|===== MENU LAPTOP =====|\n";
        cout << "|  1. Tambah Laptop     |\n";
        cout << "|  2. Tampilkan Laptop  |\n";
        cout << "|  3. Update Laptop     |\n";
        cout << "|  4. Hapus Laptop      |\n";
        cout << "|  5. Cari Laptop       |\n";
        cout << "|  0. exit              |\n";
        cout << "|=======================|\n";

        cout << "Pilih Menu : ";

        cin >> pilih;

        if (pilih == 1) 
        {   
            //input data laptop yang ingin ditambahkan
            cout << "Masukan Data Data yang ingin ditambahkan!\n";
            int id_laptop, harga, stok;
            string merk;
            cout << "ID LAPTOP :";
            cin >> id_laptop;
            cout << "Merk :";
            cin >> merk;
            cout << "Harga :";
            cin >> harga;
            cout << "Stok :";
            cin >> stok;
            ml.addData(id_laptop, merk, harga, stok);
        }
        else if (pilih == 2)
        {   
            //menampilkan semua data laptop
            ml.showData();
        }
        else if (pilih == 3)
        {   
            //update berdasarkan id 
            int id_laptop, harga, stok;
            string merk;
            cout << "GUNAKAN -1 JIKA ADA YANG TIDAK INGIN DIPERBARUI\n";
            cout << "ID Laptop yang ingin di update :";
            cin >> id_laptop;
            cout << "Merk Baru:";
            cin >> merk;
            cout << "Harga Baru :";
            cin >> harga;
            cout << "Stok Baru:";
            cin >> stok;
            ml.updateData(id_laptop, merk, harga, stok);
        }
        else if (pilih == 4)
        { 
            // menghapus data berdasarkan id
            int id_laptop;
            cout << "ID Laptop yang ingin dihapus :";
            cin >> id_laptop;
            ml.deleteData(id_laptop);
        }
        else if (pilih == 5)
        {   
            //mencari merk laptop
            string merk;
            cout << "Cari Merk Laptop : ";
            cin >> merk;
            ml.searchData(merk);
        }
        else if (pilih == 0)
        {
            cout << "Selamat Tinggal!";
        }
        else
        {
            cout << "Pilihan tidak ada!";
        }
    } while (pilih != 0); //ulangi hinga pilihan = 0

    return 0;
}