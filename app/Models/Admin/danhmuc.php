<?php
    function load_all_dm(){
        $sql="select * from danh_muc where 1 order by id_dm desc";
        $listdm=pdo_query($sql);
        return  $listdm;
    }
    function insert_danhmuc($ten_dm){
        $sql = "insert into danh_muc(ten_dm) values('$ten_dm')";
        pdo_execute($sql);
    }
        
    function loadone_danhmuc($id_dm){
        $sql = "select * from danh_muc where id_dm = '$id_dm'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_danhmuc($id_dm,$ten_dm){
        $sql = "update danh_muc set ten_dm = '$ten_dm' where id_dm = '$id_dm'";
        pdo_execute($sql);
    }
    function delete_danhmuc($id_dm){
        $sql = "delete from danh_muc where id_dm = '$id_dm'";
        pdo_execute($sql);
    }
    
?>