<?php
    function load_all_banner(){
        $sql="select * from banner where 1 order by id_banner desc";
        $listbanner=pdo_query($sql);
        return  $listbanner;
    }
    function delete_banner($id_banner){
        $sql="delete from banner where id_banner=".$id_banner;
        pdo_execute($sql);
    }
    function insert_banner($ten,$hinh,$link,$trangThai){
        $sql="insert into banner(ten,img,link,trangThai) values ('$ten','$hinh','$link','$trangThai')";
        pdo_execute($sql);
    }
    function updatebanner($id_banner,$ten,$hinh,$link,$trangThai){
        $sql = "update banner set ten='$ten',img='$hinh',link='$link',trangThai='$trangThai' where id_banner =".$id_banner;
        pdo_execute($sql);
    }
    function queryonebanner($id_banner){
        $sql= "select * from banner where id_banner=".$id_banner;
        $result = pdo_query_one($sql);
        return $result;
    }
?>