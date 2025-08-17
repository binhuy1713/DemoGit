<?php
include_once("controller/cSanPham.php");
$p = new controlSanPham();

if(isset($_GET["mathuonghieu"])) {
    $maTH = $_GET["mathuonghieu"];
    $kq = $p->getSanPhamTheoThuongHieu($maTH);

    if(!$kq || mysqli_num_rows($kq) == 0){
        echo "<p>Không có sản phẩm nào thuộc thương hiệu này!</p>";
    } else {
        echo "<table>";
        echo "<tr>";
        $dem = 0;
        while($r = mysqli_fetch_assoc($kq)){
            echo "<td class='sp'>";
            echo "<img src='image/sanpham/".$r["HinhAnh"]."' width='100px' /> <br>";
            echo "<b><a href='#'>".$r["TenSP"]."</a></b><br>";

            if($r["GiaBan"] == NULL){
                echo number_format($r["GiaGoc"], 0, ",", ".")." VND";
            } else {
                echo number_format($r["GiaBan"], 0, ",", ".")." VND<br>";
                echo "<s>".number_format($r["GiaGoc"], 0, ",", ".")."</s>";
            }

            echo "</td>";
            $dem++;
            if($dem % 4 == 0) echo "</tr><tr>"; 
        }
        echo "</tr>";
        echo "</table>";
    }
}
?>
