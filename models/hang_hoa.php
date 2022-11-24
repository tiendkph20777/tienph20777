<?php
//Lấy dữ liệu của hàng hóa
function hang_hoa_all()
{
    $conn = connection();
    $sql = "Select * From hang_hoa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function hang_hoa_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, hinh, ma_loai, mo_ta) Values(?, ?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
