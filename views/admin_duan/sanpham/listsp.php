<div class="row">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH LOẠI HÀNG </h1>
    </div>
    <form action="#" method="post">
        <input type="text" name="kyw">
        <select name="id_dm" id="" class="mb10">
            <option value="0" selected>tat ca</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo "<option value='" . $id_dm . "'>" . $name_dm . "</option>";
            }
            ?>
        </select>
        <input type="submit" name="listsp_ok" value="  go ">
    </form>
    <div class="row frmcontent ">
        <form action="" method="post">
            <div class="row frmdsloai mb10">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM </th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>MÔ TẢ SẢN PHẨM</th>
                        <th>LƯỢT XEM</th>
                        <th>danh muc</th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id_sp=" . $id_sp;
                        $xoasp = "index.php?act=xoasp&id_sp=" . $id_sp;
                        $upanh = "../../images/" . $img_sp;
                        if (is_file($upanh)) {
                            $img_sp = "<img src='" . $upanh . "' height='80' >";
                        }
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id_sp . '</td>
                                <td>' . $name_sp . '</td>
                                <td>' . $price_sp . '</td>
                                <td>' . $img_sp . '</td>
                                <td>' . $mota_sp . '</td>
                                <td>' . $luotxem_sp . '</td>
                                <td>' . $id_dm . '</td>
                                <td><a href="' . $suasp . '"><input type="button" value="sua"></a>  <a href="' . $xoasp . '"><input type="button" value="xoa"></a> </td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>


            <div class="row button">
                <input type="button" value="chon tat ca">
                <input type="button" value="bo chon tat ca">
                <input type="button" value="xoa cac muc da chon">
                <a href="index.php?act=addsp"><input type="button" value="nhap them"></a>
            </div>
        </form>

    </div>
</div>

<script>
    function check() {
        onclick = "confirm'ban co chac muon xoa khong'";
    }
</script>