<?php
    include("header.php");
    if (isset($_GET['act'])&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch ($act) {
            case 'home':
                include "home.php";
            break;
            case 'dangnhap':
                include "login.php";
            break;
            case 'dangkiii':
                include "dangki.php";
            break;
            case 'lienhe':
                include "lienhe/lienhe.php";
            break;
            
            default:
            include("home.php");
            break;
        }
    }else{
        include("home.php");
    }
    include("footer.php");  
?>

