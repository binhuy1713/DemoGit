<form action="#" method="post" name="frmDangNhap">
<table>
    <tr>
        <td>Tên đăng nhập</td>
        <td>
            <input type="text" name="txtTDN" require>
        </td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td>
            <input type="password" name="txtMK" require>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="btn_submit" value="Đăng nhập">
            <input type="reset" value="Nhập lại">
        </td>
    </tr>
</table>
</form>
<?php
if(isset($_REQUEST["btn_submit"]))
{
    include_once("./controller/cNguoiDung.php");
    $p= new cNguoiDung();
    $kq=$p->get01NguoiDung($_REQUEST["txtTDN"], $_REQUEST["txtMK"]);
}
?>
