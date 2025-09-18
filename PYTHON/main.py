from managelaptop import ManageLaptop

ml = ManageLaptop()


def main():
    while True:
        print("\n|===== MENU LAPTOP =====|")
        print("|  1. Tambah Laptop     |")
        print("|  2. Tampilkan Laptop  |")
        print("|  3. Update Laptop     | ")
        print("|  4. Hapus Laptop      |")
        print("|  5. Cari Laptop       | ")
        print("|  0. Exit              | ")
        print("|=======================|")

        pilih = input("Pilih Menu : ")

        if pilih == "1":
            id_laptop = int(input("ID Laptop :"))
            merk = input("Merk :")
            harga = int(input("Harga : "))
            stok = int(input("Stok : "))
            ml.addData(id_laptop, merk, harga, stok)

        elif pilih == "2":
            ml.showdata()

        elif pilih == "3":
            print("KOSONGKAN JIKA ADA YANG TIDAK INGIN DIPERBARUI")
            id_laptop = int(input("ID Laptop yang ingin di update : "))
            merk = input("Merk Baru : ")
            harga_baru = input("Harga Baru : ")
            stok_baru = input("Stok Baru :")

            harga = int(harga_baru) if harga_baru else None
            stok = int(stok_baru) if stok_baru else None
            merk = merk if merk else None

            ml.updatedata(id_laptop, merk, harga, stok)

        elif pilih == "4":
            id_laptop = int(input("ID Laptop yang ingin dihapus : "))
            ml.deletedata(id_laptop)

        elif pilih == "5":
            merk = input("Cari Merk Laptop : ")
            ml.searchdata(merk)

        elif pilih == "0":
            print("Selamat Tinggal!")
            break

        else:
            print("Pilihan tidak ada!")


if __name__ == "__main__":
    main()
