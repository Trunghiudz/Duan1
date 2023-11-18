<?php
    function load_all_tintuc(){
        $sql="select * from lien_he where 1 order by id_lienhe desc";
        $listlienhe=pdo_query($sql);
        return  $listlienhe;
    }
?>