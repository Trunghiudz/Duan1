<?php
  include("header.php");
  include("boxleft.php");
  include("home.php");
?>
<?php
  if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'listdm':
            include "danhmuc/list.php";
            break;
        case 'adddm':
            include "danhmuc/add.php";
            break;
        case 'listsp':
            include "sanpham/list.php";
            break;
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'listbl':
            include "binhluan/list.php";
            break;
        case 'addbl':
            include "binhluan/add.php";
            break;
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'adddh':
            include "donhang/add.php";
            break;
        case 'listuser':
            include "user/list.php";
            break;
        case 'adduser':
            include "user/add.php";
            break;
        case 'listtt':
            include "tintuc/list.php";
            break;
        case 'addtt':
            include "tintuc/add.php";
            break;
        case 'listlh':
            include "lienhe/list.php";
            break;
        case 'addlh':
            include "lienhe/add.php";
            break;
        case 'listkm':
            include "khuyenmai/list.php";
            break;
        case 'addkm':
            include "khuyemmai/add.php";
            break;
        case 'listbt':
            include "bienthe/list.php";
            break;
        case 'addbt':
            include "bienthe/add.php";
            break;
        case 'listbanner':
            include "banner/list.php";
            break;
        case 'addbanner':
            include "banner/add.php";
            break;
        default:
            
            break;
    }
 }else{
    
 }
?>

  
  

  
<?php
  include("footer.php");
?>
  