@extends('layouts.front')

@section('title')
Welcome to Shop
@endsection

@section('content')
<div class="services-breadcrumb">
  <div class="agile_inner_breadcrumb">
    <div class="container">
      <ul class="w3_short">
        <li>
          <a href="/index">Trang chủ</a>
          <i>|</i>
        </li>
        <li>Câu hỏi thằng gặp</li>
      </ul>
    </div>
  </div>
</div>
<!-- //page -->

<!-- Faqs -->
<div class="faqs-w3l py-sm-5 py-4">
  <div class="container py-xl-4 py-lg-2">
    <!-- tittle heading -->
    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
      <span>Câu hỏi thường gặp</span>
    </h3>
    <!-- //tittle heading -->
    <h3 class="w3-head mb-2">10 Câu hỏi thường gặp</h3>
    <div class="faq-w3agile">
      <ul class="faq pl-4">
        <li class="item1 mt-3 pl-2">
          <a href="#" title="click here">Bao lâu thì hàng có thể gửi tới bên khách hàng ?</a>
          <ul>
            <li class="subitem1">
              <p>Tùy thuộc vào từng vùng miền mà đơn hàng của bạn có thể sẽ tới nhanh hay chậm trong khoảng (15-30) ngày</p>
            </li>
          </ul>
        </li>
        <li class="item2 mt-3 pl-2">
          <a href="#" title="click here">Quy trình hoàn trả hàng lỗi ra sao?</a>
          <ul>
            <li class="subitem1">
              <p> Trong thời gian 15 ngày từ khi đơn hàng được gửi tới,quý khách vui lòng quay lại video
                lúc bóc hàng cùng với hóa đơn đã thanh toán có chứa dấu đóng của cửa hàng, kèm theo lỗi của mặt hàng là gì.
                Khi gửi về cửa hàng sẽ kiểm tra lại mặt hàng nếu đúng là mặt hàng do bên mayxanh bị lỗi sẽ hoàn trả lại 100%
                tiền của quý khác.
              </p>
            </li>
          </ul>
        </li>
        <li class="item3 mt-3 pl-2">
          <a href="#" title="click here">Mặt hàng có giống như trong hình không?</a>
          <ul>
            <li class="subitem1">
              <p>May xanh xin cam đoan hàng trước khi đưa tới khách hàng đều được kiểm tra kĩ lưỡng để những trường hợp hi hữa không xảy ra</p>
            </li>
          </ul>
        </li>
        <li class="item4 mt-3 pl-2">
          <a href="#" title="click here">Cửa hàng hoạt động trong khung thời gian nào?</a>
          <ul>
            <li class="subitem1">
              <p>Các cửa hàng của May xanh mở theo khung giờ từ 8:00 sáng tới 17:00 chiều.
                Cửa hàng online luôn hoạt động 24/07 để sẵn sàng phục vụ quý khách
              </p>
            </li>
          </ul>
        </li>
        <li class="item5 mt-3 pl-2">
          <a href="#" title="click here">Tôi có thể đặt hàng để bán lại không?</a>
          <ul>
            <li class="subitem1">
              <p>Mayxanh rất tiếc hiện tại chưa thể thực hiện dịch vụ này.</p>
            </li>
          </ul>
        </li>
        <li class="item6 mt-3 pl-2">
          <a href="#" title="click here">Đơn hàng của tôi được giao thành nhiều kiện - Tôi có phải trả thêm phí giao hàng không??</a>
          <ul>
            <li class="subitem1">
              <p>Trường hợp khách hàng nhận nhiều kiện cho cùng 1 đơn hàng sẽ không tính thêm chi phí.
                Tuy nhiên, nếu khách hàng nhận được các mặt hàng khác với đơn đặt hàng của mình, 
                vui lòng giữ lại bưu kiện và liên hệ với Trung Tâm Khách Hàng của chúng tôi để được hỗ trợ thêm..</p>
            </li>
          </ul>
        </li>
        <li class="item7 mt-3 pl-2">
          <a href="#" title="click here">Tôi có thể đặt thêm sản phẩm sau khi đơn hàng đã được xác nhận không?</a>
          <ul>
            <li class="subitem1">
              <p>Rất tiếc, sau khi đơn đặt hàng đã được hoàn thành và xác nhận, khách hàng không thể thêm sản phẩm vào đơn hàng của mình.
                Vui lòng đặt thêm đơn hàng mới.</p>
            </li>
          </ul>
        </li>
        <li class="item8 mt-3 pl-2">
          <a href="#" title="click here">Đơn hàng số lượng lớn?</a>
          <ul>
            <li class="subitem1">
              <p>Chúng tôi chân thành cảm ơn quý khách đã ủng hộ sản phẩm của UNIQLO trong suốt thời gian qua. Để đáp lại sự mong đợi đó,
                chúng tôi xin gửi đến quý khách chương trình ưu đãi cho đơn hàng số lượng lớn dành cho người tiêu dùng là cá nhân và doanh
                nghiệp. Với đơn hàng có giá trị chỉ từ 100.000.000 đ, khách hàng sẽ được giao hàng tận nơi.</p>
            </li>
          </ul>
        </li>
        <li class="item9 mt-3 pl-2">
          <a href="#" title="click here">Tôi có thể thay đổi địa điểm giao hàng đã xác nhận không ?</a>
          <ul>
            <li class="subitem1">
              <p>May xanh rất tiếc vì khách hàng không thể thay đổi địa điểm giao hàng sau khi đơn hàng đã được đặt.</p>
            </li>
          </ul>
        </li>
        <li class="item10 mt-3 pl-2">
          <a href="#" title="click here">May xanh có giao hàng quốc tế không ?</a>
          <ul>
            <li class="subitem1">
              <p>Hiện tại, May xanh Việt Nam chỉ đang cung cấp dịch vụ giao hàng trên toàn quốc (trong phạm vi Việt Nam).</p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- //Faqs -->

@include('frontend.inc.front-middle-section')

@endsection

@section('scripts')
<!-- script for tabs -->
<script>
  $(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
</script>
<!-- script for tabs -->
@endsection