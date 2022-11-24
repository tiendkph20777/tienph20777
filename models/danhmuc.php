<?php

function insert_danhmuc($name_dm)
{
    $sql = "insert into danhmuc(name_dm) values('$name_dm')";
    pdo_execute($sql);
}
function list_danhmuc()
{
    $sql = "select * from danhmuc order by id_dm desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}


function delete_danhmuc($id_dm)
{
    $sql = "delete from danhmuc where id_dm=" . $id_dm;
    pdo_execute($sql);
}
function sua_danhmuc($id)
{
    $sql = "select * from danhmuc where id_dm =" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id_dm, $name_dm)
{
    $sql = "update danhmuc set name_dm='" . $name_dm . "'where id_dm=" . $id_dm;
    pdo_execute($sql);
}
