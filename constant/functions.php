<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pizzahut24");

// Fungsi untuk mengambil data produk dari database
function getProducts() {
    global $conn;
    $query = "SELECT * FROM products"; // Sesuaikan dengan struktur tabel Anda
    $result = mysqli_query($conn, $query);
    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    return $products;
}

function addData($data) {
    global $conn;
    // Ambil data dari tiap elemen dalam form dan bersihkan
    $nama = mysqli_real_escape_string($conn, htmlspecialchars($data["name"]));
    $kategori = mysqli_real_escape_string($conn, htmlspecialchars($data["category"]));
    $price = mysqli_real_escape_string($conn, htmlspecialchars($data["price"]));

    // uplaod gambar
    $image = uploadImage();
    if (!$image){
        return false;
    }

    // Query insert data
    $createQuery = "INSERT INTO products (name, category, price, image)
                    VALUES ('$nama', '$kategori', '$price', '$image')";

    mysqli_query($conn, $createQuery);

    return mysqli_affected_rows($conn);
}
function uploadImage(){
    $namaFile = $_FILES['image']['name'];
    $sizeFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek apakah tidak ada gambar yang diuplaod
    if( $error === 4){
        echo " <script>
            alert('Wajib mengupload gambar!!');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ektensiGambar = explode('.', $namaFile);
    $ektensiGambar = strtolower(end($ektensiGambar));

    if( !in_array($ektensiGambar, $ektensiGambarValid) ){
        echo " <script>
            alert('File anda terdeteksi bukan gambar!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($sizeFile > 5000000){ // 5mb
        echo " <script>
            alert('Size gambar terlalu besar!!');
        </script>";
        return false;
    }

    // loloskan pengecekan, gambar siap diuplaod
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ektensiGambar;

    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}

function editData($data) {
    global $conn;

    // Ambil data dari tiap elemen dalam form dan bersihkan
    $id = htmlspecialchars($data["id"]); 
    $nama = mysqli_real_escape_string($conn, htmlspecialchars($data["name"]));
    $kategori = mysqli_real_escape_string($conn, htmlspecialchars($data["category"]));
    $harga = mysqli_real_escape_string($conn, htmlspecialchars($data["price"]));

    $gambarLama = mysqli_real_escape_string($conn, htmlspecialchars($data["gambarLama"]));

    // cek apakah user memilih gambar baru atau tidak
    if ($_FILES['image']['error'] === 4){
        $image = $gambarLama;
    } else {
        $image = uploadImage();
    }

    // Query update data
    $createQuery = "UPDATE products SET
                    name = '$nama',
                    category = '$kategori',
                    price = '$harga',
                    image = '$image'
                    WHERE id = $id";

    mysqli_query($conn, $createQuery);

    return mysqli_affected_rows($conn);
}

function delateData($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function searchData($keyword){
    global $conn;

    $query = "SELECT * FROM products
              WHERE
              name LIKE '%$keyword%' OR
              category LIKE '%$keyword%' OR
              price LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }

    return $products;
}


?>
