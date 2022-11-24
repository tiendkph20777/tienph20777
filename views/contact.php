<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="do_dai_trang">
        <div class="danh_muc_san_pham">
            <div class="danh_muc">
                <p>
                <h1>DANH MỤC</h1>
                </p>
                <div class="h1">
                    <?php
                    foreach ($list_dm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&id_dm" . $id_dm;
                        echo '
                            <a href="' . $linkdm . '">
                                <p class="text">' . $name_dm . '</p>
                            </a>
                        ';
                    }
                    ?>

                </div>
            </div>
            <div class="san_pham">
                <p class="tieu_de">Món nổi bật</p>
                <div class="mon_noi_bat">
                    <?php
                    foreach ($list_all_sp as $sp) {
                        extract($sp);
                        $linksp = "index.php?ctr=sanphamct&id_sp=" . $id_sp;
                        // $img = $img_path . $img_sp;
                        echo '<div class="s1 sp1">
                                <a href="">
                                    <img src="images/' . $img_sp . '" alt="">
                                </a>
                                    <p>' . $name_sp . '</p>
                                    <p class="gia_tien">' . $price_sp . '</p>
                                    <a href="' . $linksp . '">chi tiết</a>
                                </div>';
                    }
                    ?>

                </div>
                <!-- <p>Trà Sữa</p> -->
                <div class="tra_sua">

                </div>
            </div>
            <div class="gio_hang">
                <div class="text">
                    <h1>GIỎ HÀNG CỦA TÔI</h1>
                </div>
                <div class="mat_hang_gio_hang">
                    <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/icon-glass-tea.png" alt="">
                    <p>*</p>
                    <p>0</p>
                    <p>=</p>
                    <p>0đ</p>
                </div>
                <div class="thanh_toan">
                    <a href="">Thanh toán</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>