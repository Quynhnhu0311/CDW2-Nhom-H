<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('blog')->insert([
            'blog_title'=>'Cách phối đồ cho người nam gầy như nào là hợp nhất',
            'blog_description'=>'Đối với nam giới việc phối đồ sao cho đẹp cũng cực kì quan trọng đặc biệt là khi đi làm
            , đi chơi, … Cách phối đồ cho người gầy như nào là thích hợp nhất? Đó cũng chính là câu hỏi chung của rất
            nhiều chàng trai với vóc người hơi ốm. Chính vì thế, dưới đây chúng tôi sẽ cùng các bạn tìm hiểu về cách
            phối đồ cho người gầy nam để có thể phối cho mình những bộ đồ phù hợp nhất.Phái mạnh sẽ thường hay thiên về 
            phong cách đơn giản, càng đơn giản càng tốt. Tưởng chừng như những chiếc áo sặc sỡ, cầu kì, họa tiết to trông
            sẽ rất bắt mắt và phù hợp với người ốm, sẽ giúp chàng trông đầy đặn hơn nhưng thực tế không phải vậy. Họa tiết
            to chỉ khiến những chàng trai với thân hình mảnh khảnh lọt thỏm giữa rừng chi tiết của áo, càng khiến cho khuyết 
            điểm của bản thân thêm phần bị chú ý. Nếu bạn là một người yêu thích họa tiết hãy chọn cho mình những loại trang 
            phục có họa tiết đơn giản, càng nhỏ càng tốt hay như những kiểu đồ caro, sọc ngang sẽ là gợi ý phù hợp cho vóc dáng của bạn.
            Nếu bạn nghĩ rằng áo sơ mi chỉ dành cho những ai có thân hình đầy đặn hơn một chút thì điều đó hoàn toàn sai lầm.
            Sơ mi là dạng iteams mà bất kì chàng trai nào cũng phải có, nhất là đối với đàn ông có dáng người gầy thì càng phải
            có vài chiếc trong tủ đồ. Bạn có thể biến hóa nhiều phong cách khác nhau chỉ với một chiếc áo sơ mi.
            Chẳng hạn như một chiếc sơ mi trắng với quần kaki nâu vàng nhạt, chuẩn luôn soái ca Hàn. 
            Ngoài sơ mi trơn màu, bạn có thêt thử các mẫu sơ mi với họa tiết nhỏ, sơ mi sọc ngang, sọc caro ….
            Với cách phối đồ như vậy trông bạn thật lịch lãm và tạo nên sức hút khó cưỡng với người đối diện 
            Nhiều người gầy sẽ nghĩ rằng mặc quần áo lớn thì người cũng to ra. Nhưng trái lại, quần áo cỡ càng lớn thì càng
            nhấn vào khuyết điểm, người đối diện nhìn vào sẽ có cảm giác như bạn đang bơi trong quần áo vậy.
            Nhớ rằng ” hãy luôn chọn đồ vừa vặn với tỉ lệ cơ thể “, đây là quy tắc quan trọng nhất mà các anh chàng
            có thân hình gầy phải chú ý Đó là những cách phối đồ có lẽ phù hợp nhất dánh cho người gầy mà chúng tôi đã đưa ra, 
            mong bài viết trên sẽ giúp bạn bớt khó khăn hơn trong việc lựa chọn và phối đồ cho mình. Các bạn cũng có thể ghé
             tới shop lựa chọn cho mình những bộ đồ ưng ý nhất',
            'blog_img'=>'cach-phoi-do-cho-nguoi-gay-la-nu231020202101587369.jpg',
            'blog_author'=>'Nguyễn Tấn Dũng'
        ]);
        \DB::table('blog')->insert([
            'blog_title'=>'Chọn mua quần jean nam, sử dụng, bảo quản đồ jean hiệu quả',
            'blog_description'=>'Với một “chuyên gia” đồ jean như bạn, không thể bỏ qua các mẹo vặt, các cách xử lý các lỗi thường
            gặp với quần jean nam. Bài viết được chia sẻ từ kinh nghiệm cá nhân sử dụng quần jean, và các kinh nghiệm hữu ích khác
            được tổng hợp từ các nguồn uy tín trên internet. Chọn quần jean nam phải phù hợp với thân hình, giá cả hợp lý, chất liệu tốt. 
            Những ưu điểm của đồ jean không ai có thể phủ nhận được, mặc đồ jean mang lại cho người mặc một sự năng động, trẻ trung
            hơn. Nhưng, không phải ai cũng hiểu rõ hoàn toàn về quần áo jean. Về quy trình làm quần jean: vải Denim để cắt may thành
            quần jean được dệt từ 2 màu sợi (sợi màu được nhuộm xanh và sợi trắng) bằng công nghệ dệt chéo. Chất liệu nguyên thủy
            để làm vải Denim từ 100% cotton (sợi bông), không màu, nên cần phải nhuộm. Chính vì vậy, quần jean với 100% cotton mặc
            rất thoải mái (sản xuất đầy đủ các bước, quy trình nhuộm đúng chuẩn) nhưng lại rất hay phai màu, nhạt màu sau một thời
            gian sử dụng. Sau này, những quần jean được sản xuất với vải Denim cao cấp từ cotton – spandex giúp quần co giãn tốt hơn, 
            vải mềm, mặc cảm giác thoải mái hơn. Bên cạnh đó, chất liệu mới còn giúp quần giữ màu tốt hơn, lâu bị phai màu hơn.',
            'blog_img'=>'bj004_1_51782956277_oa.jpg',
            'blog_author'=>'Nguyễn Tấn Dũng'
        ]);
        \DB::table('blog')->insert([
            'blog_title'=>'Mặc quần áo để phỏng vấn tìm việc như thế nào?',
            'blog_description'=>'Mặc quần áo để phỏng vấn việc làm như thế nào?  Đối với các bạn sinh viên mới ra trường,
            chọn quần áo để mặc khi đi phỏng vấn việc làm là một chuyện khá khó khăn. Vì ấn tượng đầu về bạn trong mắt
            nhà tuyển dụng rất quan trọng cũng như khả năng, năng lực làm việc của bạn. Chính vì vậy chúng tôi đã tóm tắt
            kinh nghiệm thời trang trong bài viết này giúp các bạn sinh viên có một ấn tượng ban đầu tốt nhất, bằng việc 
            lựa chọn quần áo nam phù hợp. Nếu bài viết này có vẻ quen thuộc, hãy chắc chắn rằng bạn đã đọc qua hết, 
            có những cách mặc đồ mà bào viết chưa đề cập hãy inbox cho chúng tôi nhé. Hầu hết các cuộc phỏng vấn việc 
            làm không yêu cầu phải mặc trang phục theo quy định, điều đó có nghĩa là bạn không cần phải mặc một bộ vest, 
            blazer, cà vạt hay giày tây – Điều bạn cần quan tâm là phải nỗ lực rất nhiều trong lần đầu gặp mặt (phỏng vấn)
            với các cấp trên của mình sau này. Lưu ý,bộ đồ đồng màu sẽ khiến bạn mất điểm khi đi phỏng vấn, đặc biệt là với
            áo sơ mi denim và quần denim. Một cây đen/ trắng từ trên sẽ thể hiện cá tính của bạn nhưng điều đó cũng thể hiện 
            bạn là một người “khó gần” hơn. Nếu bạn không sở hữu một đôi giày tây, đừng bận tâm. Đối với công việc không 
            chuyên nghiệp hoặc bán thời gian, bạn có thể mặc một đôi giày thể thao “thời trang”, hoặc đôi giày vải buộc dây 
            để tạo sự gần gũi, năng động hơn. Chú ý tránh các đôi giày quá cầu kỳ, nhiều chi tiết rối mắt. Hãy dùng một số phụ 
            kiện đơn giản hơn kết hợp với quần áo khi đi phỏng vấn. Sử dụng chúng một cách tự nhiên, không quá phô trương và cũng
            không giấu kín. Hạn chế sử dụng các phụ kiện ánh kim: dây vàng, đồng hồ mạ vàng, nhẫn vàng,…
            Cách mặc đồ, chọn quần áo, phụ kiện cơ bản dành cho các bạn nam sinh viên khi đi phỏng vấn tìm việc là một con số vừa phải,
             mà chúng tôi nghĩ rằng sẽ vừa đủ để ai cũng có thể dễ dàng ghi nhớ. Nếu các bạn quan tâm, chúng tôi sẽ chia sẻ thêm
              về cách phối đồ cụ thể đối với từng loại màu sắc, họa tiết.',
            'blog_img'=>'phongvan.jpg',
            'blog_author'=>'Nguyễn Tấn Dũng'
        ]);
        \DB::table('blog')->insert([
            'blog_title'=>'Tại sao khách hàng chọn quần áo nam hàng Việt Nam xuất khẩu?',
            'blog_description'=>'Theo số liệu do Bộ Lao động-Thương binh và Xã hội tổng hợp từ 63 địa phương, tiền lương bình quân
            của người lao động trong năm 2017 là 6,6 triệu đồng/tháng, tăng 9,3% so với năm 2016 (6 triệu đồng/tháng). Mức tăng lương
            đã cao hơn mức tăng lương tối thiểu vùng của năm 2017 (7,3%). Tuy thu nhập bình quân đã tăng lên, nhưng so với mặt bằng
            chung của các nước đang phát triển thì vẫn đang còn ở mức thấp. Giá một chiếc áo/ quần chính hãng trên store từ một
            triệu trở lên, việc chi tiêu quá nhiều vào quần áo nam hàng hiệu sẽ làm mất cân bằng thu chi của bạn và gia đình, 
            hoặc việc sử dụng quần áo chất lượng kém từ Trung Quốc gây trực tiếp ảnh hưởng đến sức khỏe. Những quần áo nam VNXK
            là một sự lựa chọn hợp lý cho những người tiêu dùng thông thái. Với mức giá cả ổn định, phù hợp với đại đa số khách 
            hàng với mức thu nhập trung bình mà vẫn đảm bảo mẫu mã thời trang, chất lượng cao từ hãng, đầy đủ quy trình sản xuất, 
            hoàn thiện sản phẩm. Thật vậy, dưới đây là một số điều kiện để hàng VNXK vừa đảm bảo chất lượng, giá cả lại hợp lý: Những
            mặt hàng thời trang vnxk cao cấp được nhà máy gia công sản xuất từ vải thừa của hãng, sau đó bán ra thị trường. 
            Những mặt hàng này sẽ không bao gồm các chi phí quảng cáo, thương hiệu đắt đỏ từ hãng. Không bị thuế xuất nhập khẩu từ 
            các nước. Chất lượng đảm bảo: Quần áo nam hàng Việt Nam xuất khẩu tại Hà Nội thường được may bởi chính nhà máy gia công
            cho hãng nên đầy đủ quy trình sản xuất của hãng, chất lượng vải, chất lượng thuốc nhuộm, các quy trình xử lý vải thực
            hiện đầy đủ nên ít tồn dư hóa chất độc hại như hàng quần áo nam giá rẻ. Vì được may từ vải thừa, phụ kiện thừa của hãng
            nên hàng VNXK thường sẽ thiếu các phụ kiện như khóa, khuy, logo may đính quần áo, tag chất liệu xuất xứ, các công ty
            sẽ lấy từ các nguồn khác. Tuy nhiên vẫn đảm bảo tốt chất lượng hàng hóa. Hàng xuất dư xịn (full tem mác): Trước khi 
            hàng đóng vào công chở đi nước ngoài, hải quan sẽ lấy mẫu vài chục chiếc để kiểm tra hàng hóa. Những chiếc quần áo
            xuất xịn này sau đó sẽ chuyển đến shop. Khách hàng có thể tìm mua tại đây những món hàng chính hãng ưng ý nhất!',
            'blog_img'=>'dia-chi-ban-buon-quan-ao-vnxk-tai-ha-noi.jpg',
            'blog_author'=>'Nguyễn Tấn Dũng'
        ]);
        \DB::table('blog')->insert([
            'blog_title'=>'Trong trẻo đầu hạ cùng các thiết kế của Toson',
            'blog_description'=>'Bất kỳ là khoảng thời gian nào, sự thay đổi của thiên nhiên luôn trở thành nguồn cảm hứng không ngừng
            cho rất nhiều lĩnh vực đặc biệt đối với thời trang. Cảm hứng được cho là chủ đạo trong Hè 2022 đó chính là sự trở lại mạnh mẽ,
            tràn đầy năng lượng, sẵn sàng để bứt phá. Đó cũng chính là thông điệp mà Toson muốn gửi gắm trong BST mới. Không chỉ mong 
            muốn truyền tải hình ảnh Quý cô ngọt ngào,thanh lịch, trang nhã, BST mới còn gửi gắm mong muốn về sự trẻ trung, năng động và 
            hiện đại đến các cô nàng. Chất liệu được chọn lựa kỹ càng, lụa,tơ là chủ đạo trong BST này  Đây có lẽ là những chất liệu không 
            còn quá xa lạ đối với các tín đồ yêu thời trang. Chất liệu vải này không chỉ mang đến sự thoải mái, an toàn cho làn da mà còn 
            phù hợp với nhiều trang phục khác nhau và tạo nên sự bay bổng, thanh lịch, điểm nhấn của các trang phục. Đặc biệt, với chất 
            liệu cao cấp này, Toson muốn tôn lên sự  thướt tha, cuốn hút nhưng vẫn nổi bật hình ảnh nhẹ nhàng, nữ tính. Nhằm mang đến 
            cho người diện cảm giác nhã nhặn, thanh lịch nhưng không kém phần hiện đại, tinh tế. Thiết kế đầm hoa không chỉ gây ấn tượng 
            bởi chất vải thoáng mát, dễ chịu, giữ dáng . Một sự kết hợp hoàn hảo từ kiểu dáng suông nữ tính, bồng điệu đà hay chi tiết 
            thắt eo nữ tính,… Không dừng ở đó những gam màu trong thiết kế lần này cũng là một điểm cộng rất lớn. Những gam màu nhẹ 
            đều được Toson tỉ mỉ lựa chọn giúp nâng tầm trang, thần thái của nàng. Nếu nàng vẫn đang đắn đo tìm kiếm một trang phục cho 
            những ngày đầu hạ này. Thì đừng quên tham khảo những thiết kế trên đây của Toson nhé!',
            'blog_img'=>'49149x640-9eefbcfc-6dc2-4b6b-b3c5-d5853d00499f.jpg',
            'blog_author'=>'Nguyễn Tấn Dũng'
        ]);
    }
}
