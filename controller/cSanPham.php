<?php
    include_once("model/mSanPham.php");
    class controlSanPham{
        public function getAllSanPham(){
            $p = new modelSanPham();
            $kq=$p->selectAllSanPham();
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else
            return $kq;
        }
        public function getOneSanPham($maSP){
            $p = new modelSanPham();
            $kq=$p->selectOneSanPham($maSP);
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else
            return $kq;
        }
        public function getSanPhamTheoThuongHieu($maTH) {
            $p = new modelSanPham();
            return $p->selectSanPhamTheoThuongHieu($maTH);
        }
        public function timKiemSanPham($tuKhoa) {
            $p = new modelSanPham();
            return $p->timKiemSanPham($tuKhoa);
        }
    }
?>