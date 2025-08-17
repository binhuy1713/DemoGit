<?php
    include_once("ketnoi.php");
    class modelThuongHieu{
        public function selectAllThuongHieu(){
            $p =new clsKetNoi();
            $truyvan = "select * from thuonghieu";
            $con = $p->MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p-> DongKetNoi($con);
            return $kq;
        }
    }

?>