<?php
include_once("./model/mNguoiDung.php");

class cNguoiDung
{
    public function get01NguoiDung($TDN,$MK)
    {
        $MK=md5($MK);
        $p=new modelNguoiDung();
        $ketqua=$p->select01NguoiDung($TDN,$MK);
        if(mysqli_num_rows($ketqua)>0)
        {
            while($r=mysqli_fetch_assoc($ketqua))
            {
                $_SESSION["dn"]=$r["PhanQuyen"];
            }
            echo "<script>alert('Đăng nhập thành công')</script>";
            header("refresh:0; url='index.php'");
        }
        else
        {
            echo "<script>alert('Đăng nhập không thành công')</script>";
            header("refresh:0; url='index.php?dangnhap'");
        }
    }
    // Đăng ký
    public function get01DangKy($TDN, $MK)
    {
        $MK = md5($MK); 
        $p = new modelNguoiDung();
        $p->insertNguoiDung($TDN, $MK); 
        $_SESSION["dk"] = true; // Thiết lập session "dk" cho biết người dùng đã đăng ký
        echo "<script>alert('Đăng ký thành công!');</script>";
        header("refresh:0; url='index.php?dangnhap'"); 
    }
}
?>