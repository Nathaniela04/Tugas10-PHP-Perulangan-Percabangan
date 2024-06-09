<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nilai = $_POST['nilai'];

if($nilai >= 80 && $nilai <= 100){
    echo "Nilai anda $nilai, dengan nilai A dan IP 4.00";
} elseif($nilai >= 76.25 && $nilai <= 79.99){
    echo "Nilai anda $nilai, dengan nilai A- dan IP 4.00";
} elseif($nilai >= 68.75 && $nilai <= 76.24){
    echo "Nilai anda $nilai, dengan nilai B+ dan IP 3.67";
} elseif($nilai >= 65.00 && $nilai <= 68.74){
    echo "Nilai anda $nilai, dengan nilai B dan IP 3.33";
} elseif($nilai >= 62.50 && $nilai <= 64.99){
    echo "Nilai anda $nilai, dengan nilai B- dan IP 3.00";
} elseif($nilai >= 57.50 && $nilai <= 62.49){
    echo "Nilai anda $nilai, dengan nilai C+ dan IP 2.67";
} elseif($nilai >= 55.00 && $nilai <= 57.49){
    echo "Nilai anda $nilai, dengan nilai C dan IP 2.33";
} elseif($nilai >= 51.25 && $nilai <= 54.99){
    echo "Nilai anda $nilai, dengan nilai C- dan IP 2.00";
} elseif($nilai >= 43.75 && $nilai <= 51.24){
    echo "Nilai anda $nilai, dengan nilai D+ dan IP 1.67";
} elseif($nilai >= 40.00 && $nilai <= 43.74){
    echo "Nilai anda $nilai, dengan nilai D dan IP 1.33";
} elseif($nilai >= 00.00 && $nilai <= 39.99){
    echo "Nilai anda $nilai, dengan nilai E dan IP 1.00";
} else {
    echo "Nilai tidak valid";
}

}
?>