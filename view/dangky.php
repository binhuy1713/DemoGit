<form action="#" method="post" name="frmDangKy" onsubmit="return validateForm()">
    <table>
        <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="txtTDN" required></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="txtMK" required></td>
        </tr>
        <tr>
                                <td>Nhap lai password</td>
                                <td><input type="password" name="txtNhapPass" id=""></td>
                            </tr>
                            <tr>
                                <td>Thong tin ca nhan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Ho ten</td>
                                <td><input type="text" name="txtHoTen" id=""></td>
                            </tr>
                            <tr>
                                <td>Que quan</td>
                                <td>
                                    <select name="txtQueQuan" id="">
                                        <option value="TP.HCM">TP.HCM</option>
                                        <option value="HN">HN</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>SDT</td>
                                <td><input type="text" name="txtSDT" id=""></td>
                            </tr>
                            <tr>
                                <td>Gioi tinh</td>
                                <td>
                                    <input type="radio" name="txtGioiTinh" id="" value="Nam">Nam
                                    <input type="radio" name=" txtGioiTinh" id="" value="Nu">Nu
                                </td>
                            </tr>
                            <tr>
                                <td>So thich</td>
                                <td>
                                    <input type="checkbox" name="txtSoThich[]" id="" value="Mau xanh">Mau xanh
                                    <input type="checkbox" name="txtSoThich[]" id="" value="Mau do">Mau do
                                    <input type="checkbox" name="txtSoThich[]" id="" value="Dong que">Dong que
                                    <input type="checkbox" name="txtSoThich[]" id="" value="Cao nguyen">Cao nguyen
                                </td>
                            </tr>
                            <tr>
                                <td>Anh dai dien</td>
                                <td><input type="file" name="txtAnhDaiDien" id=""></td>
                            </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btn_submit" value="Đăng ký">
                <input type="reset" value="Nhập lại">
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST["btn_submit"])) {
    include("./controller/cNguoiDung.php");
    $p = new cNguoiDung();
    $p-> get01DangKy($_POST["txtTDN"], $_POST["txtMK"]);
}
?>


<script>
function validateForm() {
    let tdn = document.forms["frmDangKy"]["txtTDN"].value;
    let mk = document.forms["frmDangKy"]["txtMK"].value;
    let nhapLaiMK = document.forms["frmDangKy"]["txtNhapPass"].value;
    let hoTen = document.forms["frmDangKy"]["txtHoTen"].value;
    let sdt = document.forms["frmDangKy"]["txtSDT"].value;
    let gioiTinh = document.querySelector('input[name="txtGioiTinh"]:checked');
    
    // Kiểm tra tài khoản không để trống
    if (tdn == "") {
        alert("Tên đăng nhập không được để trống!");
        return false;
    }

    // Kiểm tra mật khẩu có ít nhất 6 ký tự
    if (mk.length < 6) {
        alert("Mật khẩu phải có ít nhất 6 ký tự!");
        return false;
    }

    // Kiểm tra mật khẩu nhập lại
    if (mk !== nhapLaiMK) {
        alert("Mật khẩu nhập lại không khớp!");
        return false;
    }

    // Kiểm tra họ tên
    if (hoTen == "") {
        alert("Họ tên không được để trống!");
        return false;
    }

    // Kiểm tra số điện thoại chỉ chứa số và có 10 chữ số
    let phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(sdt)) {
        alert("Số điện thoại không hợp lệ! Phải có 10 chữ số.");
        return false;
    }

    // Kiểm tra chọn giới tính
    if (!gioiTinh) {
        alert("Vui lòng chọn giới tính!");
        return false;
    }

    return true;
}
</script>
