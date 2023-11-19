<?php 
    function load_binhluan($id_sanpham = 0){
        $sql = "select * from binh_luan  where 1";
    
        if($id_sanpham  > 0){
            $sql .= " and id_sanpham  = $id_sanpham ";
        }
    
        $sql .= " order by id_binhluan  desc";
        $result = pdo_query($sql);
        return $result;
    }
    function delete_binhluan($id_binhluan){
        $sql = "delete from binh_luan where id_binhluan = '$id_binhluan'";
        pdo_execute($sql);
    }
?>