<?php
    include_once("ketnoi.php");
    class modelSanPham{
        public function selectAllSanPham(){
            $p =new clsKetNoi();
            $truyvan = "select * from sanpham s join thuonghieu t on s.MaTH = t.MaTH";
            $con = $p->MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p-> DongKetNoi($con);
            return $kq;
        }
        public function selectOneSanPham($maSP){
            $p =new clsKetNoi();
            $truyvan = "select s.*, t.TenTH from sanpham s join thuonghieu t on s.MaTH = t.MaTH where MaSP='$maSP'";
            $con = $p->MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p-> DongKetNoi($con);
            return $kq;
        }
        public function timKiemSanPham($tuKhoa) {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            
            // Sử dụng Prepared Statement để bảo mật
            $stmt = $con->prepare("SELECT * FROM sanpham WHERE TenSP LIKE ?");
            $param = "%$tuKhoa%";
            $stmt->bind_param("s", $param);
            $stmt->execute();
            
            $ketQua = $stmt->get_result();
            $stmt->close();
            $p->DongKetNoi($con);
            
            return $ketQua;
        }
        public function selectSanPhamTheoThuongHieu($maTH) {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * FROM sanpham WHERE MaTH = '$maTH'";
            $result = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $result;
        }
    }

?>