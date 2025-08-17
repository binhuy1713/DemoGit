<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style/style.css?v=2">
</head>

<body>
<header>
  <h2>THẾ GIỚI DI ĐỘNG</h2>
</header>

<section>
<div id="navmenu">
<div id="navngang">
  <a href="index.php">Trang chủ</a> | <a href="?dangky">Đăng ký</a> |
  <?php
  session_start();
    if(isset($_SESSION["dn"]))
    {
      echo '<a href="view/dangxuat.php" onclick="return confirm(\'Bạn có chắc muốn đăng xuất hay không?\');" >Đăng xuất</a>';
    }
    else
    {
      echo '<a href="?dangnhap">Đăng nhập</a>';
    }
  ?>
</div>
<div id="search">
    <form action="#" method="get">
      <input type="text" name="txtTuKhoa">
      <input type="submit" name="btn_TimKiem" value="Tìm kiếm">
    </form>
  </div>
</div>
  <nav>
    <?php
      include("view/thuonghieu.php");
    ?>
  </nav>
  
  <article>
    <?php
      if(isset($_GET["dangnhap"]))
      {
        include_once("view/dangnhap.php");
      }
      else if(isset($_GET["dangxuat"])){
        include_once("view/dangxuat.php");
      }else if(isset($_GET["dangky"])){
        include_once("view/dangky.php");
      }else if(isset($_GET["btn_TimKiem"])) { 
        include_once("view/timkiem.php");
      }else if(isset($_GET["mathuonghieu"])) {
        include_once("view/sanphamtheothuonghieu.php");
      }else{
        include_once("view/sanpham.php");
      }
      
    ?>
  </article>
</section>

<footer>
  <p>Website bán điện thoại</p>
</footer>
</body>
</html>