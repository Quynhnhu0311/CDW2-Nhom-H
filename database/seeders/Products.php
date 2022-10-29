<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////////////////// LV ////////////////////////////////////////////////
        \DB::table('products')->insert([
            'product_name' => 'Quần baggy LV ống rộng nam BeU',
            'product_price' => 179000,
            'product_img' => '8fed24a185ebca97092d53c94e075d09.jpg_720x720q80.jpg',
            'product_description' => 'Quần bò jean cao cấp loại 1
                                    - Chất liệu: Jean cao cấp, hình thêu.
                                    - Kiểu dáng: Ống rộng, ống suông
                                     - Màu: Xanh',
            'type_id' => 1,
            'menu_id' => 1,
            'feature_id' => 1
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Quần short jean nam',
            'product_price' => 55000,
            'product_img' => '8f6ae4c0feb11ac429bc21eec5739fe6.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần jean ngắn đen rách phối họa tiết LV chất vải dày co dãn mẫu mới nhất cao cấp',
            'type_id' => 1,
            'menu_id' => 1,
            'feature_id' => 2
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Quần jean nam xanh loang',
            'product_price' => 99000,
            'product_img' => '0d0a257f35a881447376cd19f2a761cd.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần jean nam xanh loang màu chất bò,mẫu mới,vải dày đẹp,form chuẩn,phối LV cao cấp-AHFASHION',
            'type_id' => 1,
            'menu_id' => 1,
            'feature_id' => 3
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Quần Dài GC Nam',
            'product_price' => 237000,
            'product_img' => 'a2b9cb5b9b1063ed2241bdf6d6c4a592.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Dài GC Nam Chất Thô Thêu Logo GC Siêu Đẹp - Quần Dài LV Nam Chất Thô Thêu Logo LV Cực Chất',
            'type_id' => 1,
            'menu_id' => 1,
            'feature_id' => 3
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Quần Ngố LV Nam',
            'product_price' => 197000,
            'product_img' => '07d98f16a8878f52a5b9e7400299c14a.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Ngố LV Nam Thêu Hoạ Tiết hoa LV Siêu Đẹp - mát mẻ - Quần Ngố LV Nam Mẫu mới',
            'type_id' => 1,
            'menu_id' => 1,
            'feature_id' => 2
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Áo thun nam polo',
            'product_price' => 69000,
            'product_img' => '14da5782103479fdc6ffffd11466f78b.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo thun nam polo siêu cấp LOIUS.VUITTEN có túi thêu LV có cổ tay ngắn vải cotton co dãn tốt chất mát thấm hút mồ hôi tốt 2 màu trắng đen cao cấp',
            'type_id' => 2,
            'menu_id' => 1,
            'feature_id' => 1
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Áo thun nam cổ tròn',
            'product_price' => 39000,
            'product_img' => '47d700037d05077a0c73783173a85b0f.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo thun nam cổ tròn 2 màu trắng đen phối họa tiết LV đẹp thời trang cao cấp hàng chuẩn shop Quang_thời_trang',
            'type_id' => 2,
            'menu_id' => 1,
            'feature_id' => 2
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Áo thun Unisex',
            'product_price' => 38220,
            'product_img' => 'ef8565ae9c01884d5cc03d26f542c2c6.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo thun Unisex nam nữ LV in phối xanh trắng - đen đen form rộng đẹp tay lỡ kiểu hàn quốc vải cotton',
            'type_id' => 2,
            'menu_id' => 1,
            'feature_id' => 1
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Áo sơ mi nam dài tay',
            'product_price' => 69000,
            'product_img' => '59d0fb74fed3a37fd1d50d0a07b347d4.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo sơ mi nam dài tay phối loang in họa tiết LV chữ nổi sang trọng chất vải đũi cao cấp mẫu mới giá rẻ DV-FASHION',
            'type_id' => 2,
            'menu_id' => 1,
            'feature_id' => 3
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Áo thun nam thêu LV POLO',
            'product_price' => 59000,
            'product_img' => '301df71c14e8bd62e5c2374a5d16ceee.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo thun nam thêu LV POLO có cổ tay ngắn vải cotton thoáng mát-dày dặn-chuẩn form-sang trọng-AHFASHION',
            'type_id' => 2,
            'menu_id' => 1,
            'feature_id' => 3
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Túi xách nữ',
            'product_price' => 48000,
            'product_img' => 'S8a20adcbf36d4b0d854382fc5b53ff166.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi xách nữ cầm tay kèm dây đeo chéo hoạ tiết LV',
            'type_id' => 3,
            'menu_id' => 3,
            'feature_id' => 1
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Túi đeo chéo Combo 2 túi LV',
            'product_price' => 560000,
            'product_img' => 'c3a4637be4c5e350c199bfb5e88d167c.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi đeo chéo Combo 2 túi LV dành cho nam Fullbox - Túi xách combo 2 túi cao cấp dành cho Nam',
            'type_id' => 3,
            'menu_id' => 1,
            'feature_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi tròn họa tiết túi hộp',
            'product_price' => 68900,
            'product_img' => '76338c78196028e2aff1bb13f1e06cd9.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi tròn họa tiết túi hộp tròn mini đeo chéo cầm tay hàng đẹp TRONLVMINI+ hình tự chụp',
            'type_id' => 3,
            'menu_id' => 1,
            'feature_id' => 1
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Balo nam LV',
            'product_price' => 250000,
            'product_img' => 'S149a9cd1fcd640678a678e99202193a9d.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Balo nam Lv hàng da cao cấp tiện dụng đa năng',
            'type_id' => 3,
            'menu_id' => 1,
            'feature_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Balo caro LV',
            'product_price' => 300000,
            'product_img' => 'S2c987d416e9246f28eaed1c2e52146fay.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Balo caro LV thời trang hoạ tiết in hình cá tính - Cặp đa năng',
            'type_id' => 3,
            'menu_id' => 1,
            'feature_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép lV quai ngang',
            'product_price' => 175000,
            'product_img' => 'dc606884d48464eee29722d5b34e417f.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép lv quai ngang đế cao su quai da thật 100%, dép nam lv Fullbox.',
            'type_id' => 4,
            'menu_id' => 1,
            'feature_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép Sục',
            'product_price' => 134000,
            'product_img' => 'Se6fc7c281c0346818701b2e9316387ffi.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép Sục Bít Mũi Dép Đế Bằng Dễ Phối Mùa Hè Mẫu Mới 2022 Đi Bên Ngoài Cho Nữ Giày Giày Lười Dép Lê Nổi Tiếng Trên Mạng Giày Sành Điệu',
            'type_id' => 4,
            'menu_id' => 1,
            'feature_id' => 1
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày lười nam',
            'product_price' => 230000,
            'product_img' => 'Sb4aba44d249d42c2a4a84f4749ed2295c.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày lười nam LV da sần siêu hot - Giày moca nam Lv',
            'type_id' => 4,
            'menu_id' => 1,
            'feature_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày sneaker nam LV',
            'product_price' => 279000,
            'product_img' => 'efaacf6f34619513b3aae43cabb7edac.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày sneaker nam LV nhiều màu cá tính viền khâu',
            'type_id' => 4,
            'menu_id' => 1,
            'feature_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày slipon nam LV',
            'product_price' => 240000,
            'product_img' => 'S9b6388d871dd4a6b874796705230a8551.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày slipon nam LV thêu logo caro xen kẽ - Giày lười nam LV',
            'type_id' => 4,
            'menu_id' => 1,
            'feature_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dây Chuyền Mặt Chữ LV',
            'product_price' => 129000,
            'product_img' => 'b7f54c3cac9b281638749496aadaaa75.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dây Chuyền Mặt Chữ Lv Xinh Xắn - TRANG SỨC BẠC TNJ CAM KẾT HÀNG CHUẨN ẢNH, CHẤT LƯỢNG TỐT, PHỤC VỤ TẬN TÌNH, CHU ĐÁO',
            'type_id' => 5,
            'menu_id' => 1,
            'feature_id' => 1
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Mặt dây chuyền nam bạc LV',
            'product_price' => 145000,
            'product_img' => 'ad5f65fae18e1faa8326b235acd11b9b.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Mặt dây chuyền nam bạc LV size nhỏ-Minh Tâm Jewelry',
            'type_id' => 5,
            'menu_id' => 1
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Thắt Lưng Caro Mặt Vuông Nam',
            'product_price' => 90000,
            'product_img' => '6a3daeb24af8b643009d5b0333b986f7.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Thắt Lưng Caro Mặt Vuông Nam - Dây Lưng Lv Nam - Thắt Lưng LV caro',
            'type_id' => 5,
            'menu_id' => 1
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Mắt kính nam nữ LV Millionaire',
            'product_price' => 99000,
            'product_img' => '639092f0c4a96d2a26f1c286997ab9e8.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Mắt kính nam nữ LV Millionaire cao cấp thời thượng hot trend BINSPORTS K002',
            'type_id' => 5,
            'menu_id' => 1
        ]);
        ////////////////////////////// Gucci ////////////////////////////////////////////////
        \DB::table('products')->insert([
            'product_name' => 'ÁO KHOÁC THIẾT KẾ',
            'product_price' => 588000,
            'product_img' => '75161a6c94d57b831e61be403c4f67b2.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'ÁO KHOÁC THIẾT KẾ | ÁO KHOÁC GUCCI VỚI 1 PHÒNG CÁCH TRẺ TRUNG, NĂNG ĐỘNG BT',
            'type_id' => 2,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'ÁO THUN NAM TAY LỠ',
            'product_price' => 185000,
            'product_img' => '13b54a49114652ccba8787848dea5a5a.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'ÁO THUN NAM TAY LỠ CÓ IN HỌA TIẾT GUCCI MẶC KÈM VỚI QUẦN TÂY RẤT LÀ LỊCH SỰ BT',
            'type_id' => 2,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'ÁO THUN GUCCI NAM TAY LỠ',
            'product_price' => 195000,
            'product_img' => 'aa56f830b0284bc84bf8c9dc71b87842.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'ÁO THUN GUCCI NAM TAY LỠ HÀNG SIÊU CẤP RẤT HOT MẶC CỰC KÌ THOẢI MÁI BT',
            'type_id' => 2,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo khoác CUCCI chất vải dù',
            'product_price' => 79000,
            'product_img' => 'e3a876c820a9462eb26633a6e826e14b.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo khoác CUCCI chất vải dù mero dày dặn, thiết kế sành điệu cá tính WEGO BOX',
            'type_id' => 2,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo khoác gió nam nữ phong cách hiệu GUCCI',
            'product_price' => 120000,
            'product_img' => '412d1dcf8f847986fe6d4eff275b1fc5.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo khoác gió nam nữ phong cách hiệu GUCCI kẻ sọc cánh tay siêu chất kiểu thời trang nam nữ',
            'type_id' => 2,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần bò jean nam ngắn',
            'product_price' => 125000,
            'product_img' => '583375435e6594b6fd216ba7ada1d15f.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần bò jean nam ngắn kiểu thêu logo đen xanh nhiều mẫu mới đẹp chất co giãn tốt_GUCCI',
            'type_id' => 1,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần short jean nam đen xanh rách nhẹ',
            'product_price' => 33000,
            'product_img' => '8d4a16fa104bb18ffb2b7f150dce4f43.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần short jean nam đen xanh rách nhẹ thêu cao cấp đẹp nhiều mẫu,quần bò ngố nam thời trang_gucci',
            'type_id' => 1,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Âu Nam Phối Cạp Gucci',
            'product_price' => 99000,
            'product_img' => 'a767a860a243121a927877b609b9283b.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Âu Nam Phối Cạp Gucci Quần Trơn Chất Vải Cotton Không Xù Vải - Mặc Là Đẹp - Mã QPC',
            'type_id' => 1,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần bò gucci vải thô gai',
            'product_price' => 279000,
            'product_img' => '7275a03801ba46640df27f3da83df906.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần bò gucci vải thô gai cao cấp hàng Quảng Châu loại 1',
            'type_id' => 1,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Jean Nam Đẹp',
            'product_price' => 490000,
            'product_img' => '43bbc33fb8c8706f29e79bd202bf6f23.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Jean Nam Đẹp,Quần Jean Nam cao cấp,Quần Jean Nam Cao Cấp,Quần Jean Dài nam jean thun form rộng tây âu hàn quốc thể thao gucci jean rách XMJ MS16',
            'type_id' => 1,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Gucci nữ màu hồng',
            'product_price' => 385000,
            'product_img' => 'e44da2896e5795a46db4a3baaa8ae418.png_400x400q75.png_.jpg',
            'product_description' => 'Giày Gucci nữ màu hồng sneaker thể thao bản đẹp full box',
            'type_id' => 4,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép GUCCI trong',
            'product_price' => 385000,
            'product_img' => '6a9bcf3c83596254d96a44082b00f4ac.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép gucci trong sốt quai ngang nam nữ in chữ nổi full size, màu xanh ngọc',
            'type_id' => 4,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép nam xỏ ngón Gucci cao cấp',
            'product_price' => 118000,
            'product_img' => 'a6844f35e01838b675d1930ec104bc04.jpg_400x400q75.jpg_.jpg',
            'product_description' => '[FullBox] Dép nam xỏ ngón Gucci cao cấp, thời trang phong cách. Đầy đủ hộp+hóa đơn chính hãng Gucci, siêu rẻ bền bỉ êm chân.Màu trắng',
            'type_id' => 4,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày thể thao Giầy sneaker Gucci',
            'product_price' => 180000,
            'product_img' => 'S5124f3cb13804012ac8cc30801bdd3f8e.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày thể thao Giầy sneaker Gucci Original thêu ong sao bản Like Authentic 1-1 on web Fullbox',
            'type_id' => 4,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày thể thao Gucci Sơn Tùng Hồng',
            'product_price' => 185000,
            'product_img' => '9ac3ed68e6ea518bc4f7a48d557aa254.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày thể thao Gucci Sơn Tùng Hồng. Giày sneaker Gucci Sơn Tùng màu Hồng mẫu mới dễ phối đồ',
            'type_id' => 4,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi Đeo Chéo Đeo Vai nam gucci',
            'product_price' => 74900,
            'product_img' => 'fd2baae19e1c8ed0744f59b74749bda2.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi Đeo Chéo Đeo Vai nam gucci kiểu dáng thời trang đi chơi phượt- TDC500',
            'type_id' => 3,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'TÚI đeo GUCCI',
            'product_price' => 107000,
            'product_img' => '52775dafb8b8e10f6aee4eb6a59fd4a2.png_400x400q75.png_.jpg',
            'product_description' => 'TÚI đeo GUCCI Phong cách thời trang trẻ 2022 Hàng Fullbox ạ',
            'type_id' => 3,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Ba Lô GUCCI Cho Nam',
            'product_price' => 535000,
            'product_img' => '4e9bf6dd48eacf30743b863b4ed9d634.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Ba Lô GUCCI Cho Nam Giảm Giá Ba Lô Lớn Màu Nâu 2022 Ba Lô Du Lịch Tập Gym Du Lịch Cuối Tuần Ba Lô Đi Học',
            'type_id' => 3,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Balo Gucci size 26cm',
            'product_price' => 490000,
            'product_img' => 'Sfc50b0a2a8424746a552d30cbae18a97D.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Balo Gucci size 26cm fom cứng nhiều ngăn hàng quảng châu cao cấp',
            'type_id' => 3,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'GUCCI Ba Lô Cho Nữ',
            'product_price' => 607000,
            'product_img' => 'c349f09b680f7b6ec481a9d1391a1ca9.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'GUCCI Ba Lô Cho Nữ 2022 Túi Đi Học Cho Bé Trai Bé Gái Túi Giấy Tùy Chọn',
            'type_id' => 3,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'DÂY CHUYỀN TITAN GUCCI',
            'product_price' => 89000,
            'product_img' => 'a096d7f00c4a9f1d53ca398b13effe47.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'DÂY CHUYỀN TITAN GUCCI ĐẸP THÍCH HỢP LÀM QUÀ TN234',
            'type_id' => 5,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dây chuyền titan mặt tròn',
            'product_price' => 69000,
            'product_img' => 'Se8dd3f20889543f59f27c3d2d028453eE.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'TTN7508 - Dây chuyền titan mặt tròn GUCCI (1 dây 2 mặt 2 kiểu - màu vàng)',
            'type_id' => 5,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Đai váy GUCCI 5cm',
            'product_price' => 103000,
            'product_img' => '3abd4a9cd37dc4ca02d70128b1d45396.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Đai váy GUCCI 5cm mặt chữ mạ vàng belt phối đầm sang chảnh TB487',
            'type_id' => 5,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Thắt lưng nam , Dây nịt nam gucci',
            'product_price' => 99000,
            'product_img' => 'S9f7ce3a35cb149eab1917bd409f15928y.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Thắt lưng nam , Dây nịt nam gucci [ HÀNG CAO CẤP ] , chất liệt da bò , không phai màu',
            'type_id' => 5,
            'menu_id' => 2
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Bông Tai Gucci',
            'product_price' => 41900,
            'product_img' => '205898ab4db999d8cadc88598e825a2d.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Bông Tai Gucci Thời Trang Khuyên Tai Hai Vòng GG Logo Chữ Cái Bằng Thép Titan Trang Sức Cho Nữ',
            'type_id' => 5,
            'menu_id' => 2
        ]);
        //////////////////////////////////////////// Prada ////////////////////////////////////
        \DB::table('products')->insert([
            'product_name' => 'Quần legging prada CẠP CAO',
            'product_price' => 129000,
            'product_img' => 'db807234299e52f3f7fd10d1db096dbf.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần legging prada CẠP CAO chun bản to chất umi cao cấp',
            'type_id' => 1,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Nỉ Nam PraDa Túi Hộp',
            'product_price' => 230000,
            'product_img' => 'Sf1436d162e224c688c4bfd8faba981239.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Nỉ Nam PraDa Túi Hộp - Quần Jogger Nam Ống Bo Chun',
            'type_id' => 1,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Jean Prada Chính Hãng',
            'product_price' => 565250,
            'product_img' => '849cf2ef8edb05dbe7d355f2e5311c1c.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Jean Prada Chính Hãng 2021 Xu Hướng Phù Hợp Quần Bò Nam, Quần Bò Chất Lượng Cao, Quần Jean Thương Hiệu Cao Cấp',
            'type_id' => 1,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần đùi cotton in logo PRADA',
            'product_price' => 528000,
            'product_img' => 'ea3079d165f01eb3288f87f516bf66f7.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần đùi cotton in logo PRADA mẫu 2021 thời trang mùa hè mới trẻ trung',
            'type_id' => 1,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Prada Nam Mới',
            'product_price' => 860000,
            'product_img' => 'ef56b4a16abe967bcdfbd4d884bc16f8.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Prada Nam Mới Mùa Thu Quần Mỏng Thời Trang Thường Ngày Jinrun Vải Co Giãn Thoáng Khí Và Thoải Mái Dễ Phối Đồ Có Thể Mặc Trong Bốn Mùa',
            'type_id' => 1,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => ' Quần PRADA Thời trang đơn giản Nam',
            'product_price' => 418000,
            'product_img' => 'fbe4485a9161ed6766c5eb2dae82e61f.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'PRADA Thời trang đơn giản Nam giới Quần ngắn Cotton Mềm mại Thoải mái Thoáng khí Mùa hè Mỏng Thể thao Ngoài trời Chạy bộ Thể dục Quần short Thường mỏng',
            'type_id' => 1,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'PRADA Cổ điển Áo sơ mi ngắn tay',
            'product_price' => 353000,
            'product_img' => 'a005264a123818de7c6a634391693524.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'PRADA Cổ điển Áo sơ mi ngắn tay Thông thường Rộng thoáng khí mỏng Thoải mái Chất liệu cotton mềm mại Ngoài trời hàng ngày Đơn giản Độ co giãn Đơn giản Áo phông Unisex cổ tròn đơn giản',
            'type_id' => 2,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'PRADA Áo phông cotton',
            'product_price' => 331000,
            'product_img' => '5c047667b2f14a5ff4faa14bca464fa8.jpg_400x400q75.jpg_jpg',
            'product_description' => 'PRADA Áo phông cotton Thiết kế phản quang Thời trang mới Xu hướng mùa hè Ngoài trời hàng ngày Thường ngày Thở lỏng mỏng thoáng khí Mềm mại Thoải mái Ngắn tay áo Unisex',
            'type_id' => 2,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'PRADA Bông trắng Áo phông',
            'product_price' => 326000,
            'product_img' => '7fb6dad8a26bb7d34ba675e93d72a49e.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'PRADA Bông trắng Áo phông thường thêu Logo Mùa hè Đơn giản mỏng thoáng khí Mềm mại Thoải mái Thể thao ngoài trời Thể dục thể thao lỏng lẻo Mát mẻ Cổ thuyền viên Áo ngắn tay',
            'type_id' => 2,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'PRADA Cotton Áo phông đơn giản Thêu Logo',
            'product_price' => 315000,
            'product_img' => 'b43fadb247818d6f7be7547b9b22835e.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'PRADA Cotton Áo phông đơn giản Thêu Logo Mùa hè Giản dị Rộng mỏng thoáng khí Mềm mại Thoải mái Thể thao ngoài trời Thể dục thể thao Cổ điển Tất cả phù hợp Áo sơ mi ngắn tay',
            'type_id' => 2,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Prada Vest',
            'product_price' => 650000,
            'product_img' => 'a7f1dbd40b6c007b9d8b345c622381f7.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Prada Vest Sản Phẩm Mới Ngôi Sao Với Phần Thân Trên Áo Vest Nữ Nylon Chức Năng Thiết Kế Logo Tam Giác Cổ Điển',
            'type_id' => 2,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi đa năng Prada',
            'product_price' => 365914,
            'product_img' => '3c3f76c9a29765bc7896d312e5501176.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi đa năng Prada Túi đeo vai nữ Túi đeo vai nữ túi lớn Ransel Hàn Quốc Balo NHẬP KHẨU THỜI TRANG Đai đeo vai',
            'type_id' => 3,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Balo công suất lớn Prada Advanced',
            'product_price' => 412891,
            'product_img' => '7cc44c28ca8998a6dff2f20248b6a033.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Balo công suất lớn Prada Advanced Balo hàn quốc 2022 túi nữ mới chống thấm nước túi học sinh đa năng',
            'type_id' => 3,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Ba lô Prada Cao cấp',
            'product_price' => 226475,
            'product_img' => '6bbe208537ef37025cefb61395479d00.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Ba lô Prada Cao cấp Thời trang Hàn Quốc Oxford Vải chống thấm nước Đa chức năng Ba lô',
            'type_id' => 3,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'PRADA Túi Nữ',
            'product_price' => 209000,
            'product_img' => '5a79c0580f2522c105732eb6411de597.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'PRADA Túi Nữ Cuối Tuần 2022 Túi Cuối Tuần Mới Nhất Chất Lượng Cao',
            'type_id' => 3,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi Xách, Cặp Da Thời Trang Nam',
            'product_price' => 3800000,
            'product_img' => '4beac0b4c9c0d23dab1ca671265c5bd1.png_400x400q75.png_.jpg',
            'product_description' => 'Túi Xách, Cặp Da Thời Trang Nam Khóa Số Cao Cấp Prada CPR01 (Nhập khẩu)',
            'type_id' => 3,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Mọi Prada Da Lì',
            'product_price' => 677350,
            'product_img' => '2c9ffcbd5463ebc8322fe67a1bd81ce6.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Cx(ẢNH THẬT) Giày Mọi Prada Da Lì Và Bóng Mềm Êm Fullbox Bill Túi Hãng Cao Cấp (GDQC)',
            'type_id' => 4,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Cao gót đế trụ vuông',
            'product_price' => 149000,
            'product_img' => 'e3d6d97db6c7c4d41789b78c3c67d729.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giầy Cao gót đế trụ vuông 7P da mêm Prada siêu phẩm hot trend 2022',
            'type_id' => 4,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Cao Gót Dẹp 8p Prada',
            'product_price' => 608350,
            'product_img' => '26a15fbc45329ca39b0255f3954021bf.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày Cao Gót Dẹp 8p Prada Mềm Êm Fullbox Bill Túi Cao Cấp (GDQC)',
            'type_id' => 4,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép xuồng chéo prada',
            'product_price' => 259000,
            'product_img' => '312676b8af5e32155678dc1b5c14d7b4.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép xuồng chéo prada da mềm đế êm cao 7 phân hàng quảng châu',
            'type_id' => 4,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép nam quai ngang PRADA',
            'product_price' => 215000,
            'product_img' => '92490d1943567eab82a4013fe5418a7a.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép nam quai ngang PRADA đế cao su đi êm chân bền đẹp',
            'type_id' => 4,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Prada Vòng Cổ Vòng Cổ Xương Đòn Bạc',
            'product_price' => 85900,
            'product_img' => 'd49974292b911f470593e3f696b397c7.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Prada Vòng Cổ Vòng Cổ Xương Đòn Bạc 925 Cho Nữ Mặt Dây Chuyền Quyến Rũ Vòng Cổ Bằng Thép Không Gỉ Quà Tặng Trang Sức',
            'type_id' => 5,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'LemonBlue PRADA Vòng Cổ',
            'product_price' => 48000,
            'product_img' => 'b6d6e5125d9dd5297d70f95fcc8e3abc.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'LemonBlue PRADA Vòng Cổ Ngược Tam Giác Thép Không Gỉ Mặt Dây Chuyền',
            'type_id' => 5,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Vòng Cổ PRADA Chính Hãng',
            'product_price' => 356400,
            'product_img' => '1e05544e85ebaf9a1d1fad28fcb8912d.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Vòng Cổ PRADA Chính Hãng 2022 Mặt Dây Chuyền Thời Trang Mới Vòng Cổ Quà Tặng Nữ Trang Vòng Cổ Nữ Tinh Tế Thời Trang',
            'type_id' => 5,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Spot Thắt Lưng Chữ Prada Mới',
            'product_price' => 393000,
            'product_img' => 'aa8d8005b8a49b0635c5bfbd0dca718c.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Spot Thắt Lưng Chữ Prada Mới Thắt Lưng Nam Nữ Tam Giác Ngược Quần Short Phối Đồ Thường Ngày Váy Công Sở Thắt Lưng Quần Jean',
            'type_id' => 5,
            'menu_id' => 3
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Prada Khuyên Tai Nữ',
            'product_price' => 80900,
            'product_img' => 'bb3cb07f12a26df5076a58ce1595c85b.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Prada Khuyên Tai Nữ Khuyên Tai Dạng Hạt Hình Tam Giác Bằng Thép Không Gỉ Khuyên Tai Nữ Khuyên Tai Dạng Hạt Xỏ Sụn Trang Sức',
            'type_id' => 5,
            'menu_id' => 3
        ]);
        //////////////////////////////////////////// Chanel ////////////////////////////////////////
        \DB::table('products')->insert([
            'product_name' => 'Quần Ống Rộng Thon Gọn Cạp Cao',
            'product_price' => 126000,
            'product_img' => 'S2b8c7b0073114434863d64f56ae51d09g.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Ống Rộng Thon Gọn Cạp Cao Vải Tweed Thô Hai Hàng Cúc Ca Rô Phong Cách CHANEL Dễ Phối Khí Chất Mẫu Mới Thu Đông Quần Short Nữ',
            'type_id' => 1,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Dài Quét Đất Ống Đứng',
            'product_price' => 394000,
            'product_img' => 'Sa4e55356c05943b8bd90391bca80f4e5p.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Dài Quét Đất Ống Đứng Thường Ngày Hoa Bướm Phong Cách CHANEL Quần Ống Rộng Chống Nắng Dáng Gầy Rộng Rãi Giấm Cảm Giác Rủ Xuống Bề Mặt Satin',
            'type_id' => 1,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Short Thiết Kế Hai Túi',
            'product_price' => 131000,
            'product_img' => 'Sc36bd5eb163546a5982b39d6396033628.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Short Thiết Kế Hai Túi Dáng Gầy Cạp Cao Vải Tweed Phong Cách CHANEL Quần Ống Rộng Nữ Mẫu Mới 2022 Thời Trang Dễ Phối',
            'type_id' => 1,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Bò Tôn Dáng Gầy Ống Đứng',
            'product_price' => 260000,
            'product_img' => 'S3336041502ee4d418937a7dba38165bfP.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Bò Tôn Dáng Gầy Ống Đứng Rộng Rãi Màu Nhạt Phối Vải Tweed Chanel Cửa Hàng Trái Đất Nữ Mẫu Mới Mùa Hè 2022',
            'type_id' => 1,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Sooc Túi Giả Viền Tua Rua',
            'product_price' => 140000,
            'product_img' => 'S75843cdd6fb14d108bdadc6b27461785a.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Sooc Túi Giả Viền Tua Rua Tôn Dáng Gầy Cạp Cao Hai Hàng Cúc Vải Tweed Phong Cách CHANEL Mẫu Mới Thu Đông Quần Ống Rộng Nữ',
            'type_id' => 1,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Khoác Phong Cách CHANEL',
            'product_price' => 157000,
            'product_img' => 'S75cbc2ccb58749bda1a33a805db1133bn.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Khoác Phong Cách CHANEL Trang Phục Nữ Mẫu Mới Cổ V Khí Chất Kiểu Tây Xuân Thu Cho Nữ Áo Len Mẫu Ngắn Áo Cardigan Dệt Kim',
            'type_id' => 2,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Khoác Ngoài Áo Cardigan',
            'product_price' => 156000,
            'product_img' => 'S4b77a0db142c46fb9262688c342d6820U.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Khoác Ngoài Áo Cardigan Mẫu Mỏng Dệt Kim Mẫu Ngắn Màu Trắng Phong Cách CHANEL Mẫu Giống Rose Park So Young Kim Ji Ni SE Jennie',
            'type_id' => 2,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Mặc Trong Mẫu Thu',
            'product_price' => 215000,
            'product_img' => 'Se77588a653cf48ef9483c70d1e7f33aat.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Mặc Trong Mẫu Thu Mặc Phối Dịu Dàng Kiểu Hàn Áo Khoác Phong Cách CHANEL Áo Len Cardigan Dệt Kim Áo Mặc Trong Cảm Giác Thiết Kế Cho Nữ',
            'type_id' => 2,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Len Phong Cách CHANEL',
            'product_price' => 200000,
            'product_img' => 'Sc89d89539886462893a3fbbe23f75bc8u.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Len Phong Cách CHANEL Cổ Áo Vest Gilê Áo Cardigan Gilê DệT Kim Sát Nách Không Tay Phong Cách Hàn Quốc Thu Đông Cho Nữ Áo Khoác Gilê Thời Trang',
            'type_id' => 2,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo T-shirt Nữ Tay Ngắn',
            'product_price' => 124000,
            'product_img' => 'Sab9e77ff1aa543059f2a50516af0e417k.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo T-shirt Nữ Tay Ngắn Mùa Hè Phong Cách CHANEL Cổ Bẻ Rỗng Màu Trắng',
            'type_id' => 2,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Ba Lô Hai Vai Ba Lô Nhỏ Trần Trám',
            'product_price' => 198000,
            'product_img' => 'S05534ebb4402427e851a934da5f12cfea.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Ba Lô Hai Vai Ba Lô Nhỏ Trần Trám Dễ Phối Phong Cách Hàn Quốc Mẫu Mới 2022 Cho Nữ Ba Lô Cặp Sách Dây Xích Mini Phong Cách CHANEL Đeo Chéo Một Bên Vai',
            'type_id' => 3,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Balo chanel, balo nữ hàn quốc',
            'product_price' => 170000,
            'product_img' => '9261727086c179edddabe81e2db6ed37.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Balo chanel, balo nữ hàn quốc chất liệu da pu cao cấp,dây dút cá tính ANHSHOP34 MÃ 26',
            'type_id' => 3,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'TÚI Chanel khoá xoay',
            'product_price' => 200000,
            'product_img' => 'S0f23e27e4f6e43c9acc241cbac7743d8Z.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'TÚI Chanel khoá xoay đan nắp mới Thiết kế fom tui lạ cực đẹp năng động trẻ trung Chất liệu PU x, mềm thích lắm xuất sắc Màu sắc : đen ,trắng',
            'type_id' => 3,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Ba Lô Du Lịch Bằng Vải Oxford',
            'product_price' => 269999,
            'product_img' => 'cdef8e69ecdf6ef1241594a89d07f961.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Ba Lô Du Lịch Bằng Vải Oxford Họa Tiết CHANEL Chống Thấm Nước Cho Nữ',
            'type_id' => 3,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi Đeo Vai Nữ Chanel 2 Quai Xích',
            'product_price' => 330000,
            'product_img' => '087fa881685e7591fcad649f082f6ccc.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi Đeo Vai Nữ Chanel 2 Quai Xích Khóa Xoay New có 2 ngăn riêng biệt, Trần ô truyền thống Hàng bao đẹp từng chi tiết',
            'type_id' => 3,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Trắng CHANEL Da Thật',
            'product_price' => 618000,
            'product_img' => 'Seb0f3c6ec9a045fa8055e65eea549728J.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày Trắng Da Thật Giày Nữ Phong Cách CHANEL Thoáng Khí Mùa Hè 2022 Mẫu Mỏng Giày Đế Bằng Mũi Rộng Thể Thao AJ Tăng Chiều Cao Đế Dày',
            'type_id' => 4,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Một Lớp Ngư Dân Bện Cói',
            'product_price' => 340000,
            'product_img' => 'Sfc42d331f8634ffe98f146582d05209e4.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Giày Một Lớp Ngư Dân Bện Cói Đế Mềm Phối Màu Phong Cách CHANEL Giày Loafer Thường Ngày Xỏ Chân Người Lười Mẫu Mới Năm 2022 Cho Nữ',
            'type_id' => 4,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Bốt Đi Tuyết Phong Cách CHANEL',
            'product_price' => 198000,
            'product_img' => 'S116a74a5c3364912ba8490510218fabct.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Bốt Đi Tuyết Phong Cách CHANEL, Giày Nữ, Giày Bánh Mì, Giày Bông Đông Bắc Giữ Ấm Lót Lông Mẫu Mới Thu Đông 2022',
            'type_id' => 4,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép Lê Phong Cách CHANEL',
            'product_price' => 205000,
            'product_img' => 'Se28c501fa824412795366b76525bb904X.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép Lê Phong Cách CHANEL Xăng Đan Bánh Xốp Đế Dày Mẫu Mới Năm 2022 Đi Bên Ngoài Mùa Hè Cho Nữ Dép Lê Đi Biển Giày Thời Trang Thoải Mái',
            'type_id' => 4,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép Sục Bít Mũi Phong Cách CHANEL',
            'product_price' => 72000,
            'product_img' => 'S7b3559e12aee45a5950a4385fc589c94E.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép Sục Bít Mũi Phong Cách CHANEL Dép Lê Nổi Tiếng Trên Mạng Sành Điệu Instagram Đi Bên Ngoài Mùa Hè Đế Bằng Mẫu Mới Năm 2021 Cho Nữ Thời Trang',
            'type_id' => 4,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dây Lụa Mặt Cười Đầy Kim Cương Phong Cách CHANEL',
            'product_price' => 184000,
            'product_img' => 'S9d744a6e1f94417798af705278320984g.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dây Lụa Mặt Cười Đầy Kim Cương Phong Cách CHANEL Dây Chuyền Xương Đòn Cảm Giác Thiết Kế Nơ Bướm Dây Chuyền Mùa Hè Cho Nữ Trẻ Trung Sang Trọng Đeo',
            'type_id' => 5,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Yoyoclub Dây Chuyền Trái Tim Phong Cách CHANEL',
            'product_price' => 118000,
            'product_img' => 'S73a69eb45e0b4304b2d2a822276a4969T.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Yoyoclub Dây Chuyền Trái Tim Phong Cách CHANEL Phong Cách Hàn Quốc Dây Chuyền Lộ Xương Đòn Trắng Mẫu Nhà Thiết Kế Instagram 4 Màu',
            'type_id' => 5,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Khuyên Tai Thương Hiệu Chanel',
            'product_price' => 39000,
            'product_img' => 'b8c4f1378ad6bba6e5a9a940edaa65dd.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Khuyên Tai Thương Hiệu Chanel Dior Gucci YSL LV Giá Rẻ, Bông Tai Thương Hiệu Cao Cấp Bạc 925 Bảo Hành 30 Ngày',
            'type_id' => 5,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Thắt Lưng Phong Cách CHANEL',
            'product_price' => 55000,
            'product_img' => 'S72c1d3a804124a909264d604b1b70586I.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Thắt Lưng Phong Cách CHANEL Kiểu Pháp Sisijia Phụ Kiện Áo Len Dễ Phối Thời Trang Nữ Thắt Lưng Túi Mini Dây Xích Kim Loại',
            'type_id' => 5,
            'menu_id' => 4
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Phụ Kiện Xích Eo Phong Cách CHANEL',
            'product_price' => 150000,
            'product_img' => 'S87b1973bd3ea49949da80eb09215497bD.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Phụ Kiện Xích Eo Phong Cách CHANEL, Váy Liền Trang Trí Thắt Lưng Dây Xích Kim Loại Instagram Cho Nữ, Áo Len, Quần Âu Dây Xích',
            'type_id' => 5,
            'menu_id' => 4
        ]);
        //////////////////////////// Hermes ////////////////////////////////
        \DB::table('products')->insert([
            'product_name' => 'Quần Bò Hermes',
            'product_price' => 684000,
            'product_img' => 'dfb748767fefb4c876635708d88fee90.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Bò Hermes 2022 Chính Hãng Quần Bò Nam Xu Hướng Phù Hợp, Quần Bò Chất Lượng Cao, Quần Jean Thương Hiệu Cao Cấp',
            'type_id' => 1,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Jean Hermes',
            'product_price' => 782221,
            'product_img' => '418d88e72d0354f3cfd355ce16a94ae4.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Jean Hermes 2022 Quần Denim Nam Chất Lượng Cao Phù Hợp Với Mọi Loại Quần Jean Thương Hiệu Sang Trọng Quần Jean Dáng Ôm Thời Trang',
            'type_id' => 1,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Nam Cạp Cao NO.1Hermes',
            'product_price' => 750000,
            'product_img' => '82a6e67f8c12cc41fc49760a8a9c2180.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Nam Cạp Cao NO.1Hermes Hoàn Toàn Mới 2021, Quần Nam Màu Trơn Cho Nam Quần Ống Đứng Cho Nam Quần Cotton Mỏng',
            'type_id' => 1,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Quần Jean TOP.1Hermes Chính Hãng',
            'product_price' => 941000,
            'product_img' => 'f323248ed88eb66f1121d88ca6d2c685.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Quần Jean TOP.1Hermes Chính Hãng Quần Dài Nam Thường Ngày Đơn Giản Quần Ống Đứng Thoáng Khí Thoải Mái Mùa Hè 2022 Quần Bò',
            'type_id' => 1,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'NO1Hermes Quần Thường Ngày',
            'product_price' => 903000,
            'product_img' => '58faaf5086dcf2a5490e1d0d5ae755c5.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'NO1Hermes Quần Thường Ngày Co Giãn Chính Hãng Quần Nam Hàn Quốc Chất Lượng Cao Quần Ống Thẳng Xuân Hè 2022 Mới Cho Nam',
            'type_id' => 1,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Nỉ Hermes Chính Hãng',
            'product_price' => 604000,
            'product_img' => '3798ea2f27539347520a2472c9548f3e.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Nỉ Hermes Chính Hãng Chính Hãng Thường Ngày Cho Nam Quần Áo Nam Cao Cấp Sang Trọng Áo Dài Tay Mới Xuân/Thu 2022',
            'type_id' => 2,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'ÁO THUN NAM PHONG CÁCH HÀN QUỐC',
            'product_price' => 78000,
            'product_img' => '0453de282c22a16b62e36b11cb3fdf15.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'ÁO THUN NAM PHONG CÁCH HÀN QUỐC, DÁNG THỂ THAO, THỜI TRANG ANBE-Chữ Hermes',
            'type_id' => 2,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Polo TOP.1Hermes',
            'product_price' => 637000,
            'product_img' => '7eac3f495d268907e4344fd0a7029114.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Polo TOP.1Hermes Áo Sơ Mi Ngắn Tay Vải Viscose Áo Polo Chơi Gôn Ngoài Trời',
            'type_id' => 2,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Sơ Mi Mới TOP.1Hermes',
            'product_price' => 869000,
            'product_img' => 'fdde09a4ccca6ef43d6ea25d8007b39c.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Sơ Mi Mới TOP.1Hermes Chính Hãng Áo Sơ Mi Nam Đính Đá Cao Cấp Bộ Com Lê Ôm Sát Phù Hợp Với Mọi Người Áo Sơ Mi Có Ve Áo',
            'type_id' => 2,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Áo Thun Nam Nữ Tay Lỡ Hermes',
            'product_price' => 221000,
            'product_img' => 'afac3f7a9a3ceddd7dbc5f70d5eef9d6.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Áo Thun Nam Nữ Tay Lỡ Áo Phông Form Rộng Cổ Tròn 100% Cotton Dày Mịn Chuẩn Form Hàng Xuất Dư Hermes',
            'type_id' => 2,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi Xách, Cặp Da Hermes',
            'product_price' => 3400000,
            'product_img' => '5239d648d815cbb122d973c9c64646a5.png_400x400q75.png_.jpg',
            'product_description' => 'Túi Xách, Cặp Da Thời Trang Nam Cao Cấp Khóa Số Hermes CHM01 (Nhập khẩu)',
            'type_id' => 3,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi xách nữ đeo chéo Hermes',
            'product_price' => 500000,
            'product_img' => '41579d0bef2dd37ce36a78095f297b20.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi xách nữ đeo chéo túi Hermes Kelly size 20 thời trang cao cấp',
            'type_id' => 3,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi Messenger Hermes Chính Hãng 2022',
            'product_price' => 505000,
            'product_img' => 'bb8ab6a5bafac72048a2d6c30ce38177.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi Messenger Hermes Chính Hãng 2022 Túi Đeo Vai Nữ Chất Lượng Cao Túi Xách Đa Năng Thời Trang Thường Ngày Túi Xu Hướng Thương Hiệu',
            'type_id' => 3,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Balo Laptop Gaming Hermes',
            'product_price' => 505000,
            'product_img' => '6d187262b0e0464320bf074002d95e00.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Balo Laptop Gaming Hermes GT Balo Chất Lượng Cao, Đa Năng Thời Trang Balo Xu Hướng Thương Hiệu',
            'type_id' => 3,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Túi Messenger Hermes Thời trang 2022',
            'product_price' => 540000,
            'product_img' => 'b66abae2994cac219ec4b5fd0ac22017.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Túi Messenger Hermes Thời trang chất lượng cao phù hợp với giời trẻ hiện nay',
            'type_id' => 3,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Lười Hermes Nam',
            'product_price' => 613277,
            'product_img' => '92335913b52beb20bfe31c2179c81569.png_400x400q75.png_.jpg',
            'product_description' => 'Giày Lười Hermes Nam Phong Cách Trẻ Trung Lên Chân Nhẹ Mềm Êm',
            'type_id' => 4,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Giày Cao Gót Hermes',
            'product_price' => 999999,
            'product_img' => 'ed82bf757f60b315270e802daa26b862.jpg_400x400q75.jpg_.jpg',
            'product_description' => '2022 Chất Lượng Cao Hermes Đỏ Da Thật Giày Cao Gót Giày Cho Nữ',
            'type_id' => 4,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép nam da chữ H cao cấp',
            'product_price' => 174000,
            'product_img' => '3db32ca81d8a166d61ac64694d9d9e25.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép nam da chữ H cao cấp da bò đẹp quai ngang quai chéo không quai hậu thời trang trẻ và trung niên CHACO HERMES DEP123',
            'type_id' => 4,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép Lê thời trang Quai Ngang Chữ H',
            'product_price' => 55000,
            'product_img' => 'bfd75cdce03eb5596ae2b696b5c12a9c.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Dép Lê thời trang Quai Ngang Chữ H cực chất HERMES Full Box size 38-42 hottrend 2022 MSP D002',
            'type_id' => 4,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Dép HERMES Unisex Quai Ngang Chữ H',
            'product_price' => 235000,
            'product_img' => '352d9a26689392b35da500a1ea346b3e.jpg_400x400q75.jpg_.jpg',
            'product_description' => '[HÌNH THẬT] Dép HERMES Unisex Quai Ngang Chữ H Cao Cấp, Cực Êm & Bền Thời trang, Thời thượng',
            'type_id' => 4,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'SET DÂY CHUYỀN + HOA TAI TITAN CHỮ H',
            'product_price' => 159000,
            'product_img' => 'S17b8586145f943349aa2a06cdb448d1c6.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'SET DÂY CHUYỀN + HOA TAI TITAN CHỮ H ( HERMES) - TITAN CHUẨN LOẠI 1 SIÊU BỀN MÀU',
            'type_id' => 5,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Bông tai Hermes, khuyên tai chữ H',
            'product_price' => 290000,
            'product_img' => 'S72ec018d6450460f8fcb923d9616c7c4P.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Bông tai Hermes, khuyên tai chữ H đính đá sang trọng phong cách thanh lịch',
            'type_id' => 5,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Thắt Lưng Nam Nữ Cao Cấp Khóa H Thời Trang',
            'product_price' => 282000 ,
            'product_img' => 'fbccd511ebd7163d396f7949ab2ca73d.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Thiết Kế Thương Hiệu TOP.1Hermes Chính Hãng 100%, Thắt Lưng Nam Thắt Lưng Nam Nữ Cao Cấp Khóa H Thời Trang 2022 Rộng 3.8 Cm Thắt Lưng Thường Ngày Phù Hợp Với Tất Cả',
            'type_id' => 5,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Thắt Lưng Hermes 2022 Chính Hãng',
            'product_price' => 280000 ,
            'product_img' => 'cc66f0ca17ee3aad0c86120dafa263d0.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Thắt Lưng Hermes 2021 Chính Hãng Thắt Lưng Thời Trang Hoang Dã Cho Nam Và Nữ, Thắt Lưng Da Chất Lượng Cao, Thắt Lưng Thương Hiệu Cao Cấp',
            'type_id' => 5,
            'menu_id' => 5
        ]);
        \DB::table('products')->insert([
            'product_name' => 'Vòng Cổ No.1Hermes Chính Hãng',
            'product_price' => 188100 ,
            'product_img' => '54ca2dcf8f092a73c2465e400054ec54.jpg_400x400q75.jpg_.jpg',
            'product_description' => 'Vòng Cổ No.1Hermes Chính Hãng, Vòng Cổ Nữ Sang Trọng Vòng Cổ Mặt Dây Chuyền Nhỏ Thời Trang Quà Tặng Trang Sức Vòng Cổ Nữ Vòng Cổ Hợp Thời Trang Chất Lượng Cao',
            'type_id' => 5,
            'menu_id' => 5
        ]);
    }
}
