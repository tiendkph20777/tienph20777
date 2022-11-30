<?php
extract($onesp);
?>

<section class="do_dai_trang">
    <div class="text">
        <div class="o_long_xoai_kem_ca_phe">
            <div class="anh_o_long_xoai">
                <div class="thong_tin">
                    <h1><?php echo $name_sp ?></h1>
                </div>
                <br><br><br>
                <img src="images/<?php echo $img_sp ?>" alt="">
            </div>
            <div class="dat_hang_o_long_xoai">
                <h1>ĐẶT HÀNG</h1>
                <form action="">
                    <p>Chọn loại</p>
                    <div class="chon_loai">
                        <div class="s1">
                            <input type="radio" id="lanh" name="chon_loai"><label for="">LẠNH</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="nong" name="chon_loai"><label for="">NÓNG</label>
                        </div>
                    </div>
                    <p>Chọn SIZE</p>
                    <div class="chon_loai">
                        <div class="s1">
                            <input type="radio" id="size M" name="chon_size"><label for="">Size M</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="size L" name="chon_size"><label for="">Size L</label>
                        </div>
                    </div>
                    <p>Chọn đường</p>
                    <div class="chon_loai">
                        <div class="s1">
                            <input type="radio" id="khong_duong" name="chon_duong"><label for="">Không Đường</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_30" name="chon_duong"><label for="">30% đường</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_50" name="chon_duong"><label for="">50% đường</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_70" name="chon_duong"><label for="">70% đường</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_100" name="chon_duong"><label for="">100% đường</label>
                        </div>
                    </div>
                    <p>Chọn đá</p>
                    <div class="chon_loai">
                        <div class="s1">
                            <input type="radio" id="khong_da" name="chon_da"><label for="">Không Đá</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_30" name="chon_da"><label for="">30% đá</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_50" name="chon_da"><label for="">50% đá</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_70" name="chon_da"><label for="">70% đá</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="duong_100" name="chon_da"><label for="">100% đá</label>
                        </div>
                        <div class="s1">
                            <input type="radio" id="khong_da_mat" name="chon_da"><label for="">Không đá mát</label>
                        </div>
                    </div>
                    <p>chọn Topping</p>
                    <div class="topping">
                        <div class="s2">
                            <input type="checkbox" id="tran_chau_suong_mai" class="topping1"><label for="">Thêm Trân Châu Sương Mai</label>
                        </div>
                        <p>+9.000đ</p>
                        <div class="s2">
                            <input type="checkbox" id="tran_chau_baby" class="topping2"><label for="">Thêm Trân Châu Baby</label>
                        </div>
                        <p>+8.000đ</p>
                        <div class="s2">
                            <input type="checkbox" id="tran_chau_hoang_kim" class="topping3"><label for="">Thêm Trân Châu Hoàng Kim</label>
                        </div>
                        <p>+9.000đ</p>
                    </div>
                    <input type="submit" value="ĐẶT HÀNG" class="dat_hang">
                    <h1 id="a111"></h1>
                </form>
            </div>
        </div>
        <div class="thong_tin_vs_nguyen_lieu">
            <div class="thong_tin">
                <h1>THÔNG TIN</h1>
                <p>
                    <?php echo $mota_sp ?>

                </p>
            </div>
            <div class="nguyen_lieu">
                <h1>NGUYÊN LIỆU</h1>
                <p>
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        echo $name;
                    }
                    ?>
                </p>
            </div>
        </div>
</section>
<script>
    onclick = "return alert('Bạn chắc chắn muốn đăng xuất chứ ?')"
    document.getElementById('a111').innerHTML = abc;
</script>