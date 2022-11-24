<?php

function insert_sanpham($name_sp, $price_sp, $img_sp, $mota_sp, $luotxem_sp, $id_dm)
{
    $sql = "insert into sanpham(name_sp , price_sp , img_sp , mota_sp , luotxem_sp,id_dm) values('$name_sp' , '$price_sp', '$img_sp', '$mota_sp', '$luotxem_sp',$id_dm)";
    pdo_execute($sql);
}


// home
function list_sanpham_home_0_12()
{
    $sql = "select * from sanpham where 1 order by id_sp desc limit 0,12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
$img_path = "../images/";

function list_sanpham_all()
{
    $sql = "select * from sanpham where 1 order by id_sp desc ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
$img_path = "../images/";

function list_sanpham($kyw, $id_dm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name_sp like '%" . $kyw . "%' ";
    }
    if ($id_dm > 0) {
        $sql .= " and id_dm = '" . $id_dm . "' ";
    }
    $sql .= " order by id_sp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function delete_sanpham($id_sp)
{
    $sql = "delete from sanpham where id_sp=" . $id_sp;
    pdo_execute($sql);
}
function sua_sanpham($id_sp)
{
    $sql = "select * from sanpham where id_sp =" . $id_sp;
    $sp = pdo_query_one($sql);
    return $sp;
}

function list_one($id_sp)
{
    $sql = "select * from sanpham where id_sp =" . $id_sp;
    $sp = pdo_query_one($sql);
    return $sp;
}
function list_sp_cungloai($id_sp, $id_dm)
{
    $sql = "select * from sanpham where id_dm =" . $id_dm . "AND id_sp <> " . $id_sp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id_sp, $name_sp, $price_sp, $img_sp, $mota_sp, $luotxem_sp, $id_dm)
{
    if ($img_sp != "") {
        $sql = "update sanpham set name_sp='" . $name_sp . "' , price_sp='" . $price_sp . "' , img_sp='" . $img_sp . "' , mota_sp='" . $mota_sp . "' , luotxem_sp='" . $luotxem_sp . "' ,id_dm='" . $id_dm . "'  where id_sp=" . $id_sp;
    } else {
        $sql = "update sanpham set name_sp='" . $name_sp . "' , price_sp='" . $price_sp . "' , mota_sp='" . $mota_sp . "' , luotxem_sp='" . $luotxem_sp . "' ,id_dm='" . $id_dm . "'  where id_sp=" . $id_sp;
    }
    pdo_execute($sql);
}

// home
// function listsanpham_home()
// {
//     $sql = "select * from sanpham where 1 orderby id_sp desc limit 0,10";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
