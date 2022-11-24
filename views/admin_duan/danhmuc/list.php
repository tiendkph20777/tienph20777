<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH DANH MỤC </h1>
    </div>
    <div class="row frmcontent">
        <form action="" method="post">
            <div class="row frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id_dm=" . $id_dm;
                        $xoadm = "index.php?act=xoadm&id_dm=" . $id_dm;
                        echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id_dm . '</td>
                                <td>' . $name_dm . '</td>
                                <td><a href="' . $suadm . '"><input type="button" value="sua"></a>  <a href="' . $xoadm . '"><input type="button" value="xoa"></a> </td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>

            <div class="row button">
                <input type="button" value="chon tat ca">
                <input type="button" value="bo chon tat ca">
                <input type="button" value="xoa cac muc da chon">
                <a href="index.php?act=adddm"><input type="button" value="nhap them"></a>
            </div>
        </form>

    </div>
</div>