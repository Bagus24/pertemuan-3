<form action = "contoh-switch.php" method = "post">
    kelas <input type = "text" name = "kelas"><br><br>
    <input type = "submit" value = "kirim">

</form>
<?php
if(array_key_exists("kelas", $_POST )) {
    switch($_POST["kelas"]) {
        case "4a" :
            echo "Kamu mahasiswa kelas 4A";
            break;
        case "4d" :
            echo "Kamu mahasiswa kelas TOP";
            break;
        default :
            echo "Kamu bukan mahasiswa semester 4";

    }

}


?>