<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Berorientasi Objek</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: aliceblue;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #382642;
            font-size: 28px;
            text-align: center;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
            font-size: 14px;
            color: #34495e;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
            color: #2c3e50;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
        }

        code {
            display: block;
            background-color: #f4f4f4;
            padding: 10px;
            border-left: 3px solid #3498db;
            margin: 10px 0;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <header>
        <div class="row" style="display: flex; align-items: center;">
            <div class="col-lg-3">
                <img src="foto.jpg" alt="Foto Profil" width="140" height="200">
            </div>
            <div class="col-lg-9">
                <p>Achmad Dzikrullah Dzulfadli : 42423032</p>
            </div>
        </div>
    </header>

    <main>
        <h1>Pemrograman Berorientasi Objek</h1>
        <p>
            Jika Anda pernah mendengar istilah ini tapi belum benar-benar paham apa maksudnya, Anda berada di tempat yang tepat.
            PBO adalah salah satu pendekatan paling populer dan efektif dalam pemrograman, terutama ketika kita berbicara tentang
            pengembangan perangkat lunak skala besar dan kompleks.
        </p>

        <h2>Pengertian</h2>
        <p>
            Pemrograman Berorientasi Objek (PBO) atau Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
            menggunakan "objek" sebagai unit dasar dari program yang dikembangkan. Paradigma ini dirancang untuk
            menyederhanakan pemodelan sistem perangkat lunak yang kompleks dengan cara memetakan konsep dunia nyata ke dalam
            program komputer.
        </p>

        <h2>Bahasa Pemrograman yang Mendukung</h2>
        <p>Macam-Macam Bahasa Pemrograman Terbaik untuk Dipelajari:</p>
        <ul>
            <li>Python</li>
            <li>C#</li>
            <li>C++</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>Swift</li>
            <li>Java</li>
            <li>Go</li>
            <li>SQL</li>
            <li>Ruby</li>
        </ul>

        <h2>Contoh Tabel</h2>
        <h3>Kategori Produk</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>KATEGORI PRODUK</th>
                <th>NAMA PRODUK</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bumbu dapur</td>
                <td>Garam</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bumbu dapur</td>
                <td>Cabe</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bumbu dapur</td>
                <td>Lengkuas</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bumbu dapur</td>
                <td>Terasi</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Sembako</td>
                <td>Beras</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Sembako</td>
                <td>Minyak goreng</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Sembako</td>
                <td>Gula pasir</td>
            </tr>
        </table>

        <h3>Data Produk</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>PRODUK</th>
                <th>STOCK</th>
                <th>HARGA</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Garam</td>
                <td>10</td>
                <td>7000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cabe</td>
                <td>10</td>
                <td>25000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lengkuas</td>
                <td>10</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Terasi</td>
                <td>10</td>
                <td>35000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Beras</td>
                <td>10</td>
                <td>13000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Minyak goreng</td>
                <td>10</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Gula pasir</td>
                <td>10</td>
                <td>13000</td>
            </tr>
        </table>
        <h1> Memunculkan nama mobil </h1>
        <?php
class Mobil {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function set_warna($warna) {
        $this->warna = $warna;
    }

    function get_name() {
        return $this->nama;
    }

    function get_warna() {
        return $this->warna;
    }
}
$toyota = new Mobil();
$toyota->set_name('Toyota');
$toyota->set_warna('Biru Laut');

echo $toyota->get_name();
echo "<br>";
echo $toyota->get_warna();
echo "<br>";
?>
<h1> Memunculkan nama buah </h1>
<?php
class Buah {
    public $nama;
    public $warna;

    function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    function get_nama() {
        return $this->nama;
    }

    function get_warna() {
        return $this->warna;
    }
}

$apel = new Buah("Apel", "Merah");
echo $apel->get_nama();
echo "<br>";
echo $apel->get_warna();
?>

 <h1>Membuat list nama </h1>
 <?php
function buatListNamaMahasiswa() {
    class Mahasiswa {
        public $nama;
        public $tinggi;
        public $warnaKulit;

        function __construct($nama, $tinggi, $warnaKulit) {
            $this->nama = $nama;
            $this->tinggi = $tinggi;
            $this->warnaKulit = $warnaKulit;
        } 

        function __destruct() {
            echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tinggi} cm, dan Warna Kulit {$this->warnaKulit}.<br>";
        }
    }

    // Membuat objek dari kelas Mahasiswa
    $mahasiswa1 = new Mahasiswa("Prayoga", 170, "Putih");
    $mahasiswa2 = new Mahasiswa("Isa", 165, "Kuning Langsat");
    $mahasiswa3 = new Mahasiswa("Dzikrullah Dzulfadli", 165, "Sawo Matang");
}

// Memanggil fungsi untuk menampilkan data mahasiswa
buatListNamaMahasiswa();
?>

        <tr>
    <h1>LAPORAN PTOJECT UTS (CRUD)</h1>
        <h2>Fitur CRUD</h2>

        <h3>1. Menambah Barang Baru</h3>
        <code>
        if (isset($_POST['add'])) {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stmt = $conn->prepare("INSERT INTO tb_diki_stok (nama_barang, stok, harga_beli, harga_jual) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sidd", $nama_barang, $stok, $harga_beli, $harga_jual);
    $stmt->execute();
    header("Location: index.php");
}
        </code>
        <p>Kode di atas digunakan untuk menambahkan barang baru ke database. Data yang diinputkan melalui form HTML dikirim menggunakan metode POST, kemudian disimpan ke tabel <code>barang</code> menggunakan perintah SQL <code>INSERT</code>.</p>

        <h3>2. Membaca Data Barang</h3>
        <code>
        $sql = "SELECT * FROM tb_diki_stok";
        $barang = $conn->query($sql);
        </code>
        <p>Kode ini digunakan untuk membaca data dari tabel <code>barang</code>. Perintah SQL <code>SELECT</code> digunakan untuk mengambil semua data, lalu data tersebut ditampilkan menggunakan perulangan <code>while</code>.</p>

        <h3>3. Memperbarui Data Barang</h3>
        <code>
        if (isset($_GET['edit'])) {
    $id_barang = $_GET['edit'];
    $result = $conn->query("SELECT * FROM tb_diki_stok WHERE id_barang=$id_barang");
    $barang_edit = $result->fetch_assoc();
}

if (isset($_POST['edit_data'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    
    $stmt = $conn->prepare("UPDATE tb_diki_stok SET nama_barang=?, stok=?, harga_beli=?, harga_jual=? WHERE id_barang=?");
    $stmt->bind_param("siddi", $nama_barang, $stok, $harga_beli, $harga_jual, $id_barang);
    $stmt->execute();
    header("Location: index.php");
}
        </code>
        <p>Kode ini digunakan untuk memperbarui data barang berdasarkan <code>id</code>. Data yang telah diubah dikirim melalui form menggunakan metode POST, lalu diperbarui di database dengan perintah SQL <code>UPDATE</code>.</p>

        <h3>4. Menghapus Data Barang</h3>
        <code>
        if (isset($_GET['delete'])) {
    $id_barang = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM tb_diki_stok WHERE id_barang=?");
    $stmt->bind_param("i", $id_barang);
    $stmt->execute();
    header("Location: index.php");
}
        </code>
        <p>Kode di atas berfungsi untuk menghapus data barang berdasarkan <code>id</code>. Ketika tombol hapus ditekan, data akan dikirim melalui metode POST dan dihapus dari tabel <code>barang</code> menggunakan perintah SQL <code>DELETE</code>.</p>
        </tr>
    </main>

</body>

</html>
