<?php
include_once("controller/cThuongHieu.php");
$p = new controlThuongHieu();
$kq = $p->getAllThuongHieu();

if(!$kq){
    echo "No data!";
} else {
    echo "<ul>";
    while($r = mysqli_fetch_assoc($kq)){
        echo "<li><a href='index.php?mathuonghieu=".$r['MaTH']."'>".$r['TenTH']."</a></li>";
    }
    echo "</ul>";
}
?>
