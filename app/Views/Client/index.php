<?php
    include("header.php");
    include("chitietsp.php");
    include("home.php");
    include("footer.php");  
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case 'dangnhap':
                include "/login.php";
            break;
            case 'dangkiii':
                include "dangki.php";
            break;
            
            default:
            
            break;
        }
    }else{
    
    }

?>

