import java.util.ArrayList;

public class ManageLaptop{

// menyimpan data daftar laptop menggunakan array lisy
private ArrayList<Laptop> daftar_laptop = new ArrayList<>();

    //untuk menambahkan data laptop baru ke daftar laptop
    public void addData(int id_laptop, String merk, int harga, int stok){
        daftar_laptop.add(new Laptop(id_laptop, merk, harga, stok));
        System.out.println("\nData Berhasil ditambahkan!");
    }

    //untuk menampilkan semua data laptop
    public void showData(){
        System.out.println("\nDaftar Laptop:\n");
        if(daftar_laptop.isEmpty()){ //jika daftar laptop kosong
            System.out.println("\nData Not Found!");
        }else{  //jika tidak kosong looping untuk semua data yang ada di daftar laptop
            for(int i = 0; i < daftar_laptop.size(); i++){
                System.out.println(
                "ID : " + daftar_laptop.get(i).getId_laptop() +
                " | Merk : " + daftar_laptop.get(i).getMerk() +
                " | Harga : " + daftar_laptop.get(i).getHarga() +
                " | Stok : " + daftar_laptop.get(i).getStok()
                );
            }
        }
    }

    //untuk mengupdate data menggunakan id
    public void updateData(int id_laptop, String merk , int harga, int stok ){
        for(int i = 0; i < daftar_laptop.size(); i++){
            if(daftar_laptop.get(i).getId_laptop() == id_laptop){ //jika id ditemukan
                if(!merk.isEmpty()){    //jika ada merk baru
                    daftar_laptop.get(i).setMerk(merk);
                }if(harga != -1){   //jika ada harga baru
                    daftar_laptop.get(i).setHarga(harga); 
                }if(stok != -1){   //jika ada stok baru
                    daftar_laptop.get(i).setStok(stok);
                }
                System.out.println("\nData Laptop dengan ID : " + id_laptop + "\nUpdate Berhasil!\n");
                return;
            }
        }
        System.out.println("Data not found\n"); //jika data yg ingin diupdate tidak ada
    }

    //untuk menghapus data menggunakan id
    public void deleteData(int id_laptop){
        for (int i = 0; i <daftar_laptop.size(); i++){
            if(daftar_laptop.get(i).getId_laptop() == id_laptop){ //jika id ditemukan
                daftar_laptop.remove(i); //hapus data 
                System.out.println("\nData Laptop dengan ID : " + id_laptop + "\nHapus Berhasil!\n");
                return;
            }
        }
        System.out.println("Data Not Found\n"); //jika id tidak ditemukan
    }

    //untuk mencari data menggunakan merk
    public void searchData(String merk){
        int found = 0; //untuk menandakan apakah sudah ditemukan

        for(int i =0; i<daftar_laptop.size(); i++){
            if(daftar_laptop.get(i).getMerk().contains(merk)){ //jika merk ditemukan munculkan data yang dicarinya
               System.out.println(
                "ID : " + daftar_laptop.get(i).getId_laptop() +
                " | Merk : " + daftar_laptop.get(i).getMerk() +
                " | Harga : " + daftar_laptop.get(i).getHarga() +
                " | Stok : " + daftar_laptop.get(i).getStok()
                );

                found = 1; //tandai found = 1

            }
        }
        if(found == 0){ // jika tidak ditemukan merk yg dicari
            System.out.println("Data Not Found!\n");
        }
    }
}