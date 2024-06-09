<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = $_POST['tinggi'];

    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = $tinggi - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "* ";
        }
        echo "<br>"; 
    }
}
?>
