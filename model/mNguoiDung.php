<?php
include_once("ketnoi.php");
class modelNguoidung
{
    public function select01NguoiDung($TND, $MK)
    {
        $p=new clsketnoi();
        $con=$p->MoKetNoi();
        $truyvan="select*from nguoidung where TenNguoiDung='$TND' and MatKhau='$MK'";
        $ketqua=mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $ketqua;
    }
    // Kiểm tra nếu tên người dùng đã tồn tại
    public function checkNguoiDung($TND)
    {
        $p = new clsketnoi();
        $con = $p->MoKetNoi();
        $truyvan = "SELECT * FROM nguoidung WHERE TenNguoiDung = '$TND'";
        $ketqua = mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $ketqua;
    }

    // Thêm người dùng khi đăng ký
    public function insertNguoiDung($TND, $MK)
    {
        $p = new clsketnoi();
        $con = $p->MoKetNoi();
        $truyvan = "INSERT INTO nguoidung (TenNguoiDung, MatKhau) VALUES ('$TND', '$MK')";
        $ketqua = mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $ketqua;
    }
}
?>