<div class="row">
    <div class="row frmtitle">
        <h1>thêm loại hàng mới </h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                mã loại <br>
                <input type="text" name="id_dm" disabled>
            </div>
            <div class="row mb10">
                ten loai <br>
                <input type="text" name="name_dm">
            </div>
            <div class="row button">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") echo $thongbao;
            ?>
        </form>
    </div>
</div>