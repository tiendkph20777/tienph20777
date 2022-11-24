<?php
function render($path, $data = [], $admin = '')
{
    extract($data); //['name'=>'ngocbq'] => $name='ngocbq'
    $view = $path;
    if ($admin) {
        include_once "views/admin_duan/layout.php";
    } else {
        include_once "views/layout.php";
    }
}
