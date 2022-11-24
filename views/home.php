<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <title>trang chủ</title>
</head>

<body>
    <section class="do_dai_trang">
        <section id="text">
            <div class="thong_tin">
                <p class="text_1">ToCoToCo Menu</p>
                <p class="text_2">SẢN PHẨM NỔI BẬT</p>
                <img src="Ảnh chụp màn hình 2022-07-29 231226.png" alt="">
            </div>
            <div id="thong_tin_san_pham_noi_bat">
                <?php
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?ctr=sanphamct&id_sp=" . $id_sp;
                    // $img = $img_path . $img_sp;
                    echo '<div class="sp1">
                        <img src="images/' . $img_sp . '" alt="">

                        <p>' . $name_sp . '</p>
                        <p class="gia_tien">' . $price_sp . '</p>
                        <a href="' . $linksp . '">chi tiết</a>
                    </div>';
                }
                ?>
            </div>
            <div class="nut_xem_tat_ca_san_pham_noi_bat">
                <a href="?ctr=contact">Xem Tất Cả</a>
            </div>
        </section>
        <section class="tocotoco_ve_chung_toi">
            <div>
                <p class="text1">ToCoToCO Story</p>
                <p class="text2">VỀ CHÚNG TÔI</p>
                <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/home_line.webp" alt="">
                <p class="text3">
                    Bên cạnh niền tự hào về những ly trà sữa ngon - sạch - tươi. <br>
                    chúng tôi luôn tự tin mang đến cho khách hàng những trải nghiệm <br>
                    tốt nhất về dịch vụ và không gian.
                </p>
                <a href="">XEM THÊM</a>
            </div>
        </section>
        <section class="tocotoco_nhuong_quyen">
            <div class="text">
                <p class="text1">ToCoToCO Franchise</p>
                <p class="text2">NHƯỢNG QUYỀN</p>
                <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/home_line.webp" alt="">
                <p class="text3"> Gia nhập đế chế 300 TRIỆU USD. Nếu bạn bắt đầu kinh doanh khởi <br>
                    nghiệp ẩm thực, hoặc muốn đầu tư vào lĩnh vực này, thương hiệu <br>
                    TocoToco chắc chăn sẽ là một lựa chọn đáng cân nhắc cho bạn.
                </p>
                <a href="">XEM THÊM</a>
            </div>
            <div class="anh_text">
                <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/img_home_franchise.png" alt="">
            </div>
        </section>
        <div id="text">
            <p class="text1">Tin Tức và Khuyến Mãi </p>
            <p class="text2">KHÁM PHÁ TOCOTOCO NHẬN NGAY KHUYẾN MẠI </p>
            <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/home_line.webp" alt="">
        </div>
        <section class="tin_tuc_va_khuyen_mai">
            <div class="thong_tin1">
                <div class="tin1">
                    <a href="../tin_tuc/tin_tuc.html">
                        <img src="https://tocotocotea.com/wp-content/uploads/2022/07/Hinh-thumb-2-scaled.jpg" alt="">
                        <h1>ToCoToCo “cháy” cùng hàng trăm học sinh Amsterdam và Chuyên Ngoại Ngữ trong chương trình Camp Aletheia</h1>
                        <p> Tiếp nối các chương trình hướng đến cộng đồng và tài trợ sân chơi bổ ích cho các bạn học sinh sinh viên, ToCoToCo tự hào khi đồng hành cùng […] </p>
                    </a>
                    <div class="xem_them">
                        <a href="">XEM THÊM</a>
                    </div>
                </div>
                <div class="tin2">
                    <div class="t1">
                        <a href="">
                            <img src="https://tocotocotea.com/wp-content/uploads/2021/12/SPM_CHOCO_zalo-1.png" alt="">
                            <p>CÙNG TOCOTOCO NHÂN ĐÔI SỰ NGỌT NGÀO NGÀY LỄ HỘI</p>
                        </a>
                    </div>
                    <div class="t1">
                        <a href="">
                            <img src="https://tocotocotea.com/wp-content/uploads/2021/12/SPM_CHOCO_zalo-1.png" alt="">
                            <P>TÂM HUYẾ NÂNG TẦM GIÁ TRỊ NÔNG SẢN VIỆT CỦA TOCOTOCO</P>
                        </a>
                    </div>
                    <div class="t1">
                        <a href="">
                            <img src="https://tocotocotea.com/wp-content/uploads/2021/12/SPM_CHOCO_zalo-1.png" alt="">
                            <P>VỊ GIÒN TAN - GIÁNG SINH RỘN RÀNG CÙNG CHOCO NGŨ CỐC KEM CAFE VÀ HỒNG TRÀ NGŨ CỐC KEM CAFE</P>
                        </a>
                    </div>
                    <div class="t1">
                        <a href="">
                            <img src="https://tocotocotea.com/wp-content/uploads/2021/12/tocotoco-thi-truong-my.png" alt="">
                            <P>VÌ SAO KHÁCH HÀNG TỊA THỊ TRƯỜNG MỸ ƯU THÍCH CỊ ĐẬM DÀ KHÁC BIỆT CỦA TOCOTOCO?</P>
                        </a>
                    </div>
                </div>

            </div>
            <div class="thong_tin2">
                <div class="tin2">
                    <img src="https://tocotocotea.com/wp-content/uploads/2021/07/video_bg.png" alt="">
                    <p>
                        CON ĐƯỜNG KHỞI NGHIỆP CỦA NGƯỜI SÁNG LẬP THƯƠNG HIỆU TRÀ SỮA VIỆT NAM - TOCOTOCO </p>
                </div>
                <div class="tin3">
                    <img src="https://tocotocotea.com/wp-content/uploads/2021/07/TACO_THU%CC%9BO%CC%9BNG-HIE%CC%A3%CC%82U-TIE%CC%82U-BIE%CC%82%CC%89U-CHA%CC%82U-A%CC%81-THA%CC%81I-BI%CC%80NH-DU%CC%9BO%CC%9BNG-2021.jpg" alt="">
                    <p>
                        ToCoToCo đạt top 10 thương hiệu Châu Á Thái Bình Dương 2021 </p>
                </div>
                <div class="tin3">
                    <img src="https://tocotocotea.com/wp-content/uploads/2021/08/Clip_NML_cu%CC%9B%CC%89a-ha%CC%80ng_B-C.jpg" alt="">
                    <p>
                        ToCoToCo thay đổi quan niệm về nguyên liệu cho ngành trà sữa Việt </p>
                </div>
            </div>
        </section>
    </section>


</body>

</html>