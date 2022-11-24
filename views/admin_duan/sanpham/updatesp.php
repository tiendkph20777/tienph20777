<?php
if (is_array($sp)) {
    extract($sp);
}
$upanh = "../../images/" . $img_sp;
if (is_file($upanh)) {
    $img_sp = "<img src='" . $upanh . "' height='150' >";
}
?>

<div class="row">
    <div class="row frmtitle">
        <h1>cap nhat loại hàng </h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                mã sản phẩm <br>
                <input type="text" name="id_sp" value="<?= $id_sp ?>" disabled>
            </div>
            <div class="row mb10">
                danh muc <br>
                <select name="id_dm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo "<option value='" . $id_dm . "'>" . $name_dm . "</option>";
                    }
                    ?>

                </select>
            </div>
            <div class="row mb10">
                tên sản phẩm <br>
                <input type="text" name="name_sp" value="<?php if (isset($name_sp) && ($name_sp != "")) echo $name_sp; ?>">
            </div>
            <div class="row mb10">
                giá sản phẩm <br>
                <input type="text" name="price_sp" value="<?= $price_sp ?>">
            </div>
            <div class="row mb10">
                ảnh sản phẩm <br>
                <?php echo $img_sp ?>
                <input type="file" name="img_sp" value="">
            </div>
            <div class="row mb10">
                mô tả sản phẩm <br>
                <textarea name="mota_sp" id="" cols="30" rows="10"><?= $mota_sp ?></textarea>
            </div>
            <div class="row mb10">
                lượt xem <br>
                <input type="text" name="luotxem_sp" value="<?= $luotxem_sp ?>">
            </div>
            <div class="row button">
                <input type="hidden" name="id_sp" value="<?php if (isset($id_sp) && ($id_sp > 0)) echo $id_sp; ?>">
                <input type="hidden" name="id_dm" value="<?php if (isset($id_dm) && ($id_dm > 0)) echo $id_dm; ?>">

                <input type="submit" name="capnhat" value="update">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") echo $thongbao;
            ?>
        </form>
    </div>
</div>