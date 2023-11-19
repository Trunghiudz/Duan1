<?php
    function loadone_chucvu($id_role){
        $sql = "select * from role where id_role =".$id_role;
        $result = pdo_query_one($sql);
        return $result;
    }
    function load_all_cv(){
        $sql="select * from role where 1 order by id_role desc";
        $listchucvu=pdo_query($sql);
        return  $listchucvu;
    }
?>