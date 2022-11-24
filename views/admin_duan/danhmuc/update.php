<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<div class="row">
    <div class="row frmtitle">
        <h1>cap nhat loại hàng </h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                mã loại <br>
                <input type="text" name="" value="<?= $id_dm ?>" disabled>
            </div>
            <div class="row mb10">
                ten loai <br>
                <input type="text" name="name_dm" value="<?php if (isset($name_dm) && ($name_dm != "")) echo $name_dm; ?>">
            </div>
            <div class="row button">
                <input type="hidden" name="id_dm" value="<?php if (isset($id_dm) && ($id_dm > 0)) echo $id_dm; ?>">
                <input type="submit" name="capnhat" value="cap nhat">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") echo $thongbao;
            ?>
        </form>
    </div>
</div>