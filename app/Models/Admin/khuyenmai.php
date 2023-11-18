<?php
    function load_all_khuyenmai(){
        $sql="select * from khuyen_mai where 1 order by id_km desc";
        $listkhuyenmai=pdo_query($sql);
        return  $listkhuyenmai;
    }
    function delete_khuyenmai($id_km){
        $sql="delete from khuyen_mai where id_km=".$id_km;
        pdo_execute($sql);
    }
    function insert_khuyenmai($ma_km,$phantram_km,$trangThai,$ngay_bd,$ngay_kt){
        $sql="insert into khuyen_mai(ma_km, phantram_km, trangThai, ngay_bd, ngay_kt) values ('$ma_km','$phantram_km','$trangThai','$ngay_bd','$ngay_kt')";
        pdo_execute($sql);
    }
    function updatekm($id_km,$ma_km,$phantram_km,$trangThai,$ngay_bd,$ngay_kt){
        $sql = "update khuyen_mai set ma_km='$ma_km',phantram_km='$phantram_km',trangThai='$trangThai',ngay_bd='$ngay_bd',ngay_kt='$ngay_kt' where id_km =".$id_km;
        pdo_execute($sql);
    }
    function queryonekm($id_km){
        $sql= "select * from khuyen_mai where id_km=".$id_km;
        $result = pdo_query_one($sql);
        return $result;
    }
?>