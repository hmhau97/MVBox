-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 05, 2018 lúc 08:47 SA
-- Phiên bản máy phục vụ: 5.7.17-log
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `seri_num` int(11) DEFAULT NULL,
  `code_num` int(11) DEFAULT NULL,
  `kind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `card`
--

INSERT INTO `card` (`id`, `seri_num`, `code_num`, `kind`) VALUES
(1, 12345678, 12345678, 5),
(2, 123456789, 0, 1),
(3, 123456789, 0, 1),
(4, 2147483647, 0, 1),
(5, 2147483647, 0, 1),
(6, 2147483647, 0, 1),
(7, 2147483647, 0, 1),
(8, 2147483647, 0, 1),
(9, 2147483647, 0, 1),
(10, 2147483647, 0, 1),
(11, 2147483647, 0, 1),
(12, 2147483647, 0, 1),
(13, 2147483647, 0, 1),
(14, 123456788, 0, 0),
(15, 123456788, 0, 0),
(16, 123456788, 0, 0),
(17, 123456789, 0, 5),
(18, 876543210, 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id_cf` int(11) NOT NULL,
  `cf_day` int(11) NOT NULL,
  `cf_week` int(11) NOT NULL,
  `cf_mon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id_cf`, `cf_day`, `cf_week`, `cf_mon`) VALUES
(1, 45, 47, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinda_card`
--

CREATE TABLE `kinda_card` (
  `id` int(11) NOT NULL,
  `Kind` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kinda_card`
--

INSERT INTO `kinda_card` (`id`, `Kind`) VALUES
(1, '20000'),
(2, '50000'),
(3, '100000'),
(4, '200000'),
(5, '500000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphim`
--

CREATE TABLE `loaiphim` (
  `id` int(11) NOT NULL,
  `loaiphim` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphim`
--

INSERT INTO `loaiphim` (`id`, `loaiphim`) VALUES
(1, 'Phim bộ'),
(2, 'Phim lẻ'),
(3, 'Phim chiếu rạp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `name_english` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kind_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `id_loaiphim` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dienvien` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `daodien` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namsanxuat` int(11) NOT NULL,
  `quocgia` int(11) NOT NULL,
  `thoiluong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view_day` int(11) NOT NULL,
  `view_week` int(11) NOT NULL,
  `view_mon` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`id`, `name`, `name_english`, `kind_id`, `id_loaiphim`, `details`, `images`, `poster`, `tag`, `dienvien`, `daodien`, `namsanxuat`, `quocgia`, `thoiluong`, `view_day`, `view_week`, `view_mon`, `view`) VALUES
(1, 'Hậu duệ mặt trời', 'The Descendants Of The Sun', '6,17', 1, 'Yoo Shi Jin là đội trưởng lực lượng gìn giữ hòa bình của Liên Hợp Quốc. Trong khi đó, Kang Mo Yeon là thành viên của tổ chức Bác sĩ không biên giới. Thời gian đầu gặp gỡ và hợp tác, Shi Jin và Mo Yeon thường xuyên xảy ra xung đột. Tuy nhiên về sau, mối quan hệ giữa họ dần được cải thiện. Trải qua nhiều lần xông pha vào chốn hiểm nguy, cả hai đã nhận ra tình cảm dành cho nhau. Chuyện tình của Shi Jin và Mo Yeon là điểm nhấn, hứa hẹn mang đến nhiều cảm xúc thú vị cho người xem.', 'image/hauduecuamattroi.jpg', '', 'Hậu duệ, mặt trời', 'Song Hye Kyo, Kim Ji Won, Song Joong Ki, Lee Kwang Soo, Jin Goo', 'Lee Eung Bok, Kim Won Suk, Kim Eun Sook', 2016, 4, '19 tập', 0, 0, 12, 232),
(2, 'Mây họa ánh trăng\r\n', 'Moonlight Drawn By Clouds', '1,17', 1, 'Phim Mây Họa Ánh Trăng là câu chuyện phim cổ trang truyền hình Hàn Quốc. Một lần vì bức thư tình viết giúp cho khách hàng mà khiến cho cô gái trẻ không thân phận này gặp được Thế tử Hyomyeong .Nhưng hai người hiển nhiên không biết về thân phận thực sự của nhau,thế tử vẫn tưởng cô là đàn ông còn cô vẫn nghĩ thế tử là một khách hàng bình thường.Nhưng rắc rối ập đến khi thế tử Hyomyeong bắt đầu quan tâm cô và các hoạn quan trong triều đình nhận ra điều đó.', 'image/HTV2-PHOTOS-MAY-HOA-ANH-TRANG-1.jpg', '', 'Mây họa, trăng, tình cảm', 'Park Bo Gum, Kim Yoo Jung, Jin Young, Chae Soo Bin, Kwak Dong Yun\r\n\r\n', ' Kim Sung Yoon', 2016, 4, '6', 0, 0, 13, 35),
(3, 'Người tình ánh trăng\r\n', 'Moon Lover', '1,17,11', 1, 'Bộ phim thuộc thể loại cổ trang xoay quanh câu chuyện về một cô gái đến từ tương lai đã gây nên những cuộc nội chiến giữa các hoàng tử dưới thời đại Goryeo. Trong phim Người Tình Ánh Trăng (Moon Lovers) lấy cớ tranh giành tình yêu của cô gái này các chàng hoàng tử đã chính thức công khai tham vọng tranh giành ngai vàng của mình và trong đó vị bát hoàng tử là một ứng cử viên sáng giá nhất cho ngôi vị Hoàng Đế cũng như trong tình yêu', 'image/nguoi-tinh-anh-trang-1472733837.jpg', '', 'Người tình, trăng, lover', 'Nam Joo Hyuk, IU, Kang Ha Neul, Lee Jun Ki, Seohyun, Ji Soo, Baek Hyun', 'Kim Kyu Tae', 2016, 4, '5', 0, 0, 0, 12),
(4, 'Cậu bé rừng xanh\r\n', 'The Jungle Book', '14,17,19,8', 2, 'Phim Cậu bé rừng xanh là phiên bản điện ảnh của chuyến phiêu lưu của Mowgli – một cậu bé mồ côi được đàn chó sói nuôi dưỡng trong rừng già Ấn Độ. Ngày qua ngày, Mowgli cảm thấy mình không còn được chào đón ở mái nhà tự nhiên này nữa, bởi một con hổ hung dữ tên Shere Khan tuyên bố sẽ tiêu diệt những sinh vật có khả năng gây nên hiểm họa, sau khi hắn bị loài người tấn công. Buộc phải rời khỏi chốn dung thân duy nhất, Mogwli dấn bước vào một hành trình khám phá, với sự dẫn dắt của báo đen Bagheera và gấu Baloo. Trên đường đi, Mowgli đã gặp những sinh vật xấu xa: một con trăn tên Kaa có ánh mắt thôi miên, con khỉ đột King Louie với khả năng nói tiếng người lưu loát. Chúng cố ép buộc Mowgli hé lộ công thức tạo ra “bông hoa đỏ” lập lòe, được gọi là Lửa.', 'image/1694958144Cau-be-rung-xanh.jpg', '', 'Cậu bé, rừng, xanh', 'Scarlett Johansson, Idris Elba, Ben Kingsley, Giancarlo Esposito, Lupita Nyong\'o, Trịnh Bội Bội', 'Jon Favreau', 2016, 2, '60 phút', 0, 0, 0, 20),
(5, 'Chú chuột đầu bếp\r\n', 'Ratatouille', '8,17,19', 2, 'Remy là một chú chuột có lòng yêu thích ẩm thực và mong muốn được đến Paris để thực hiện ước mơ trở thành đầu bếp nổi tiếng. Tuy bị gia đình ngăn cản nhưng cuối cùng Remy cũng đặt chân được đến kinh đô ánh sáng và bắt đầu cuộc phiêu lưu của mình. Tại đây, Remy quen Linguini - cậu con trai của thần tượng đồng thời là bếp trưởng nổi tiếng của nhà hàng Gusteau. Remy và Linguini trở thành cặp bài trùng trong việc chế biến các món ăn mới lạ, đồng thời chứng mình quan niệm của Gusteau: \"Ai cũng có thể nấu ăn ngon\".', 'image/chu-chuot-dau-bep.jpg', '', 'chuột,ăn,bếp,mouse', 'Brad Garrett, Lou Romano, Patton Oswalt', 'Brad Bird, Jan Pinkava', 2016, 2, '80 phút', 0, 0, 0, 80),
(6, 'Công chúa tóc dài\r\n', 'Tangled Ever', '8,17', 2, 'Tangled Ever After bắt đầu bằng không khí vui tươi tại lễ cưới giữa công chúa Rapunzel và Flynn cũng sắp bắt đầu. Tuy nhiên, khi Pascal và Maximus, hai người mang hoa và nhẫn cưới biến mất khỏi đoàn. Một cuộc tìm kiếm tức tốc được tiến hành. Trong khi tuyệt vọng tìm kiếm chiếc nhẫn trước thời điểm mọi người nhận ra sự biến mất của họ, hai người đã trượt lại phía sau một đoạn đường dài với vô vàn rắc rối và những điều hài hước. Liệu Pascal và Maximus có kịp trở về đúng thời điểm diễn ra hôn lễ cùng chiếc nhẫn?Nếu bạn vẫn còn đang tiếc nuối và tò mò về hạnh phúc của nàng công chúa tóc dài Rapunzel cùng anh chàng Flynn Rider thì Tangled Ever After sẽ là câu trả lời hoàn hảo cho bạn.', 'image/cong-chua-toc-dai.jpg', '', 'công chúa, tóc', 'Mandy Moore, Zachary Levi, Alan Dale', 'Nathan Greno, Byron Howard ', 2012, 2, '86 phút', 0, 0, 0, 110),
(7, 'Ngôi nhà bay', 'Up', '8,14,19', 2, 'Ông già Carl quyết hoàn thành chuyến đi ấp ú cả đời tới Thác thiên đường bằng ngôi nhà kết hàng nghìn quả bóng bay. Ngay khi vừa \"cất cánh\", ông phát hiện ra người đồng hành bất đắc dĩ: Cậu bé hướng đạo sinh Russell lắm mồm. Kể từ đây, cuộc phiêu lưu kì thú của 2 ông cháu diễn ra với biết bao bất ngờ cùng nguy hiểm rình rập...', 'image/up.jpg', '', 'up,bay,nhà', 'Carl', 'Peter Docter', 2009, 2, '120 phút', 0, 0, 0, 50),
(8, 'Sóc siêu quậy\r\n', 'Alvin And The Chipmunks', '5,8,19', 2, 'Sóc Chuột Du Hí 2015 là câu chuyện tiếp nối về ban nhạc sóc chuột gồm 6 thành viên mang tên Chipmunks and Chipettes. Câu chuyện của phần 3 phim hay này xoay quanh chuyến du ngoạn trên biển của nhóm nhạc sóc chuột cùng chú quản lý Dave trước khi tham gia show diễn quốc tế. Thế nhưng, thay vì tận hưởng kỳ nghỉ 5 sao trên du thuyền sang trọng, cả nhóm sóc chuột cầm đầu là Alvin lại quậy phá gây bao thiệt hại. Điều này khiến quản lý Dave vô cùng giận dữ, cấm túc cả nhóm trong phòng và lại càng khiến Alvin quyết tâm đào thoát. Vô tình, cậu nhóc dẫn cả nhóm đến một hoang đảo. Và tại đây, nhóm sóc chuột phải đối mặt với những nguy hiểm chưa từng trải qua. Liệu phim sẽ diễn biến thế nào mời các bạn cùng theo dõi bộ phim Siêu Quậy 4 và có những giây phút xem phim online tuyệt vời!', 'image/soc-sieu-quay.jpg', '', 'sóc,quậy', 'Justin Long, Bella Thorne, GadKaley Cuoco-Sweeting', 'Walt Becker', 2015, 2, '70 phút', 0, 0, 0, 25),
(9, 'Điều kì diệu phòng giam số 7\r\n', 'Miracle in Cell No.7\r\n', '5,17', 3, 'Miracle In Cell No.7 là bộ phim tình cảm gia đình xoay quanh nhân vật Yong Goo bị kết án tử hình vì bị kẻ xấu vu cho tội sát nhân. Ước mơ cuối cùng của ông là được nhìn thấy con gái mình - Ye Seung . Tuy nhiên, cánh cửa nhà tù nơi ông đang bị giam giữ lại không bao giờ mở cho người nhà vào thăm. Vì vậy, những người cùng phòng giam đã lên kế hoạch để 2 cha con họ có thể hội ngộ...', 'image/dieu-ky-dieu-trong-phong-giam-so-7-cham-toi-trai-tim.jpg', 'image/miracle in cell no 7 wallpaper.jpg', 'giam,7,kì diệu', 'Ryu Seung-ryong, Park Shin-hye, Gal So-won, Jung Jin-young', 'Lee Hwan-gyeong', 2013, 4, '120 phút', 0, 0, 0, 120),
(10, 'Chuyến tàu sinh tử\r\n', 'Train to Busan\r\n', '4,17', 3, 'Train To Busan - Chuyến Tàu Sinh Tử 2016 lấy bối cảnh đất nước Hàn bị tấn công bởi một loại virus bí ẩn, biến con người thành những xác sống hung hăng, khát máu. Có mặt trên chuyến tàu từ Seoul tới Busan là một người cha cùng con gái, hai vợ chồng chuẩn bị đón đứa con đầu lòng và một số cô cậu học sinh cấp 3. Khi đại dịch xác sống bất ngờ bùng phát, họ không còn cách nào khác ngoài đương đầu với nó để bảo vệ những người thân yêu của mình. Hành trình 453km từ Seoul tới vùng an toàn Busan bỗng trở thành cuộc chiến khốc liệt để sinh tồn.', 'image/train-to-busan.jpg', 'image/train-to-busan-official-poster.jpg', 'busan,sinh tử', 'Yoo Gong, Yu-mi Jeong, Dong-seok Ma', 'Yeon Sang Ho', 2016, 4, '80 phút', 0, 0, 0, 61),
(11, 'Mỹ nhân ngư\r\n', 'The Mermaid\r\n', '4,5,17', 3, 'Mỹ Nhân Ngư 2016: Bộ phim xoay quanh câu chuyện về chiếc tàu không may gặp nạn trên biển. Mỹ Nhân Ngư lúc đó xuất hiện và đem lòng yêu chàng thanh niên tuấn tú trên con tàu đó. Tác phẩm sẽ vẽ nên bức tình ca động lòng người giữa con người và cá.', 'image/my-nhan-ngu.jpg', 'image/my-nhan-ngu-the-mermaid.jpg', 'mỹ nhân', 'Đặng Siêu, Mạc Văn Úy, La Chí Tường, Trịnh Thiếu Thu', 'Châu Tinh Trì', 2016, 3, '80 phút', 0, 0, 0, 46),
(12, 'Thiên tài lừa đảo\r\n', 'The Man Who Sells the River\r\n', '4,5', 3, 'Kim Seon-dal (Yoo Seung-ho thủ vai) – kẻ bịp bợm thông minh và điển trai, để lại tên tuổi của mình tại khắp mọi nơi hắn từng đi qua với những chiêu trò ngày một táo tợn hơn. Tay lừa đảo huyền thoại này vẫn luôn tìm kiếm cho mình một màn trình diễn ngoạn mục nhất mọi thời đại.Với sự hỗ trợ từ bậc thầy cải trang Bowon, bà bói chuyên tống tiền khách hàng Madame Yoon và tên lừa đảo học việc Gyun, Seon-dal dẫn đầu bộ tứ lừa đảo “vi diệu” nhất Joseon. Không thể bỏ qua thứ hàng hóa có giá nhất thời điểm bấy giờ – thuốc lá, bọn chúng khám phá ra rằng, kẻ quyền lực đứng đằng sau những thương vụ thuốc lá chính là Sung Dae-ryun. Quyết tâm cho Sung vào tròng, nhóm lừa đảo bá đạo do Kim Seon-dal dẫn đầu đã… rao bán sông Daedong và biến món tài sản vô chủ này trở nên có giá hơn bao giờ hết!', 'image/thien-tai-lua-dao.jpg', 'image/Seondal The Man Who Sells the River.png', 'lừa đảo', 'Chang-Seok Ko, Chung Trấn Đào', 'Dae-Min Park', 2016, 4, '78 phút', 0, 0, 0, 20),
(13, 'Biệt đội săn ma\r\n', 'Ghostbusters\r\n', '4,6,10', 2, 'Ghostbusters (2016) là một phim làm lại sau thành công của bộ phim hài siêu nhiên năm 1984. Đây là phiên bản làm mới với nội dung phim xoay quanh các sự kiện ma quái ngày một xảy ra nhiều hơn, một sinh viên Đại học Columbia cùng người bạn chuyên đuổi tà mà của mình và đối tác kinh doanh của bạn, thêm cả một nhân viên MTA đã lập thành nhóm diệt trừ ma quỷ, bảo vệ thành phố New York.', 'image/Bietdoibatma.png', '', 'ma', 'Zach Woods, Kristen Wiig, Ed Begley jr., Charles Dance,\r\nJohn Milhiser, Melissa Mccarthy\r\n', 'Paul Feig', 2016, 2, '80 phút', 0, 0, 0, 45),
(14, 'Tiếng than\r\n', 'The Wailing\r\n', '4,17,20,12', 2, 'Bối cảnh phim ở một ngôi làng trong núi, một nơi xa xôi hẻo lánh của Hàn Quốc. Tuy cuộc sống nơi đây không giàu có xa hoa nhưng vẫn luôn yên bình, dường như không hề có gì nguy hiểm. Mãi cho đến một buổi tối, trong làng xảy ra một vụ án giết người, phá vỡ khung cảnh bình yên từ trước đến nay. \r\nCảnh sát Jong Go (Kwak Do Won) và đồng nghiệp nhanh chóng đến hiện trường để điều tra vụ án. Anh cho rằng đây là một vụ cố ý giết người, tuy nhiên người trong làng lại rỉ tai nhau, kẻ bị nghi ngờ nhất là một người Nhật Bản (Jun Kunimura) không biết xuất hiện trong làng từ bao giờ. Người Nhật Bản này biết một loại tà thuật nào đó, và ông ta dùng thủ đoạn tà ác để nguyền rủa người khác. Sau đó những vụ án chết người kì lạ lại liên tiếp xảy ra, thậm chí cả con gái của Jong Go cũng gặp nguy hiểm. Roi vào đường cùng, Jong Go đành phải cầu cứu tới thầy pháp Il Gwang (Hwang Jung Min), để anh ta hóa giải lời nguyền cho dân làng và con gái.\r\n', 'image/Tieng-Than-The-Wailing-2016-poster.jpg', '', 'than', 'Jong-Goo, II-Gwang, Jun Kunimura', 'Na Hong-Jin', 2014, 4, '60 phút', 0, 0, 0, 89),
(15, 'Quá nhanh quá nguy hiểm 7\r\n', 'Fast and Furious 7\r\n', '6,10', 3, 'Phim Furious 7 (Quá Nhanh Quá Nguy Hiểm 7) là phần 7 của loạt series Fast & Furious nổi tiếng. Ở cuối phần trước, tưởng chừng như mọi chuyện đã kết thúc, và mở ra một cuộc sống bình lặng, khi cả nhóm đã tiêu diệt được Owen Shaw. Thì trong phần này, sự xuất hiện của Deckard Shaw, người đã giết chết Han, và khiêu chiến với Dominic Toretto, để trả thù cho em trai Owen Shaw của mình, đã làm thay đổi tất cả. Khiến cho cuộc đụng độ giữa 2 băng nhóm lên đến đỉnh điểm. ', 'image/fast-and-furious-7.jpg', 'image/fast.jpg', 'nguy hiểm', 'Paul Walker, Dwayne Johnson, Vin Diesel', 'James Wan', 2013, 2, '130 phút', 0, 0, 0, 67),
(16, 'Thợ máy\r\n', 'Mechanic: Resurrection\r\n', '6,12,15', 2, 'Phim Mechanic: Resurrection (2016): Sát thủ nguy hiểm Arthur Bishop (Jason Statham) muốn gác lại quá khứ của mình và bắt đầu một cuộc sống mới. Nhưng khi kẻ thù đáng gờm nhất của Arthur bắt cóc bạn gái anh, Arthur buộc phải thực hiện 3 vụ ám sát và làm cho chúng chỉ giống như những tai nạn.', 'image/thomay.jpg', '', 'máy', 'Jason Statham, Jessica Alba, Michelle Yeoh', 'Dennis Gansel', 2014, 2, '100 phút', 0, 0, 0, 89),
(17, 'Sát thủ: Mật danh 47\r\n', 'HITMAN: AGENT 47\r\n', '18,15,6', 2, 'HITMAN: AGENT 47 tập trung vào một sát thủ ưu tú đã được biến đổi gen từ lúc thụ thai. Anh ta là cỗ máy giết người hoàn hảo và chỉ được biết đến bởi hai chữ số xăm trên lưng mình. Anh là đỉnh cao thành quả nghiên cứu và nhân bản của 46 đặc vụ trước. \r\n\r\nVới sức mạnh chưa từng thấy, tốc độ, sức chịu đựng và sự thông minh, mục tiêu mới nhất của anh là một công ty lớn có kế hoạch để giải mã những bí mật của Agent 47 để tạo ra một đội quân giết người khủng khiếp. \r\n\r\nHợp tác với một người phụ nữ trẻ, những người có thể giữ bí mật để vượt qua kẻ thù lớn mạnh, Đặc vụ 47 sẽ đối mặt với nguồn gốc và kẻ thù nguy hiểm nhất của mình.\r\n', 'image/sat-thu-mat-danh-47-1.jpg', '', '47', 'Zachary Quinto, Rupert Friend', 'Aleksander Bach', 2013, 2, '110 phút', 0, 0, 0, 42),
(18, 'Chiến nào ma kia\r\n\r\n', 'Let’s Fight, Ghost', '4,17,20', 1, 'Let’s Fight, Ghost là bộ phim được chuyển thể từ một bộ webtoon nổi tiếng cùng tên của tác giả Im In Su. Nội dung của câu chuyện kể về chàng trai trẻ tuổi tên là Park Bong Pal. Anh có có thể nhìn thấy, trò chuyện và thậm chí là chạm được vào… hồn ma. Bong Pal đã sử dụng khả năng đặc biệt này để hoạt động như một pháp sư, từ đó kiếm thêm thu nhập.\r\n\r\nTrong quá trình “làm việc”, Bong Pal gặp được Hyun Ji, là một hồn ma nữ sinh trung học chết vì tai nạn giao thông. Từ đây, Hyun Ji trở thành bạn đồng hành trên con đường trừ ma của Bong Pal. Chuyện tình giữa người và ma từ đó xảy ra nhiều tình huống dở khóc, dở cười. Nhưng nhờ vậy, họ hiểu nhau và yêu thương nhau hơn.\r\n', 'image/Chiennaomakia.jpg', '', 'ma', 'Taecyeon, Kim So-Hyun, Kwon Yool', 'Park Joon-Hwa', 2016, 4, '16 tập', 0, 0, 0, 24),
(19, 'Chính chúng tôi\r\n\r\n\r\n', 'This is Us', '17,4', 2, 'This is Us là câu chuyện về một nhóm người có cùng chung một ngày sinh nhật nhưng số phận lại không hề giống nhau chút nào. Nội dung đơn giản nhưng được miêu tả chân thực và quyến rũ đến bất ngờ. Một series tình cảm nhẹ nhàng với cốt truyện đơn giản nhưng dễ chạm vào lòng người xem...', 'image/Chinhchungtoi.jpg', '', 'sinh nhật', 'Mandy Moore, Milo Ventimiglia, Chrissy Metz', 'Ventimiglia', 2009, 2, '80 phút', 0, 0, 0, 17),
(20, 'Người hầu gái\r\n', 'The Housemaid\r\n', '1,13,16,17', 2, 'Được chuyển thể từ cuốn tiểu thuyết của nhà văn Anh Sarah Waters \"Fingersmith\" với bối cảnh thời Victoria, The Handmaiden đưa người xem quay trở lại thời kì thuộc địa ở Nhật Bản và Hàn Quốc những năm 1930. \r\n\r\nĐứa trẻ mồ côi hành nghề móc túi Nam Sook Hee (Kim Tae Ri) được một tên lừa đảo người Hàn giả danh bá tước Nhật Bản Fujiwara (Ha Jung Woo) gửi tới làm người hầu gái cho người thừa kế giàu có Hideko (Kim Min Hee), nhằm dụ dỗ nữ quý tộc kết hôn với hắn. \r\n\r\nMột khi kế hoạch thành công, vị \"bá tước\" sẽ gửi Hideko tới một nhà thương điên ở Nhật, sau đó cao chạy xa bay với số của cải mà hắn chiếm đoạt được từ nàng. Tuy nhiên, điều mà Fujiwara không ngờ tới đó là hai người phụ nữ nảy sinh tình cảm với nhau, và kế hoạch của hắn bắt đầu bị rẽ hướng.\r\n', 'image/Nguoihaugai.jpg', '', 'hầu gái', 'Kim Tae-Ri, Kim Min-Hee, Moon So-Ri', 'Park Chan-Wook', 2008, 4, '120 phút', 0, 0, 0, 89),
(21, 'Vòng lặp\r\n\r\n', 'ARQ ', '4,10,18', 2, 'Bị mắc kẹt trong một phòng thí nghiệm một thời gian, một cặp vợ chồng mất phương hướng phải quyết chiến với nhóm cướp đeo mặt nạ đang cố lấy đi một nguồn năng lượng mà họ mới chế tác để có thể cứu nhân loại đang bị dịch bệnh lan tràn....', 'image/Vonglap.jpg', '', 'vòng lặp', 'Adam Butcher, Jacob Neayem, Robbie Amell', 'Tony Elliott', 2007, 2, '98 phút', 0, 0, 0, 67),
(22, 'Cuộc chiến trên sao hỏa\r\n', 'Terra Formars\r\n', '4,10,15,6', 2, 'Năm 2599, công cuộc di dân lên sao Hỏa của loài người đã chuẩn bị suốt 500 năm cuối cùng cũng có bước tiến vượt bậc. Trước đó, các nhà khoa học đưa rêu và gián để cải thiện môi trường sống trên sao Hỏa. \r\nHiện tại, để tránh án tử hình, Shokichi Komachi và bạn từ thuở nhỏ Akita Nanao không thể từ chối yêu cầu của tiến sĩ Honda, cùng với Jin Muto, Ichiro Hiruma, Asuka Moriki, Keisuke Dojima và những người không cùng thân phận và hoàn cảnh cùng nhau vào phi thuyền lên sao Hỏa. Sau khi đến nơi, họ đã rất ngạc nhiên khi thấy rằng lũ gián đã tiến hóa thành một sinh vật cao lớn mạnh mẽ và tấn công họ.\r\n', 'image/Cuocchientrensaohoa.jpg', '', 'sao hỏa', 'Rinko Kikuchi, Rila Fukushima', 'Takashi Miike', 2015, 5, '108 phút', 0, 0, 0, 78),
(23, 'Chim sẻ\r\n\r\nChim sẻ\r\n\r\n', 'Sparrow', '3,6,20', 2, 'Bộ phim Chim sẻ với đề tài gián điệp nội dung kể về đặc công Trần Thâm là người của tổ chức hoạt động ngầm của Đảng CS, nhận lệnh xâm nhập vào Tổng bộ đặc công chính phủ Uông Ngụy , làm việc bên cạnh Tất Trung Lương, thông qua một cán bộ ủy phái bí mật biệt danh Ma tước (chim sẻ), thành công thực hiện đánh cắp kế hoạch Quy Linh của chính phủ Uông Ngụy…', 'image/Chisme.jpg', '', 'chim sẻ', 'Châu Đông Vũ, Lý Dịch Phong, Trương Lỗ Nhất', 'Kim Sâm, Châu Viễn Chu', 2014, 3, '120 phút', 0, 0, 0, 68),
(24, 'Lính bắn tỉa: Truy tìm nội gián\r\n', 'Sniper: Ghost Shooter\r\n', '3,6,21', 2, 'Lính bắn tỉa Brandon Beckett (Chad Michael Collins) và Richard Miller (Billy Zane) được giao nhiệm vụ bảo vệ đường ống dẫn khí ga khỏi bọn tấn công khủng bố. Khi chiến đấu với kẻ địch, một số lính bắn tỉa đã chết bởi một tay súng vô hình, kẻ biết chính xác vị trí của họ. Những căng thẳng này đã dấy lên sự nghi ngờ trong hệ thống an ninh. Có ai đó là nội gián? Có phải nhiệm vụ này chỉ là để che giấu một kế hoạch khác hay không? Liệu có phải Colonel đứng sau tất cả?', 'image/poster.medium.jpg', '', 'lính', 'Nigel Barber, Nick Gomez, Chad Michael Collins', 'Don Michael Paul', 2008, 2, '108 phút', 0, 0, 0, 78),
(25, 'Kỳ nghỉ kinh hoàng\r\n\r\n', 'Holidays', '4,6,7,14,21', 2, 'Holidays là bộ phim xoay quanh câu truyện về một chuỗi các phim đưa những điều đặc biệt đen tối vào những ngày nghỉ phố biến và được yêu thích nhất bằng việc thách thức phong tục tập quán, truyền thống và đạo giáo. Phim thuộc thể loại kinh dị, xen lẫn các âm thanh rùng rợn làm người xem sợ hãi tột cùng, nhưng tạo nên sức thu hút vô cùng. \r\nNội dung phim nói về những kì nghĩ trong năm, lễ tình nhân, lễ giáng sinh, lễ năm mới... và những sự việc sẽ xảy ra, những việc ghê sợ luôn xảy ra, và xảy ra ngày càng nhiều hơn, làm cho mọi người rất sợ hãi, họ phải làm gì để thoát khỏi những ám ảnh này đây? Làm sao để chống lại một thế lực đen tối đó?\r\n', 'image/kynghikinhhoang.jpg', '', 'nghỉ', 'Lorenza lzzo, Seth Green, Harley Quinn Smith', 'Green', 2013, 2, '120 phút', 0, 0, 0, 34),
(26, 'Sự thanh trừng 3: Năm bầu cử\r\n\r\n', 'The Purge: Election Year\r\n', '3,6,20', 2, 'Sự Thanh Trừng 3 là phần kết thúc cho series kinh dị trứ danh, kịch bản vẫn xoay quanh một đêm Thanh trừng mới, khi một nữ chính trị gia mẫn cán bị săn lùng bởi bọn sát thủ mang mặt nạ cùng những kẻ thù biến chất muốn ngăn ngừa cô đắc cử tổng thống.\r\nNgoài ra, yếu tố chính trị trong phần này cũng được đào sâu nhiều hơn, không còn là những cuộc chém giết và trả thù quy mô nhỏ lẻ nữa. Kết cục của phần cuối cũng sẽ quyết định được liệu “Ngày thanh trừng” có chấm dứt hoàn toàn hay không, đồng thời những kẻ giật dây tội ác trong hai phần trước cũng sẽ lộ mặt.\r\n\r\nPhần một của loạt phim ra mắt lần đầu năm 2013 đã khiến cộng đồng mê phim kinh dị “dậy sóng”, khi mang trong mình một kịch bản vô cùng sáng tạo. Tác phẩm đưa ra một viễn cảnh giả định, khi nước Mỹ gần như dẹp sạch hoàn toàn mầm móng tội ác trong mỗi con người. Để điều này khả thi, vào một đêm duy nhất trong mỗi năm, người dân được phép thực hiện mọi hành vi tàn ác như cướp của, cưỡng hiếp, giết người,… tất cả đều hợp pháp!\r\n', 'image/Suthanhtrung.jpg', '', 'thanh trừng', 'Frank Grillo, Elizabeth Mitchell', 'James Demonaco', 2012, 2, '120 phút', 0, 0, 0, 14),
(27, 'Tiểu Đội Vịt Trời', 'Quackerz', '8,5,4', 2, 'Tiểu Đội Vịt Trời là cuộc chiến giữa vịt và loài người để giành lấy một vị trí dưới ánh mặt trời.', 'image/quackerz.jpg', '', 'vịt', 'Jesse Corti, Michael Gross, Enn Reitel, Robbie Daymond, Mark DeCarlo', 'Viktor Lakisov', 2016, 2, '81 phút', 0, 0, 1, 21),
(28, 'Điệp viên không không thấy 3', 'Johnny English 3: Strikes Again', '6,7', 2, 'JOHNNY ENGLISH: TÁI XUẤT GIANG HỒ là phần thứ ba của loạt phim hài Johnny English, với Rowan Atkinson trong vai một gã bỗng dưng trở thành một điệp viên bí mật. Cuộc phiêu lưu mới bắt đầu khi một vụ điều tra hệ thống an ninh mạng cho thấy danh tính của tất cả các điệp viên đang hoạt động tại Anh, và Johnny là hy vọng cuối cùng để điều tra bí mật ấy.   Dù được biết là một điệp viên nghỉ hưu nhưng đây là lần đầu tiên gã giang hồ này bắt tay động với sứ mệnh tìm kiếm kẻ tấn công. Là một người với kỹ năng ít ỏi và năng lực hạn chế, Johnny English có phải vượt qua được những thách thức trong thời buổi công nghệ hiện đại để hoàn thành sứ mệnh này thành công hay không? ', 'uploads/diepvienkhongkhongthay3.jpg', '', 'điệp viên, jonny english', 'Kevin Eldon, Rowan Atkinson, Emma Thompson,  Adam James', 'David Kerr', 2018, 2, '89 phút', 0, 0, 1, 90),
(29, 'Gia Đình Simpsons', 'The Simpsons Movie', '8,19', 2, 'Khi Homer sơ ý làm ô nhiễm dòng nước bởi chất thải độc hại từ hầm ủ của mình, thị trấn Springfield bị tổ chức \"Bảo vệ môi trường\" cách ly với thế giới bên ngoài bằng 1 lồng kính khổng lồ. Liệu Homer có sửa chữa sai lầm kịp khi mà nơi gia đình Simpson ở sắp sửa bị tiêu hủy bởi lệnh của tổng thống Schwarzenegger?', 'image/simpsons_movie_ver7_xlg.jpg', '', 'thiếu nhi', 'Julie Kavner, Dan Castellaneta, Nancy Cartwright', 'David Silverman', 2007, 2, '86 phút', 0, 0, 1, 6),
(30, 'Justin Và Hiệp Sĩ Quả Cảm', 'Justin and the Knights of Valour', '8,19,17', 2, 'Justin AnThe Knights Of Valour là bộ phim hoạt hình dễ thương và xúc động về tình bạn, cái tôi và lòng dũng cảm của Justin từ lúc là một cậu bé bồng bột cho đến khi trở thành chàng trai và hiệp sĩ thực thụ. Là một câu chuyện về những người trẻ, luôn muốn tự mình đứng trên đôi chân của chính mình và không chịu khuất sau tấm áo quá lớn của gia đình. Đồng thời đan xen là những chuyện tình cảm tuổi mới lớn, thứ tình cảm tinh quái ấy đơn giản nhưng đôi khi làm mọi thứ rối tung. Đây thật sự sẽ là lựa chọn hoàn hảo cho những ngày cuối tuần ấm áp bên gia đình và bạn bè.', 'image/justin-and-the-knights-of-valour-poster.jpg', '', 'hiệp sĩ', 'Mark Strong, Freddie Highmore, Saoirse Ronan', 'Manuel Sicilia', 2013, 2, '64 phút', 0, 0, 0, 6),
(31, 'Khi Chủ Vắng Nhà', 'The Secret Life of Pets', '8,19', 3, 'Chuyện phim lấy bối cảnh một khu chưng cư giữa Manhattan náo nhiệt, phồn vinh – nơi các thú cưng thường có nhiều thời gian rảnh sau khi chủ rời nhà đi làm. Thay vì thấy cô đơn, chúng coi đây là cơ hội để hưởng thụ cuộc sống, tận hưởng cảm giác', 'image/The-Secret-Life-of-Pets-movie-poster.jpg', 'image/secret_life_of_pets.jpg', 'Thú cưng', 'Jenny Slate, Kevin Hart, Lake Bell, Louis C.K., Ellie Kemper', 'Chris Renaud', 2016, 2, '84 phút', 0, 0, 1, 57),
(32, 'Đại sư huynh', 'Big brother', '6, 5, 17', 2, 'Một giáo viên trung học mỗi ngày đều đặn tới trường gõ đầu trẻ cho đến một hôm…cậu học sinh do anh chủ nhiệm dính vào rắc rối với một băng đảng xã hội đen và bị bắt cóc. Đó cũng là lúc bí mật của“anh” thầy trước giờ luôn hiền lành, hết mực yêu thương học sinh và có tâm với nghề bị bộc lộ. Có vẻ như quá khứ máu lửa không buông tha “anh” thầy mà buộc anh phải trở lại con người xưa nhưng có khác là lần này không phải chiến đấu cho bản thân anh, mà cho những đứa trẻ mà anh luôn xem chúng như những đứa em trai.', 'uploads/daisuhuynh.jpg', '', 'đại sư huynh', 'Chung Tử Đơn, Jai Day, Trần Kiều Ân, ', 'Kan Ka Wai', 2018, 3, '101 phút', 0, 0, 1, 8),
(33, 'Ác quỷ ma sơ ', 'The Nun', '12', 2, 'The Nun (Ác Quỷ Ma Sơ) Lấy bối cảnh một tu viện thuộc Romania năm 1952, trước những sự kiện diễn ra trong \"The Conjuring\" và \"Annabelle\". Sau cái chết kỳ dị và bí ẩn của một nữ tu trẻ ở tu viện, một linh mục với quá khứ ám ảnh và một mục sư chưa thực hiện lời tuyên thệ cuối cùng được Vatican cử đến để điều tra sự việc.   Họ đã cùng nhau khám phá ra một sự thật khủng khiếp. Không chỉ gặp nguy hiểm đe dọa mạng sống, cả hai còn phải đối mặt với sự đe dọa về đức tin lẫn linh hồn trước một thế lực tàn độc đội lốt một nữ tu ma quỷ.', 'uploads/acquymaso.jpg', '', 'ác quỷ', 'Demian Bichir, Taissa Farmiga, Jonas Bloquet, Bonnie Aarons', 'Corin Hardy', 2018, 2, '96 phút', 0, 0, 1, 10),
(34, 'Thám tử conan movie 22', 'Connan movie 22', '8,17,19', 2, 'Conan Movie 22 xoay quanh nhân vật Tooru \"Zero\" Amuro và nghi vấn cảnh sát trưởng Kuroda là một trong những thành phần của tổ chức áo đen.  \"Edge of Ocean\", một cơ sở mới của Vịnh Tokyo sẽ là nơi tổ chức Hội nghị Thượng đỉnh Tokyo. Hội nghị sẽ được tổ chức vào ngày 1/5 và có tới 22.000 cảnh sát được huy động, nhưng một vụ nổ bom cực lớn đột ngột xảy ra tại cơ sở siêu hoành tráng này! Tại nơi đó, vào lúc xảy ra vụ việc, lại nhìn thấy bóng dáng của Amuro Tooru thuộc tổ chức bí mật của Cảnh sát Quốc gia với bí danh là \"Zero\" đang điều khiển các cảnh sát an ninh trên toàn quốc. Tại hiện trường, cảnh sát đã phát hiện dấu vân tay của Mori Kogoro và ông bị bắt. Để chứng minh ông Mori vô tội, Conan đã bắt tay vào điều tra nhưng liên tục bị \"kẻ 3 mặt\" Amuro cản đường.', 'uploads/conanmovie22.jpg', '', 'connan', 'Tôru Furuya', 'Yuzuru Tachikawa, ', 2018, 5, '115 phút', 0, 0, 1, 113),
(35, 'Aquaman: đế vuowg atlantic', 'Aquaman', '10,6,2', 3, 'Sau những sự kiện trong Justice League, Arthur Curry/Aquaman trở về biển cả và bắt đầu đảm nhận quyền thừa kế vương quốc Atlantis dưới sự cố vấn của công chúa Mera. Thế nhưng, đế chế huyền thoại bao năm ẩn mình dưới lòng biển sâu Atlantics sắp phải dậy sóng khi Orm quyết tâm thu phục 7 chủng tộc nơi đáy đại dương để tiêu diệt toàn bộ sự sống trên mặt đất. Giữa lúc biển xanh cuộn trào những đợt sóng dữ dội nhất Aquaman sẽ đương đầu với mọi việc như thế nào để bảo vệ quê hương và thế giới?', 'uploads/aquaman.jpg', 'image/poster_7129.jpg', 'aquanman', ' Jason Momoa, Amber Heard, Dolph Lundgren', 'James Wan', 2019, 2, '125 phút', 0, 0, 2, 116),
(36, 'Bậc thầy của những ước mơ', 'The greatest showman', '13', 3, 'Từ một kẻ thất nghiệp, P.T. Barnum chứng tỏ mọi giấc mơ đều có thể thành sự thật nếu ta dám thực hiện nó. Anh đã tập hợp những con người “đặc biệt”, vốn đang bị người khác xem là quái nhân, tham gia vào một màn trình diễn chưa từng có trong lịch sử trước đó. Bất chấp sự cười chê và phản đối của mọi người, họ vẫn cháy hết mình trên sân khấu như được sống lần cuối với chính bản thân mình.', 'uploads/thegreatestshowman.jpg', 'image/maxresdefault.jpg', 'bậc thầy', ' Hugh Jackman,  Zac Efron,  Rebecca Ferguson', 'Michael Gracey', 2017, 2, '106 phút', 0, 0, 1, 125),
(37, 'Ngọn Gió Đời Tôi', 'Blow Breeze', '17', 1, 'Phim Ngọn Gió Đời Tôi là truyện kể khi người ông qua đời và để lại một khối gia sản kếch xù. Cuộc chiến tranh giành tài sản giữa Mi Pong và Jang Go bắt đầu. Liệu hai người cháu này sẽ dùng những mưu kế gì để đạt được mục đích của mình. Và từ khi nào chuyện tình cảm bắt đầu nảy sinh.', 'image/ngon-gio-doi-toi.poster.jpg', '', 'gió', 'Byun Hee Bong, Lim Ji Yeon, Son Ho Joon, Oh Ji-Eun, Han Joo Hwan', 'Lee Jae Jin, Yoon Jae Moon', 2016, 4, '45 tập', 0, 0, 0, 56),
(38, 'Cẩm Tú Vị Ương', 'The Princess Wei Young', '1,3,11,17', 1, 'Phim Cẩm Tú Vị Ương VietSub - Thuyết Minh, Cẩm Tú Vị Ương - The Princess WeiYoung 2016: Giữa thời Nam Bắc triều, quần hùng tranh đoạt, khói lửa khắp nơi, chiến sự diễn ra không ngừng. Cô gái xuất thân trong hoàng tộc Bắc kinh-Tâm Nhi vốn là một công chúa có tính tình vô ưu, ngây thơ lương thiện, nhận được sự yêu thương che chở của vạn người.Tưởng Nam nguyên soái Bắc Ngụy vì muốn lập chiến công, lừa gạt binh quyền đích thân xuất chinh dẫn đến Bắc kinh trong một đêm máu chảy thành sông, khiến cho Phùng Tâm Nhi từ thiên chi kiêu nữ lại bị lưu lạc dị quốc, được con gái thứ bị vứt bỏ của phủ Thái phó Bắc Ngụy - Lý Vị Ương vô tình cứu mạng, sau đó lại vì bảo vệ Tâm Nhi mà bị truy binh giết hại.Tâm Nhi bất đắc dĩ lấy tên của Lý Vị Ương mà trở lại phủ Thái phó dũng cảm tiếp tục sống sót, mang trên vai vận mệnh gian nan của hai cô gái. Trở về phủ Thái phó, Phùng Tâm Nhi trong thân phận của Lý Vị Ương mà đấu trí đấu dũng với kẻ thù là nhất đại gia tộc họ Tưởng, đồng thời vô tình dính vào ân oán tình thù của hoàng tử Bắc Ngụy.', 'image/81895793gw1f4l8oacj0ej20hw0qegqz.jpg', '', 'cẩm tú', ' Ngô Kiến Hào, Đường Yên, Lý Tâm Ngải, Mao Hiểu Đồng, La Tấn, Lương Chấn Luân, Hà Minh Hàn', 'Lý Tuệ Châu', 2016, 3, '54 tập', 0, 0, 0, 56),
(39, 'Tia Chớp 3', 'The Flash - Season 3', '6', 1, 'Phim hành động Người Hùng Tia Chớp phần 3 là một series phim truyền hình Mỹ, được phát triển bởi nhà văn/nhà sản xuất Greg Berlanti, Andrew Kreisberg và Geoff Johns, được phát sóng trên The CW. Bộ phim dựa trên nhân vật Barry Allen / Flash, được xuất bản bởi DC Comics, một siêu anh hùng trong trang phục chiến đấu với tốc độ di chuyển siêu phàm.Bộ phim Người Hùng Tia Chớp phần 3 kể về Allen, do Grant Gustin thủ vai, một cảnh sát điều tra hiện trường, người đạt được tốc độ siêu phàm. Anh sử dụng tốc độ siêu phàm của mình để chống lại bọn tội phạm, ngay cả những người có siêu năng lực khác.', 'image/the-flash-official-poster-111014-2.jpg', '', '', ' Danielle Panabaker, Grant Gustin, Candice Patton, Carlos Valdes, Tom Cavanagh', 'Greg Berlanti, Geoff Johns', 2016, 2, '24 tập', 0, 0, 0, 5),
(40, 'Kim Chi Cà Pháo', 'Kim Chi Ca Phao', '5,17', 1, 'Sit-com Kim Chi Cà Pháo xoay quanh cuộc sống của các bạn trẻ tại khu chung cư cùng với hành trình đi tìm lại cha đầy gian nan của nhân vật Kim Chi.', 'image/poster.jpg', '', 'kim chi', ' Hiếu Hiền, Ngô Kiến Huy, Đào Phương Anh Đào, Nhi Katy, Trần Thế Nhân, Diên Minh, Hạnh Thúy, Đại Nghĩa', 'Smart media', 2014, 1, '56 tập', 0, 0, 0, 4),
(41, 'Nhân Chứng', 'Eyewitness - Season 1', '4,6,15', 1, ' Eyewitness là bộ phim xoay quanh hai chàng thiếu niên Lukas và Philip, họ hẹn gặp tại một cabin rồi tình cờ chứng kiến một vụ giết người đẫm máu và thoát chết trong gang tấc. Vừa phải che giấu mối quan hệ, vừa phải sống trong lo sợ bị kẻ sát nhân tìm thấy, họ sớm nhận ra rằng, khi chứng kiến một sự việc kinh hoàng, cuộc đời họ sẽ hoàn toàn thay đổi. Và trên hết, vụ giết người đó chỉ là bề nổi của tảng băng chìm..', 'image/Eyewitness-3X4.jpg', '', 'nhân chứng', 'Gil Bellows, Warren Christie, James Paxton, Aidan Devine, Julianne Nicholson', 'Adi Hasak', 2016, 2, '10 tập', 0, 0, 1, 6),
(42, 'Xác Sống 7 ', 'The Walking Dead', '5,19,21,18', 1, 'Thế giới hậu dịch bệnh sẽ rộng lớn hơn rất nhiều. Và giờ không chỉ là Alexandria hay Hilltop nữa, mà còn là The Saviors và cộng đồng mới The Kingdom. Bên cạnh đó, \"tình đoàn kết\" có vẻ sẽ đóng vai trò quan trọng trong phần này thông qua các cảnh tái hiện lời nói trong quá khứ của các nhân vật. Dĩ nhiên là phải đoàn kết thì nhóm Rick mới có thể đánh bại được hội Negan chứ không thể đơn độc được. Giờ đây khi có sự tham gia của nhiều cộng đồng khác, có vẻ sẽ chuẩn bị có cuộc chiến thực sự.', 'image/the-walking-dead-season-7.jpg', '', 'xác sống', 'Andrew Lincoln, Norman Reedus, Chandler Riggs, Steven Yeun, Melissa McBride', 'Frank Darabont', 2016, 2, '16 tập', 0, 0, 0, 7),
(43, 'Thần Điêu Đại Hiệp', 'The Return Of The Condor Heroes', '1,11,21', 1, 'The Return Of The Condor Heroes (Thần Điêu Đại Hiệp) được chuyển thể từ cuốn tiểu thuyết của Kim Dung, là câu chuyện tiếp theo của Anh Hùng Xạ Điêu, xoay quanh câu chuyện tình đẹp và cảm động giữa 2 Sư đồ Tiểu Long Nữ và Dương Quá. Một lần tình cờ, Dương Quá xông vào khu mộ cổ, nơi có nàng Tiểu Long Nữ xinh đẹp tuyệt trần làm Chưởng môn phái Cố Mộ. Sau đó, Dương Qua đã bái Tiểu Long Nữ làm sư phụ. Rồi không biết tự lúc nào, hai thầy trò đã vướng vào tình yêu nam nữ.Trải qua bao khó khăn, hiểu lầm, trắc trở ,chia ly cùng với các cuộc ân oán giang hồ, cuối cùng 2 người cũng đến được với nhau sau 16 năm xa cách. Đan xen vào đó là cuộc chiến tranh giành ngôi vị võ lâm minh chủ và cuộc chiến chống quân Nguyên của các vị anh hùng hảo hán…', 'image/return-of-the-condor-heroes-2006-1.jpg', '', 'thần điêu', 'Huỳnh Hiểu Minh, Lưu Diệp Phi, Khổng Lâm, Trần Tử Hàm', 'Trương Kỷ Trung', 2006, 3, '41 tập', 0, 0, 0, 7),
(44, '100 ngày của hoàng tử', '100 Days My Prince', '13, 17', 1, 'Được lấy bối cảnh thời Joseon. 100 Days My Prince xoay quanh câu chuyện về vị Thế tử Lee Yool (D.O). Sau 1 tai nạn khiến Lee Yool rơi một vách đá, chàng tỉnh dậy mất hết trí nhớ và mang thân phận một thường dân dưới cái tên Won Deuk. Cũng nhờ vậy mà Lee Yool đã gặp được Hong Shim (Nam Ji Hyun), cô nàng chủ của 1 tổ chức giống như thám tử tư, cũng là thanh mai trúc mã thời thơ ấu của Lee Yool. 100 ngày sống với thân phận đó, giữa họ đã nảy sinh tình cảm và Hong Shim sau này đã trở thành thái tử phi.', 'uploads/100ngaycuahoangtu.jpg', '', '100 ngày', 'Do Kyung-Soo, Nam Ji-Hyun, Cho Seong-Ha', 'No Ji-Sul', 2018, 4, '16 tập', 0, 0, 1, 46),
(45, 'Khung Hình Ký Ức ', 'Love Song Love Stories Series', '17', 1, 'Love Songs Love Stories là một series gồm nhiều bộ phim ngắn về những câu chuyện tình yêu có thật, \"Khung Hình Ký Ức\" là một trong 12 phim cùng series. Phim kể về Namkang có sở thích viết tiểu thuyết từ thời đi học. Shin là một nhiếp ảnh gia và cũng là đàn anh thời đại học của Namkang. Trong một lần, do bất đồng quan điểm nên giữa hai người đã nảy sinh mâu thuẫn và dẫn đến những hiểu lầm không đáng có, khiến Namkang và Shin không gặp lại nhau. Bảy năm sau, Namkang đã là tổng biên tập của tạp chí nổi tiếng Fabulous và đang có một chuyện tình đẹp như mơ với Fam - một doanh nhân thành đạt, Shin lại là nhiếp ảnh gia của tạp chí này. Khi chính mắt chứng kiến cảnh Fam cầu hôn Namkang, liệu Shin có cố gắng để giành lại Namkang hay lựa chọn buông tay để Namkang có được hạnh phúc?...', 'image/khung-hinh-ky-uc.poster.jpg', '', 'hình', 'Preechaya Pongthananikorn, Tạ Khôn Đạt', 'Kim Jung-Hwan', 2016, 4, '20 tập', 0, 0, 1, 9),
(46, 'Cain và Abel', 'Cain And Abel', '17', 1, 'Cain and Abel 2016 là tác phẩm remake lại từ phiên bản Cain and Abel năm 2009 của Hàn Quốc. Phim dựa theo câu chuyện kinh thánh về 2 đứa con đầu tiên của Adam và Eva. Yu Takada là con trai thứ 2 trong một gia đình. Bố cậu lúc nào cũng dành hết sự yêu thương cho người anh trai thông minh, giỏi giang của cậu. Ông không mấy quan tâm đến Yu... nhưng cậu luôn khao khát có được sự yêu thương của một người bố từ phía ông. Một ngày nọ, Yu tình cờ gặp 1 cô gái và dần dần có tình cảm với cô gái ấy. Nhưng rồi cậu phát hiện ra người cậu thích hóa ra lại là bạn gái của anh trai mình. Câu chuyện chính thức bắt đầu từ đây...', 'image/cain_poster_1.jpg', '', 'cain', 'Kiritani Kenta, Yamada Ryosuke.Kurashina Kana\r\n,\r\n', 'Yamada Ryosuke', 2009, 5, '20 tập', 0, 0, 1, 7),
(47, 'Thử thách thần chế 2', 'Along With the Gods 2: The Last 49 Days', '10,6,13', 3, 'Thử Thách Thần Chết 2: 49 ngày cuối cùng kể về chàng trai Su Hong đã được chọn là linh hồn thuần khiết thứ 49 cần giúp đỡ, cũng là linh hồn thuần khiết cuối cùng để cả 3 vệ thần hoàn thành sứ mệnh. Sau sứ mệnh này, họ cũng sẽ đầu thai làm kiếp người mới. Tuy nhiên trong cuộc hành trình 49 ngày cuối cùng này, thân phận của 3 vệ thần dần được hé lộ. Mọi thứ bắt đầu gay cấn hơn khi họ dần lấy lại những ký ức bi kịch của kiếp trước thông qua Gia Thần - một vị thần có quyền lực và vai trò không hề nhỏ ở dương thế.', 'uploads/thuthachthanchet2.jpg', 'image/8600-ouija-movie-2014.jpg', 'thử thách thần chết ', ' Ha Jung-Woo, Ju Ji-Hoon, Kim Hyang-Gi, Ma Dong-Seok', 'Kim Yong-Hwa', 2018, 4, '142 phút', 0, 0, 1, 9),
(48, 'Nhiệm vụ bất khả thi 6', 'Mission imposible 6', '6,21', 3, 'Ba năm sau Mission: Impossible – Rogue Nation, chàng đặc vụ điển trai và hào hoa bậc nhất trên màn ảnh rộng Ethan Hunt sẽ tái xuất màn bạc trong mùa hè 2018.   Những kẻ địch lớn nhất thường quay trở lại để săn đuổi bạn. Nhiệm Vụ Bất Khả Thi: Sụp Đổ với Ethan Hunt (Tom Cruise) và nhóm IMF của anh (Alec Baldwin, Simon Pegg, Ving Rhames) cùng với các đồng minh (Rebecca Ferguson, Michelle Monaghan) trong một cuộc đua với thời gian sau khi nhiệm vụ thất bại. Henry Cavill, Angela Bassett và Vanessa Kirby cũng sẽ tham gia vào dàn diễn viên khủng với nhà làm phim Christopher McQuarrie trở lại với bộ phim.', 'uploads/nhiemvubatkhathi6.jpg', 'image/operation-mekong_poster_goldposter_com_8.jpg', 'nhiệm vụ bất khả thi', ' Tom Cruise,  Henry Cavill,  Ving Rhames,  Simon Pegg', 'Christopher Mcquarrie, ', 2018, 2, '147 phút', 1, 1, 2, 55),
(49, 'Chân nhỏ, bạn ở đâu?', 'Small foot', '8,14,19', 3, 'Migo là một Yeti thân thiện với thế giới bị đảo lộn khi anh phát hiện ra điều gì đó mà anh không biết tồn tại - một con người. Ông nhanh chóng phải đối mặt với sự khước từ ngôi nhà tuyết của mình khi những người dân làng khác từ chối tin vào câu chuyện tuyệt vời của ông. Hy vọng để chứng minh họ sai, Migo bắt tay vào một cuộc hành trình sử thi để tìm thấy những sinh vật bí ẩn mà có thể đưa anh ta trở lại trong ân sủng tốt với cộng đồng đơn giản của mình.', 'uploads/channho.jpg', 'image/IMG_226501.jpg', 'chân nhỏ', 'Channing Tatum, James Corden, Zendaya', ' Karey Kirkpatrick, Jason Reisig ', 2018, 2, '103 phút', 0, 0, 1, 235),
(50, 'Người kiến 1', 'Ant-man 1', '10, 6', 3, 'Ant-Man kể về câu chuyện của một người đàn ông tên là Scott Lang, có khả năng thu nhỏ về kích thước nhưng lại tăng sức mạnh. Điều này buộc Scott Lang phải đón nhận yếu tố \"anh hùng\" trong mình và giúp cố vấn là Tiến sĩ Hank Pym bảo vệ bí mật đằng sau bộ trang phục Ant-Man, thoát khỏi một mối đe dọa khủng khiếp. Đối mặt với những rào cản khổng lồ, Scott Lang và Hank Pym phải lên kế hoạch hoàn thành một vụ cướp để có thể cứu thế giới.', 'uploads/nguoikien1.jpg', 'image/miss_peregrines_home_for_peculiar_children_ver3.jpg', 'người kiến', 'Paul Rudd, Evangeline Lilly, Michael Douglas, Michael Peña', 'Peyton Reed', 2015, 2, '117 phút', 0, 0, 6, 63),
(51, 'Ngày em đẹp nhất', 'On your wedding day', '17', 3, 'Câu chuyện tình yêu 10 năm rất đỗi ngọt ngào của anh chàng si tình Woo-yeon và cô gái tin vào \"định mệnh 3 giây đầu gặp gỡ\" Seung-hee. Những kỷ niệm ngọt ngào về mối tình đầu xen lẫn với những tiếc nuối về tình yêu không đúng lúc. Liệu Woo-yeon sẽ có những cảm xúc và hành động như thế nào khi cầm trên tay tấm thiệp cưới của người con gái mà mình thương yêu nhất?', 'image/ngayemdepnhat_mini.jpg', 'Image/ngayemdepnhat.jpg', 'ngày em đẹp nhất', 'Park Bo-Young, Kim Young-Kwang', 'Lee Seok-Geun', 2018, 4, '120 ph', 0, 0, 1, 9),
(52, 'Thế giới khủng long 2', 'Jurassic World 2: Fallen Kingdom', '10,14', 3, '4 năm sau thảm họa Công Viên kỷ Jura bị phá hủy bởi những con khủng long. Một vài con khủng long vẫn còn sống sót trong rừng trong khi Isla Nublar bị con người bỏ hoang. Owen (Chris Pratt) và Claire (Bryce Dallas Howard) đã tiến hành chiến dịch giải cứu những con khủng long còn sống sót khỏi sự tuyệt chủng khi ngọn núi lửa tại khu vực này bắt đầu hoạt động trở lại. Họ vô tình khám phá ra một âm mưu có thể khiến toàn bộ hành tinh đối mặt với một hiểm họa to lớn chưa từng thấy kể từ thời tiền sử.', 'uploads/thegioikhunglong2.jpg', 'uploads/thegioikhunglong_poster.jpg', 'khủng long', ' Chris Pratt,  Bryce Dallas Howard', 'J.a. Bayona', 2018, 2, '128 phút', 0, 0, 1, 71),
(53, 'Người kiến 2', 'Ant-man 2', '6,10', 3, 'Sau trận nội chiến khốc liệt, Scott Lang – anh hùng Người Kiến với khả năng phóng to, thu nhỏ lại phải đối mặt với sự lựa chọn khó khăn trong cuộc sống đời thường: làm siêu anh hùng gánh vác những trách nhiệm nặng nề của thế giới hay làm một người cha có trách nhiệm. Trong lúc ấy, Scott được tiến sĩ Hank Pym và Hope Van Dyne – Chiến Binh Ong triệu tập để thực hiện một nhiệm vụ cấp bách mới. Scott sẽ phải mặc vào bộ áo Người Kiến một lần nữa và chiến đấu bên cạnh chiến binh ong để lật mở những bí ẩn trong quá khứ.', 'uploads/nguoikien2.jpg', 'uploads/nguoikien2_poster.jpg', 'người kiến 2', 'Paul Rudd, Evangeline Lilly, Michael Douglas, Michael Peña', 'Peyton Reed', 2018, 2, '118 phút', 0, 0, 7, 15),
(54, 'Gia đình siêu nhân 2', 'Incredibles 2', '8,14', 3, 'ia Đình Siêu Nhân 2 đánh dấu những chuyến phiêu lưu anh hùng đầy hấp dẫn với sự đổi vai đầy táo bạo. Lần này, mẹ dẻo Helen (Elastigirl) sẽ đi thực chiến giải cứu thế giới trong khi bố khỏe Bob (Mr. Incredible) lùi về hậu phương trông nom những đứa con siêu nhân láu lỉnh gồm: con gái Violet ( siêu năng lực tàng hình và tạo ra từ trường làm chắn bảo vệ), con trai Dash (chạy siêu nhanh) và cậu út Jack-Jack với sức mạnh chưa được khám phá. Một ác nhân bí ẩn xuất hiện với một âm mưu đáng sợ khiến cho gia đình siêu nhân phải “tái xuất giang hồ”. Liệu gia đình siêu nhân sẽ vượt qua khó khăn này như thế nào?', 'uploads/giadinhsieunhan2.jpg', 'uploads/giadinhsieunhan2_poster.jpg', 'gia đình, siêu nhân, incridible', ' Craig T. Nelson,  Holly Hunter,  Sarah Vowell,  Huck Milner', 'Brad Bird', 2018, 2, '118 phút', 0, 0, 4, 95),
(55, 'Đảo hải tặc', 'One piece', '8, 19, 6', 1, 'Phim Đảo Hải Tặc - One Piece là chuyện về cậu bé Monkey D. Luffy do ăn nhầm Trái Ác Quỷ, bị biến thành người cao su và sẽ không bao giờ biết bơi. 10 năm sau sự việc đó, cậu rời quê mình và kiếm đủ 10 thành viên để thành một băng hải tặc, biệt hiệu Hải tặc Mũ Rơm.   Khi đó của phiêu lưu tìm kiếm kho báu One Piece bắt đầu. Trong cuộc phiêu lưu tìm kiếm One Piece, băng Hải tặc mũ rơm phải chiến đấu với nhiều băng hải tặc xấu khác cũng muốn độc chiếm One Piece và Hải quân của Chính phủ muốn diệt trừ hải tặc. Băng Hải tặc Mũ Rơm phải trải qua biết bao nhiêu khó khăn, không lùi bước với ước mơ \"Trở thành Vua Hải Tặc và chiếm được kho báu One Piece\".', 'uploads/daohaitac.jpg', '', 'đảo hải tặc', ' Mayumi Tanaka, Hiroaki Hirata', 'Kônosuke Uda, Eiichiro Oda', 1999, 5, '859 tập', 0, 0, 6, 11),
(56, 'Lan Lăng Vương Phi', 'Princess Of Lanling King', '1,16', 1, 'Phim Lan Lăng Vương Phi có nội dung kể về Nguyên Thanh Tỏa, hậu nhân của gia tộc Đoạn Mộc. Vào cuối thời Đông Tấn, vương triều rung chuyển, chư hầu chia cắt. Tương truyền rẳng kẻ nào nắm giữ Thanh Loan Kính và Ly Thương Kiếm, kẻ đó có thể thống nhất thiên hạ. Thanh Loan Kính và Ly Thương Kiếm là Long Giáo bảo vật, bởi vì chiến loạn mà lưu lạc thế gian. Long giáo thánh nữ Tử Mị luyện công nhập ma, bị nội lực của mình phản vệ trọng thương, sinh mạng mong manh. Tử Mị trước khi chết liền đem Long giáo truyền thừa truyền lại cho Nguyên Thanh Tỏa, báo cho nàng bí mật về Thanh Loan Kính và Ly Thương Kiếm.', 'image/lan-lang-vuong-phi.poster.jpg', '', 'vương phi', 'Hà Nhuận Đông, Trương Hàm Vận, Trần Dịch, Bành Quán Anh', 'Lâm Phong, Diệp Chiêu Nghi', 2016, 3, '34 tập', 0, 0, 2, 80);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies_comment`
--

CREATE TABLE `movies_comment` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `movies_comment`
--

INSERT INTO `movies_comment` (`id`, `content`, `user_id`, `movie_id`, `time`) VALUES
(19, '&lt;b&gt;Comment chỉ được ph&eacute;p hiển thị dưới dạng text&lt;/b&gt;\r\n&lt;script&gt;alert(&quot;hihi&quot;);&lt;/script&gt;\r\n&lt;?php echo $id; ?&gt;', 10, 40, 1478324882),
(26, 'qu&aacute; khứ anh kh&ocirc;ng thể qu&ecirc;n', 12, 41, 1478350845),
(27, 'おはよう ございます。', 10, 5, 1478530996),
(28, 'adsfe3 @#$%^', 10, 40, 1478606355),
(29, 'phim hay gh&ecirc;', 4, 46, 1479379295),
(31, 'd', 13, 57, 1540467507),
(32, 'phim hay qu&aacute;, ủng hộ team :)))\r\n', 14, 58, 1541121518);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies_stats`
--

CREATE TABLE `movies_stats` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `movies_stats`
--

INSERT INTO `movies_stats` (`id`, `movie_id`, `view`, `month`, `year`) VALUES
(1, 40, 5, 11, 2018),
(2, 26, 3, 9, 2018),
(3, 21, 1, 9, 2018),
(4, 5, 2, 11, 2017),
(5, 9, 1, 11, 2017),
(6, 26, 12, 10, 2018),
(7, 26, 1, 11, 2017),
(8, 46, 42, 11, 2017),
(9, 1, 117, 11, 2018),
(10, 45, 1, 11, 2017),
(11, 44, 1, 11, 2017),
(12, 4, 1, 11, 2018),
(13, 54, 2, 11, 2017),
(14, 51, 1, 11, 2017),
(15, 57, 3, 11, 2017),
(16, 60, 18, 11, 2017),
(17, 62, 2, 11, 2017),
(18, 61, 1, 11, 2017),
(19, 63, 8, 11, 2017),
(20, 33, 1, 11, 2016),
(21, 47, 2, 11, 2017),
(22, 53, 2, 11, 2016),
(23, 50, 1, 11, 2018),
(24, 36, 1, 11, 2016),
(25, 52, 2, 11, 2016),
(26, 10, 1, 11, 2017),
(27, 11, 1, 11, 2016),
(28, 1, 7, 10, 2018),
(29, 57, 9, 10, 2018),
(30, 19, 1, 10, 2018),
(31, 52, 1, 10, 2018),
(32, 51, 2, 10, 2018),
(33, 57, 2, 11, 2018),
(34, 58, 7, 11, 2018),
(35, 54, 4, 11, 2018),
(36, 51, 1, 11, 2018),
(37, 50, 6, 11, 2018),
(38, 49, 1, 11, 2018),
(39, 48, 2, 11, 2018),
(40, 36, 1, 11, 2018),
(41, 35, 2, 11, 2018),
(42, 31, 1, 11, 2018),
(43, 34, 1, 11, 2018),
(44, 33, 1, 11, 2018),
(45, 32, 1, 11, 2018),
(46, 29, 1, 11, 2018),
(47, 28, 1, 11, 2018),
(48, 27, 1, 11, 2018),
(49, 55, 6, 11, 2018),
(50, 46, 1, 11, 2018),
(51, 45, 1, 11, 2018),
(52, 41, 1, 11, 2018),
(53, 1, 12, 11, 2018),
(54, 2, 5, 11, 2018),
(55, 47, 1, 11, 2018),
(56, 56, 2, 11, 2018),
(57, 53, 7, 11, 2018),
(58, 52, 1, 11, 2018),
(59, 44, 1, 11, 2018);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies_upload`
--

CREATE TABLE `movies_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `name_english` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_loaiphim` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `low` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `high` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dienvien` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `daodien` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namsanxuat` int(11) NOT NULL,
  `thoiluong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quocgia` int(11) NOT NULL,
  `ep_movie` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movies_upload`
--

INSERT INTO `movies_upload` (`id`, `name`, `name_english`, `kind_id`, `id_loaiphim`, `details`, `images`, `poster`, `low`, `high`, `tag`, `dienvien`, `daodien`, `namsanxuat`, `thoiluong`, `quocgia`, `ep_movie`, `user_id`) VALUES
(5, 'Em chưa 18', 'Em chưa 18', '5,17', 2, 'a', 'em-chua-18.jpg', '', 'Phim/EM CHƯA 18 - OFFICIAL TRAILER - KHỞI CHIẾU 28.4.2017 - YouTube.MP4', '', 'em chưa 18', 'Kaity Nguyen, Will, Kiều Minh Tuấn', 'Le Thanh Son', 2017, '95 phút', 1, 1, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie_episode`
--

CREATE TABLE `movie_episode` (
  `id` int(11) NOT NULL,
  `ep_film` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `low` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `high` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movie_episode`
--

INSERT INTO `movie_episode` (`id`, `ep_film`, `id_film`, `low`, `high`) VALUES
(1, 1, 51, 'Phim/on_your_wedding_day.mp4', NULL),
(2, 1, 54, 'Phim/Gia Đình Siêu Nhân 2 của Disney-Pixar - Trailer.mp4', NULL),
(3, 1, 52, 'Phim/Jurassic World- Fallen Kingdom - Official Trailer [HD].mp4', NULL),
(4, 1, 50, 'Phim/ANT-MAN (2015) Trailer.mp4', 'Phim/nguoikien2015.mp4'),
(5, 1, 1, 'phim/hau-due-cua-mat-troi-tap-01.mp4', 'phim/hau-due-cua-mat-troi-tap-02.mp4'),
(6, 2, 1, 'phim/hau-due-cua-mat-troi-tap-02.mp4', ''),
(7, 1, 49, 'Phim/Smallfoot - Official Trailer 1.mp4', NULL),
(8, 1, 48, 'Phim/Phim Hành Động -Mission- Impossible - Fallout- Trailer 27.07.2018.mp4', NULL),
(9, 1, 47, 'Phim/ALONG WITH THE GODS 2 - THỬ THÁCH THẦN CHẾT- 49 NGÀY CUỐI CÙNG - KC 10.08.2018.mp4', NULL),
(10, 1, 36, 'Phim/THE GREATEST SHOWMAN (2017) - Trailer.mp4', NULL),
(11, 1, 35, 'Phim/AQUAMAN – Extended Trailer 2.mp4', NULL),
(12, 1, 31, 'Phim/ĐẲNG CẤP THÚ CƯNG - Trailer E.mp4', NULL),
(13, 1, 15, 'Phim/Furious 7 - Official Trailer (HD).mp4', NULL),
(14, 1, 34, 'Phim/THÁM TỬ LỪNG DANH CONAN- KẺ HÀNH PHÁP ZERO - Trailer.mp4', NULL),
(15, 1, 33, 'Phim/THE NUN - ÁC QUỶ MA SƠ - TEASER TRAILER- KC 07.09.2018.mp4', NULL),
(16, 1, 32, 'Phim/THẦY GIÁO ĐẠI CA - BIG BROTHER - TRAILER - KC 31.08.2018.mp4', NULL),
(17, 1, 30, 'Phim/Justin and the Knights of Valour - Justin & Hiệp Sĩ Quả Cảm 3D - Trailer.mp4', NULL),
(18, 1, 28, 'Phim/JOHNNY ENGLISH- TÁI XUẤT GIANG HÔ- TRAILER A- DỰ KIẾN KHỞI CHIẾU 21.09.2018.mp4', NULL),
(19, 1, 55, 'Phim/One Piece Romance Dawn - 3DS - Memories (Trailer).mp4', NULL),
(20, 1, 44, 'Phim/100 Ngày Của Hoàng Tử 1.mp4', NULL),
(22, 2, 44, 'Phim/100 Ngày Của Hoàng Tử 2.mp4', NULL),
(23, 1, 29, 'Phim/The Simpsons Movie - #TBT Trailer - 20th Century FOX.mp4', NULL),
(24, 2, 55, 'Phim/Luffy Gear 4th Vs. Katakuri [FULL FIGHT] - One Piece AMV.mp4', NULL),
(28, 2, 2, 'phim/Furious 7 - Official Theatrical Trailer (HD) (1).mp4', 'phim/Furious 7 - Official Theatrical Trailer (HD).mp4'),
(33, 1, 53, 'phim/Phim Người Kiến Và Chiến Binh Ong của Marvel Studios - Trailer 2.mp4', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie_episode_upload`
--

CREATE TABLE `movie_episode_upload` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `ep_film` int(11) NOT NULL,
  `low` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `high` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movie_episode_upload`
--

INSERT INTO `movie_episode_upload` (`id`, `id_film`, `ep_film`, `low`, `high`, `user_id`) VALUES
(1, 1, 1, 'hau-due-mat-troi-tap1.mp4', '', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie_kind_names`
--

CREATE TABLE `movie_kind_names` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movie_kind_names`
--

INSERT INTO `movie_kind_names` (`id`, `name`) VALUES
(1, 'Cổ trang'),
(2, 'Chiến tranh'),
(3, 'Chính trị'),
(4, 'Giả tưởng'),
(5, 'Hài'),
(6, 'Hành động'),
(7, 'Hình sự'),
(8, 'Hoạt hình'),
(10, 'Khoa học viễn tưởng'),
(11, 'Kiếm hiệp'),
(12, 'Kinh dị'),
(13, 'Lịch sử'),
(14, 'Phiêu lưu'),
(15, 'Siêu anh hùng'),
(16, 'Sử thi'),
(17, 'Tình cảm'),
(18, 'Thảm họa'),
(19, 'Thiếu nhi'),
(20, 'Trinh thám'),
(21, 'Võ thuật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie_quality_names`
--

CREATE TABLE `movie_quality_names` (
  `id` int(11) NOT NULL,
  `name` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movie_quality_names`
--

INSERT INTO `movie_quality_names` (`id`, `name`) VALUES
(1, 'CAM'),
(2, '360p'),
(3, '480p'),
(4, '720p'),
(5, '1080p');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `id` int(11) NOT NULL,
  `quocgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`id`, `quocgia`) VALUES
(1, 'Việt Nam'),
(2, 'Mỹ'),
(3, 'Trung Quốc'),
(4, 'Hàn Quốc'),
(5, 'Nhật Bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `User_Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Full_Name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `membership_id` int(1) NOT NULL DEFAULT '1',
  `vip_expire` date DEFAULT '1970-01-01',
  `balance` int(100) NOT NULL DEFAULT '0',
  `avatar` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'uploads/\navatar.jpg',
  `level` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `User_Name`, `password`, `Full_Name`, `age`, `email`, `membership_id`, `vip_expire`, `balance`, `avatar`, `level`) VALUES
(9, 'admin', '4297f44b13955235245b2497399d7a93', 'Nguyễn Quang Thái', 22, '1', 2, '1970-01-01', 0, 'uploads/avatar.jpg', b'1'),
(14, 'hien', 'c030437f6e8e94d244bc602606df5235', 'Hiền xấu xí', 21, '1@gmail.com', 2, '1970-01-01', 24000, 'uploads/\navatar.jpg', b'0'),
(15, 'root', 'e10adc3949ba59abbe56e057f20f883e', 'root', 22, 'root@gmail.com', 2, '1970-01-01', 0, 'uploads/\navatar.jpg', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_membership_names`
--

CREATE TABLE `user_membership_names` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_membership_names`
--

INSERT INTO `user_membership_names` (`id`, `name`) VALUES
(1, 'Standard'),
(2, 'VIP');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kinda_card`
--
ALTER TABLE `kinda_card`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaiphim`
--
ALTER TABLE `loaiphim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies_comment`
--
ALTER TABLE `movies_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies_stats`
--
ALTER TABLE `movies_stats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies_upload`
--
ALTER TABLE `movies_upload`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movie_episode`
--
ALTER TABLE `movie_episode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movie_episode_upload`
--
ALTER TABLE `movie_episode_upload`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movie_kind_names`
--
ALTER TABLE `movie_kind_names`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movie_quality_names`
--
ALTER TABLE `movie_quality_names`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_membership_names`
--
ALTER TABLE `user_membership_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `kinda_card`
--
ALTER TABLE `kinda_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT cho bảng `movies_comment`
--
ALTER TABLE `movies_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT cho bảng `movies_stats`
--
ALTER TABLE `movies_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT cho bảng `movies_upload`
--
ALTER TABLE `movies_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `movie_episode`
--
ALTER TABLE `movie_episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT cho bảng `movie_episode_upload`
--
ALTER TABLE `movie_episode_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `movie_kind_names`
--
ALTER TABLE `movie_kind_names`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `movie_quality_names`
--
ALTER TABLE `movie_quality_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `user_membership_names`
--
ALTER TABLE `user_membership_names`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
