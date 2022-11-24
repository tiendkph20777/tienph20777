<?php
//Home controller
function show_home()
{
    render("views/home.php");
}

function show_hang_hoa_home()
{
    $hang_hoa = hang_hoa_all();
    var_dump($hang_hoa);
}
// $spnew = list_sanpham_home();
