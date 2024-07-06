<?php
// Koneksi ke functions.php
require '../constant/functions.php';

$id = $_GET["id"];

if (delateData ($id) > 0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../pages/admin.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = '../pages/admin.php';
    </script>
    ";
}

?>