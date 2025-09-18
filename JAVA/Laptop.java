import java.util.ArrayList;
public class Laptop {

    private int id_laptop;
    private String merk;
    private int harga;
    private int stok;

    public Laptop(int id_laptop, String merk, int harga, int stok){
            this.id_laptop = id_laptop;
            this.merk = merk;
            this.harga = harga;
            this.stok = stok;
    }

    public int getId_laptop(){
        return id_laptop;
    }

    public String getMerk(){
        return merk;
    }

    public void setMerk(String merk){
        this.merk = merk;
    }

    public int getHarga(){
        return harga;
    }

    public void setHarga(int harga){
        this.harga = harga;
    }

    public int getStok(){
        return stok;
    }

    public void setStok(int stok){
        this.stok = stok;
    }
}