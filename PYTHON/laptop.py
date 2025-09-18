class Laptop:

    def __init__(self, id_laptop: str, merk: str, harga: int, stok: int):
        self._id_laptop = int(id_laptop)
        self._merk = str(merk)
        self._harga = int(harga)
        self._stok = int(stok)

        # getter untuk atribut id_laptop

    def getid_laptop(self) -> int:
        return self._id_laptop

        # getter untuk atribut merk

    def getMerk(self) -> str:
        return self._merk

        # setter untuk atribut merk

    def setMerk(self, merk: str) -> None:
        self._merk = str(merk)

        # getter untuk atribut harga

    def getHarga(self) -> int:
        return self._harga

        # setter untuk atribut harga

    def setHarga(self, harga: int) -> None:
        self._harga = int(harga)

        # getter untuk atribut stok

    def getStok(self) -> int:
        return self._stok

        # setter untuk atribut stok

    def setStok(self, stok: int) -> None:
        self._stok = int(stok)
