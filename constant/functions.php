<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pizzahut24");

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query1) {
    global $conn;
    $result = mysqli_query($conn, $query1);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addData($data) {
    global $conn;
    // Ambil data dari tiap elemen dalam form dan bersihkan
    $nama = mysqli_real_escape_string($conn, htmlspecialchars($data["name"]));
    $kategori = mysqli_real_escape_string($conn, htmlspecialchars($data["category"]));
    $harga = mysqli_real_escape_string($conn, htmlspecialchars($data["price"]));

    // uplaod gambar
    $gambar = uploadImage();
    if (!$gambar){
        return false;
    }

    // Query insert data
    $createQuery = "INSERT INTO products (name, category, price, image)
                    VALUES ('$nama', '$kategori', '$harga', '$gambar')";

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
        $gambar = $gambarLama;
    } else {
        $gambar = uploadImage();
    }

    // Query update data
    $createQuery = "UPDATE products SET
                    name = '$nama',
                    category = '$kategori',
                    price = '$harga',
                    image = '$gambar'
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

    $query1 = "SELECT * FROM products
              WHERE
              name LIKE '%$keyword%' OR
              category LIKE '%$keyword%' OR
              price LIKE '%$keyword%'";

    return query($query1);
}

function regisAdmins($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM admins WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo " <script>
            alert ('username sudah terdaftar, silahkan cari yang baru');
        </script>";

        return false;
    }

    // cek konfirmasi password dengan password 2
    if ($password !== $password2){
        echo "
            <script> 
                alert ('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru
    mysqli_query($conn, "INSERT INTO admins VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}


?>
