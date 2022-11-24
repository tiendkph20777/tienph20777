<?php
require_once "models/connection.php";
require_once "models/hang_hoa.php";
require_once "models/sanpham.php";
require_once "models/danhmuc.php";

require_once "controllers/controller.php";
require_once "controllers/home.php";
require_once "controllers/errors.php";
require_once "controllers/hang_hoa_controller.php";
require_once "controllers/contact.php";
require_once "controllers/about.php";
require_once "controllers/login.php";
// Lấy dữ liệu từ GET

$spnew = list_sanpham_home_0_12();
$list_all_sp = list_sanpham_all();
$list_dm = list_danhmuc();

//lấy yêu cầu ctr

include "views/header.php";

if (isset($_GET['ctr']) && ($_GET['ctr'] != "")) {
    $ctr = $_GET['ctr'];
    switch ($ctr) {
        case '/':
        case 'home':
            include "views/home.php";
            break;
        case 'contact':
            include "views/contact.php";
            break;
        case 'about':
            include "views/about.php";
            break;
        case 'sanphamct':
            if (isset($_GET['id_sp'])) {
                $id_sp = $_GET['id_sp'];
                $onesp = list_one($id_sp);
                extract($onesp);
                $sp_cung_loai = list_sp_cungloai($id_sp, $id_dm);
                include "views/sanphamct.php";
            } else {
                include "views/home.php";
            }
            break;
        default:
            show_404_not_found();
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
