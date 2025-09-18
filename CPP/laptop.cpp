#include <iostream>
#include <string>
#include <vector>
using namespace std;

class Laptop
{

private:
    int id_laptop;
    string merk;
    int harga;
    int stok;

public:
    Laptop(int id_laptop, string merk, int harga, int stok)
    {
        this->id_laptop = id_laptop;
        this->merk = merk;
        this->harga = harga;
        this->stok = stok;
    }


    //getter setter atribut
    int getid_laptop()
    {
        return id_laptop;
    }

    string getMerk()
    {
        return merk;
    }

    void setMerk(string merk)
    {
        this->merk = merk;
    }

    int getHarga()
    {
        return harga;
    }

    void setHarga(int harga)
    {
        this->harga = harga;
    }

    int getStok()
    {
        return stok;
    }

    void setStok(int stok)
    {
        this->stok = stok;
    }
};