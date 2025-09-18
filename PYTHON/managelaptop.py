from laptop import Laptop


class ManageLaptop:
    def __init__(self):
        self.daftar_laptop = []

    # untuk menambahkan data baru ke daftar laptop
    def addData(self, id_laptop, merk, harga, stok):
        self.daftar_laptop.append(Laptop(id_laptop, merk, harga, stok))
        print("\nData Berhasil Ditambahkan!")
    # untuk menampilkan data yang ada di daftar laptop
    def showdata(self):
        print("\nDaftar Laptop:")
        if not self.daftar_laptop:
            print("Data Not Found")
        else:
            for i in self.daftar_laptop:
                print(
                    f"ID: {i.getid_laptop()} | Merk: {i.getMerk()} | Harga: {i.getHarga()} | Stok: {i.getStok()}"
                )

    # untuk mengupdate data menggunakan id
    def updatedata(self, id_laptop, merk=None, harga=None, stok=None):
        for i in self.daftar_laptop:
            if i.getid_laptop() == id_laptop:  # jika id ditemukan
                if merk is not None:  # jika ada merk baru
                    i.setMerk(merk)
                if harga is not None:  # jika ada harga baru
                    i.setHarga(harga)
                if stok is not None:  # jika ada stok baru
                    i.setStok(stok)
                print(f"Data Laptop dengan ID : {id_laptop} berhasil diperbarui")
                return
        print("Data not found")  # jika id yang dicari tidak ditemukan

    # untuk menghapus data pada daftar laptop
    def deletedata(self, id_laptop):
        for idx, i in enumerate(self.daftar_laptop):
            if i.getid_laptop() == id_laptop:
                del self.daftar_laptop[idx]
                print(f"Data Laptop dengan ID : {id_laptop} berhasil dihapus")
                return
        print("Data not found")

    # untuk mencari data menggunakan merk
    def searchdata(self, merk):
        found = False
        for i in self.daftar_laptop:
            if merk() in i.getMerk():
                print(
                    f"ID: {i.getid_laptop()} | Merk: {i.getMerk()} | Harga: {i.getHarga()} | Stok: {i.getStok()}"
                )
                found = True
        if not found:
            print("Data not found")
