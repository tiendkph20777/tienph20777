<?php
include "../../models/connection.php";
include "../../models/danhmuc.php";
include "../../models/sanpham.php";

include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_dm = $_POST['name_dm'];
                insert_danhmuc($name_dm);
                $thongbao = "them tahnh cong";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = list_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                delete_danhmuc($_GET['id_dm']);
            }
            $listdanhmuc = list_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id_dm']) && $_GET['id_dm'] > 0) {
                $dm = sua_danhmuc($_GET['id_dm']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_dm = $_POST['name_dm'];
                $id_dm = $_POST['id_dm'];
                update_danhmuc($id_dm, $name_dm);
            }
            $listdanhmuc = list_danhmuc();
            include "danhmuc/list.php";
            break;
            // 

        case 'addsp':
            // kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_dm = $_POST['id_dm'];
                $name_sp = $_POST['name_sp'];
                $price_sp = $_POST['price_sp'];
                $mota_sp = $_POST['mota_sp'];
                $luotxem_sp = $_POST['luotxem_sp'];
                // 
                $img_sp = $_FILES['img_sp']['name'];
                $target_dir = "../../images/";
                $target_file = $target_dir . basename($_FILES['img_sp']['name']);
                if (move_uploaded_file($_FILES["img_sp"]["tmp_name"], $target_file)) {
                    # code...
                }

                insert_sanpham($name_sp, $price_sp, $img_sp, $mota_sp, $luotxem_sp, $id_dm);
                $thongbao = "them tahnh cong";
            }
            $listdanhmuc = list_danhmuc();
            include "sanpham/addsp.php";
            break;
        case 'listsp':
            if (isset($_POST['listsp_ok']) && $_POST['listsp_ok']) {
                $kyw = $_POST['kyw'];
                $id_dm = $_POST['id_dm'];
            } else {
                $kyw = "";
                $id_dm = 0;
            }
            $listdanhmuc = list_danhmuc();
            $listsanpham = list_sanpham($kyw, $id_dm);
            include "sanpham/listsp.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                delete_sanpham($_GET['id_sp']);
            }
            $listdanhmuc = list_danhmuc();
            $listsanpham = list_sanpham("", 0);
            include "sanpham/listsp.php";
            break;
        case 'suasp':
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $sp = sua_sanpham($_GET['id_sp']);
            }
            $listdanhmuc = list_danhmuc();
            include "sanpham/updatesp.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_sp = $_POST['name_sp'];
                $id_sp = $_POST['id_sp'];
                $price_sp = $_POST['price_sp'];
                // $img_sp = $_POST['img_sp'];
                $mota_sp = $_POST['mota_sp'];
                $luotxem_sp = $_POST['luotxem_sp'];
                $id_dm = $_POST['id_dm'];
                // 
                $img_sp = $_FILES['img_sp']['name'];
                $target_dir = "../../images/";
                $target_file = $target_dir . basename($_FILES['img_sp']['name']);
                if (move_uploaded_file($_FILES["img_sp"]["tmp_name"], $target_file)) {
                    # code...
                }
                update_sanpham($id_sp, $name_sp, $price_sp, $img_sp, $mota_sp, $luotxem_sp, $id_dm);
            }
            $listdanhmuc = list_danhmuc();
            $listsanpham = list_sanpham("", 0);
            include "sanpham/listsp.php";
            break;



        default:
            include "admin.php";
            break;
    }
} else {
    include "admin.php";
}
