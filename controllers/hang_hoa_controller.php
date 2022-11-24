<?php

//Hiển thị form thêm hàng hóa
function add_product()
{
    $loai = loai_all();
    render(
        "views/admin/add_product.php",
        ['loai' => $loai],
        $admin = 'admin'
    );
}

function save_product()
{

    extract($_POST);
    $image = $_FILES['hinh'];
    $hinh = $image['name'];
    $data = [
        $ten_hh,
        $don_gia,
        $hinh,
        $ma_loai,
        $mo_ta
    ];
    // var_dump($data);
    // die;
    hang_hoa_insert($data);
    move_uploaded_file($image['tmp_name'], "images/" . $hinh);
}
