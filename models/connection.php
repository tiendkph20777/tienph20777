<?php
//Kết nối đến cơ sở dữ liệu 
function pdo_get_connection()
{
    // $conn = new PDO("mysql:host=localhost; dbname=du_an_mau_01; charset=utf8", "root", "");
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // return $conn;

    $dburl = "mysql:host=localhost;dbname=du_an_mau_01;charset=utf8";
    $username = 'root';
    $password = '';

    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}


// thực thi câu lệnh ínert update delete
// function pdo_execute($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//     } catch (\Throwable $th) {
//         throw $th;
//     } finally {
//         unset($conn);
//     }
// }
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

// thực thi câu lệnh truy vấn dữu liệu select
// function pdo_query($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $rows = $stmt->fetchAll();
//         return $rows;
//     } catch (\Throwable $th) {
//         throw $th;
//     } finally {
//         unset($conn);
//     }
// }
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

// câu lệnh sql truy vấn một bản ghi
// function pdo_query_one($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);
//         return $row;
//     } catch (\Throwable $th) {
//         throw $th;
//     } finally {
//         unset($conn);
//     }
// }
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
