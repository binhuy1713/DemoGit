<?php
class clsketnoi
{
    public function MoKetNoi()
    {
        return mysqli_connect("localhost", "admin01", "123456", "qlbh");
    }
    public function DongKetNoi($conn)
    {
        mysqli_close($conn);
    }
}
?>