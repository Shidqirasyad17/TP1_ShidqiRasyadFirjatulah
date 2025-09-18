import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        ManageLaptop ml = new ManageLaptop();
        int pilih;


        do {
            System.out.println("\n|===== MENU LAPTOP =====|");
            System.out.println("|  1. Tambah Laptop     |");
            System.out.println("|  2. Tampilkan Laptop  |");
            System.out.println("|  3. Update Laptop     |");
            System.out.println("|  4. Hapus Laptop      |");
            System.out.println("|  5. Cari Laptop       |");
            System.out.println("|  0. Exit              |");
            System.out.println("|=======================|");
            System.out.print("Pilih Menu: ");
            pilih = sc.nextInt();
            sc.nextLine(); // buang newline sisa input

            if (pilih == 1) { // Tambah Laptop
                System.out.print("ID Laptop: ");
                int id = sc.nextInt();
                sc.nextLine();
                System.out.print("Merk: ");
                String merk = sc.nextLine();
                System.out.print("Harga: ");
                int harga = sc.nextInt();
                System.out.print("Stok: ");
                int stok = sc.nextInt();
                ml.addData(id, merk, harga, stok);

            } else if (pilih == 2) { // Tampilkan Laptop
                ml.showData();

            } else if (pilih == 3) { // Update Laptop
                 System.out.print("GUNAKAN -1 JIKA ADA YANG TIDAK INGIN DIPERBARUI! ");
                System.out.print("\nID Laptop yang ingin diupdate: ");
                int idU = sc.nextInt();
                sc.nextLine();
                System.out.print("Merk baru : ");
                String merkU = sc.nextLine();
                System.out.print("Harga baru : ");
                int hargaU = sc.nextInt();
                System.out.print("Stok baru : ");
                int stokU = sc.nextInt();
                ml.updateData(idU, merkU, hargaU, stokU);

            } else if (pilih == 4) { // Hapus Laptop
                System.out.print("\nID Laptop yang ingin dihapus: ");
                int idH = sc.nextInt();
                ml.deleteData(idH);

            } else if (pilih == 5) { // Cari Laptop
                System.out.print("Merk Laptop yang dicari: ");
                String cari = sc.nextLine();
                ml.searchData(cari);

            } else if (pilih == 0) { // Exit
                System.out.println("Selamat Tinggal!");

            } else {
                System.out.println("Pilihan tidak Ada!");
            }

        } while (pilih != 0);

        sc.close();
    }
}
