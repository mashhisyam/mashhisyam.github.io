<?php
require 'function.php';

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "<script>
                alert('data BERHASIL Dihapus!');
                document.location.href = 'admin.php'
            </script>";
} else {
    echo "Data GAGAL Dihapus! <br>";
    echo mysqli_error($connect);
}
