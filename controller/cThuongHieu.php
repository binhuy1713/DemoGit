<?php
    include_once("model/mThuongHieu.php");
    class controlThuongHieu{
        public function getAllThuongHieu(){
            $p = new modelThuongHieu();
            $kq=$p->selectAllThuongHieu();
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else
            return $kq;
        }
    }
?>