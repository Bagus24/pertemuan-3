<h2>Hey.. Not Bad...</h2>

<form action = "input.php" method = "get">
    Masukan Angka
    <input type = "text" name="nilai"><br>
    <input type = "submit" value = "proses">
</form>

<?php
if(array_key_exists("nilai", $_GET)){
    if($_GET["nilai"] > 0 &&
            $_GET["nilai"]<= 25){
            echo "Nilai kamu E";
    }elseif($_GET["nilai"] > 25 &&
            $_GET["nilai"] <= 50){
            echo "Nilai kamu D";
    }elseif($_GET["nilai"] > 50 &&
            $_GET["nilai"] <= 65){
            echo "Nilai kamu C";
    }elseif($_GET["nilai"] > 65 &&
            $_GET["nilai"] <= 80){
            echo "Nilai kamu B";
    }elseif($_GET["nilai"] > 80 &&
            $_GET["nilai"] <= 100){
            echo "Nilai kamu A";
    }else{
        echo "Masukin yang bener";
    }
}else{
    echo "Isi nilainya dulu";
}
?>