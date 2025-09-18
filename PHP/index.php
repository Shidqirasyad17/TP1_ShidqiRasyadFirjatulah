<?php
require_once "laptop.php";
require_once "managelaptop.php";

$manage = new ManageLaptop();

// add laptop
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["add"])) {
    $merk = $_POST["merk"];
    $harga = intval($_POST["harga"]);
    $stok = intval($_POST["stok"]);
    $gambar = "";

    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = "img/";
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
        $gambar = $uploadDir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar);
    }

    $manage->addLaptop(new Laptop(0, $merk, $harga, $stok, $gambar));
    header("Location: index.php");
    exit();
}

// update laptop
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $id = intval($_POST["id_laptop"]);
    $merk = $_POST["merk"] ?? "";
    $harga = $_POST["harga"] !== "" ? intval($_POST["harga"]) : -1;
    $stok = $_POST["stok"] !== "" ? intval($_POST["stok"]) : -1;
    $gambar = "";

    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = "img/";
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
        $gambar = $uploadDir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar);
    }

    $manage->updateLaptop($id, $merk, $harga, $stok, $gambar);
    header("Location: index.php");
    exit();
}

// dellete laptop
if (isset($_GET["delete"])) {
    $id = intval($_GET["delete"]);
    $manage->deleteLaptop($id);
    header("Location: index.php"); 
    exit();
}


//search laptop
$laptops = isset($_GET['search']) ? $manage->searchLaptop($_GET['search']) : $manage->getAll();
?>


<!--HTML UNTUK FORM-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Laptop</title>
<style>
table { border-collapse: collapse; width: 100%; margin-top: 10px; }
th, td { border: 1px solid #000000ff; padding: 8px; text-align: center; }
th { background-color: #414141a1; }
img { max-width: 100px; }
form.inline { display: inline-block; margin:0; padding:0; }
</style>
</head>
<body>

<div style="display: flex; gap: 30px;">
    <!-- Form untuk add laptop!-->
    <div style="flex:1; display: flex; justify-content: center; align-items: flex-start;">
        <div>
            <h1>TAMBAH LAPTOP</h1>
            <form method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; width: 400px;">
                <input type="text" name="merk" placeholder="Merk" required 
                       style="margin-bottom: 10px; padding: 10px; font-size: 16px;">
                <input type="number" name="harga" placeholder="Harga" required 
                       style="margin-bottom: 10px; padding: 10px; font-size: 16px;">
                <input type="number" name="stok" placeholder="Stok" required 
                       style="margin-bottom: 10px; padding: 10px; font-size: 16px;">
                <input type="file" name="gambar" accept="image/*" required 
                       style="margin-bottom: 10px; padding: 5px; font-size: 16px;">
                <button type="submit" name="add" 
                        style="background-color:#00FF00; padding: 10px; font-size: 16px; cursor: pointer;">Tambah</button>
            </form>
        </div>
    </div>

    <!-- daftar laptop / tampilan data  -->
    <div style="flex: 2;">
        <h1>DAFTAR LAPTOP</h1>
        <form method="GET" style="margin-bottom: 10px;"> 
            <input type="text" name="search" placeholder="Cari merk">
            <button type="submit">Cari</button>
        </form>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($laptops as $lap): ?>
            <tr id="row-<?= $lap->getId_laptop(); ?>">
                <td><?= $lap->getId_laptop(); ?></td>
                <td class="merk"><?= $lap->getMerk(); ?></td>
                <td class="harga"><?= $lap->getHarga(); ?></td>
                <td class="stok"><?= $lap->getStok(); ?></td>
                <td class="gambar">
                    <?php if ($lap->getGambar()): ?>
                        <img src="<?= $lap->getGambar(); ?>" style="max-width:80px;">
                    <?php endif; ?>
                </td>
                <td>
                    <button onclick="update(<?= $lap->getId_laptop(); ?>)">Update</button>
                    <form method="GET" class="inline" onsubmit="return confirm('Yakin hapus?')">
                        <input type="hidden" name="delete" value="<?= $lap->getId_laptop(); ?>">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</body>
</html>

<!--script untuk form update-->
<script>
function update(id) {
    const row = document.getElementById("row-" + id);
    const merk = row.querySelector(".merk").innerText;
    const harga = row.querySelector(".harga").innerText;
    const stok = row.querySelector(".stok").innerText;

    row.innerHTML = `
        <td colspan="6">
            <form method="POST" enctype="multipart/form-data" style="display:flex; flex-direction: column; align-items:center;">
                <input type="hidden" name="id_laptop" value="${id}">
                <input type="text" name="merk" value="${merk}" required 
                       style="margin-bottom: 10px; padding: 10px; font-size: 16px; width: 200px;">
                <input type="number" name="harga" value="${harga}" required 
                       style="margin-bottom: 10px; padding: 10px; font-size: 16px; width: 200px;">
                <input type="number" name="stok" value="${stok}" required 
                       style="margin-bottom: 10px; padding: 10px; font-size: 16px; width: 200px;">
                <input type="file" name="gambar" accept="image/*" 
                       style="margin-bottom: 10px; padding: 5px; font-size: 16px; width: 200px;">
                <button type="submit" name="update" 
                        style="background-color:#00FF00; padding: 10px; font-size: 16px; cursor: pointer; width: 15%;">Simpan</button>
            </form>
        </td>
    `;
}
</script>

