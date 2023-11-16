<?php
    function load_all_tintuc(){
        $sql="select * from tin_tuc where 1 order by id_tintuc desc";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
?>