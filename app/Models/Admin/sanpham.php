<?php 
    function inset_sp($ten_sanpham,$mauSac,$dungLuong,$hinh,$luotXem,$ngay_nhap,$moTa,$id_dm){
        $sql = "insert into san_pham(ten_sanpham,mauSac,dungLuong,img,luotXem,ngay_nhap,moTa,id_dm) values('$ten_sanpham','$mauSac','$dungLuong','$hinh','$luotXem','$ngay_nhap','$moTa','$id_dm')";
        pdo_execute($sql);
    }

    function load_all_sp(){
        $sql="select * from san_pham where 1 order by id_sanpham desc";
        $listdm=pdo_query($sql);
        return  $listdm;
    }
    function delete_sp($id_sanpham ){
        $sql = "delete from san_pham where id_sanpham  = '$id_sanpham '";
        pdo_execute($sql);
    }     
    function loadone_sp($id_sanpham){
        $sql = "select * from san_pham where id_sanpham =".$id_sanpham;
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_sp($id_sanpham ,$ten_sanpham,$mauSac,$dungLuong,$hinh,$luotXem,$ngay_nhap,$moTa,$id_dm){
        $sql = "update san_pham set  ten_sanpham='$ten_sanpham', mauSac='$mauSac',dungLuong='$dungLuong', img='$hinh', luotXem='$luotXem',ngay_nhap='$ngay_nhap', moTa='$moTa', id_dm='$id_dm' where id_sanpham =".$id_sanpham;
        pdo_execute($sql);
    }
?>