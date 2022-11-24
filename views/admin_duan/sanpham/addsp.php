<div class="row">
    <div class="row frmtitle">
        <h1>thêm moi san pham </h1>
    </div>
    <div class="row frmcontent ">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
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
                ten sản phẩm <br>
                <input type="text" name="name_sp">
            </div>
            <div class="row mb10">
                giá sản phẩm <br>
                <input type="text" name="price_sp">
            </div>
            <div class="row mb10">
                ảnh sản phẩm <br>
                <input type="file" name="img_sp">
            </div>
            <div class="row mb10">
                mô tả sản phẩm <br>
                <textarea name="mota_sp" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                lượt xem <br>
                <input type="text" name="luotxem_sp">
            </div>

            <div class="row button">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") echo $thongbao;
            ?>
        </form>
    </div>
</div>