@extends('layouts.front')

@section('title')
May xanh chào mừng bạn
@endsection

@section('content')
<div class="services-breadcrumb">
  <div class="agile_inner_breadcrumb">
    <div class="container">
      <ul class="w3_short">
        <li>
          <a href="index">Trang chủ</a>
          <i>|</i>
        </li>
        <li>Trợ giúp</li>
      </ul>
    </div>
  </div>
</div>
<!-- //page -->

<!-- help -->
<div class="faqs-w3l py-sm-5 py-4">
  <div class="container py-xl-4 py-lg-2">
    <!-- tittle heading -->
    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
      <span>Trợ giúp</span>
    </h3>
    <!-- //tittle heading -->
    <!-- help content -->
    <div class="wthree-help mb-sm-5 mb-4">
      <div class="agile-left-help">
        <h3 class="w3-head">May xanh có thể giúp gì cho bạn</h3>
        <form action="#" method="get">
          <textarea placeholder="Your Query" name="Message" required=""></textarea>
          <input type="submit" value="Submit">
        </form>
        <h5 class="my-sm-4 my-3">hoặc</h5>
        <a href="/contact">Liên hệ chúng tôi</a>
      </div>
    </div>
    <!-- //help content -->
    <!-- Faqs -->
    <h3 class="w3-head mb-2">10 Câu hỏi thường gặp</h3>
    <div class="faq-w3agile">
      <ul class="faq pl-4">
        <li class="item1 mt-3 pl-2">
          <a href="#" title="click here">Trong trường hợp tôi không có mặt tại thời điểm giao hàng, May xanh có thể giao hàng lại cho tôi được không?</a>
          <ul>
            <li class="subitem1">
              <p> Trong trường hợp không thể liên hệ với khách hàng để giao, đơn hàng sẽ được tiếp tục giao lại tối đa 3 lần trong vòng 3 ngày tiếp theo. Khách hàng cũng có thể chủ động liên hệ với công ty vận chuyển của May xanh (GHN) để sắp xếp thời gian cho việc giao hàng lại.

                Nếu đơn hàng vẫn không thể được giao thành công đến khách hàng trong vòng 3 lần, đơn hàng sẽ được GHN vận chuyển về kho của May xanh và tiến hành hoàn tiền. </p>
            </li>
          </ul>
        </li>
        <li class="item2 mt-3 pl-2">
          <a href="#" title="click here">Thời gian giao hàng dự kiến (Cho đơn hàng trực tuyến)?
          </a>
          <ul>
            <li class="subitem1">
              <p>Giao Hàng Tại Nhà: Thời gian giao hàng có thể dài hơn 4 ngày so với thời gian giao hàng dự kiến thông thường.
                Về thời gian giao hàng dự kiến thông thường trong khoảng từ 15-30 ngày.</p>
            </li>
          </ul>
        </li>
        <li class="item3 mt-3 pl-2">
          <a href="#" title="click here">Tôi có thể thay đổi địa điểm giao hàng đã xác nhận không?</a>
          <ul>
            <li class="subitem1">
              <p>May xanh rất tiếc vì khách hàng không thể thay đổi địa điểm giao hàng sau khi đơn hàng đã được đặt.</p>
            </li>
          </ul>
        </li>
        <li class="item4 mt-3 pl-2">
          <a href="#" title="click here">Tôi có thể đổi sản phẩm khác trong đơn đặt hàng đã xác nhận không?</a>
          <ul>
            <li class="subitem1">
              <p>Rất tiếc, khách hàng không thể đổi sản phẩm khác trực tiếp trên đơn hàng sau khi đơn hàng đã được xác nhận.

                Nếu tình trạng hiện tại của đơn hàng cho phép (trong vòng 30 phút sau khi xác nhận đơn hàng), khách hàng có thể hủy đơn và đặt lại đơn hàng mới.</p>
            </li>
          </ul>
        </li>
        <li class="item5 mt-3 pl-2">
          <a href="#" title="click here">Đơn hàng của tôi được giao thành nhiều kiện - Tôi có phải trả thêm phí giao hàng không?</a>
          <ul>
            <li class="subitem1">
              <p>Trường hợp khách hàng nhận nhiều kiện cho cùng 1 đơn hàng sẽ không tính thêm chi phí.

                Tuy nhiên, nếu khách hàng nhận được các mặt hàng khác với đơn đặt hàng của mình, vui lòng giữ lại bưu kiện và liên hệ với Trung Tâm Khách Hàng của chúng tôi để được hỗ trợ thêm.</p>
            </li>
          </ul>
        </li>
        <li class="item6 mt-3 pl-2">
          <a href="#" title="click here">Thông tin về việc giảm 2% thuế suất thuế Giá Trị Gia Tăng (“GTGT”)?</a>
          <ul>
            <li class="subitem1">
              <p>Căn cứ Nghị Quyết số 43/2022/QH15 ngày 11/1/2022 về việc giảm 2% thuế suất thuế Giá Trị Gia Tăng (“GTGT”), Chúng tôi trân trọng thông báo về việc giảm giá sản phẩm tại Cửa hàng trực tuyến May xanh Việt Nam là còn 8%. </p>
            </li>
          </ul>
        </li>
        <li class="item7 mt-3 pl-2">
          <a href="#" title="click here">Tôi có được hoàn lại phí vận chuyển và mã giảm giá không?</a>
          <ul>
            <li class="subitem1">
              <p>Đối với sản phẩm không có lỗi sản xuất, số tiền hoàn lại sẽ bao gồm giá trị sản phẩm nhưng không bao gồm chi phí giao hàng và khoảng giá giá áp dụng phiếu thưởng/ mã giảm giá.

                Phiếu thưởng/ mã giảm giá sẽ không còn giá trị và không thể tái sử dụng sau khi hoàn tiền.
                
                Trong trường hợp sản phẩm có lỗi sản xuất, vui lòng liên hệ Trung Tâm Khách Hàng để được hỗ trợ thêm.</p>
            </li>
          </ul>
        </li>
        <li class="item8 mt-3 pl-2">
          <a href="#" title="click here">Tôi có thể chọn đơn vị vận chuyển không?</a>
          <ul>
            <li class="subitem1">
              <p>Hiện tại, May xanh Việt Nam hợp tác với Giao Hàng Nhanh (GHN) để vận chuyển tất cả đơn hàng trực tuyến của chúng tôi. Vì vậy, rất tiếc rằng khách hàng không thể tùy chọn đơn vị vận chuyển.

                Sau khi hoàn tất đặt hàng, khách hàng có thể theo dõi trạng thái vận chuyển bằng cách tìm kiếm bằng mã vận đơn thông qua trang web của GHN tại https://donhang.ghn.vn/?order_code=GA78LYQY.</p>
            </li>
          </ul>
        </li>
        <li class="item9 mt-3 pl-2">
          <a href="#" title="click here">Tôi có được hoàn lại phí vận chuyển và mã giảm giá không?</a>
          <ul>
            <li class="subitem1">
              <p>Đối với sản phẩm không có lỗi sản xuất, số tiền hoàn lại sẽ bao gồm giá trị sản phẩm nhưng không bao gồm chi phí giao hàng và khoảng giá giá áp dụng phiếu thưởng/ mã giảm giá.</p>
            </li>
          </ul>
        </li>
        <li class="item10 mt-3 pl-2">
          <a href="#" title="click here">Tôi muốn đơn vị vận chuyển đưa hàng cho nhân viên lễ tân được không?</a>
          <ul>
            <li class="subitem1">
              <p>Dựa theo yêu cầu của khách hàng, đối tác vận chuyển của May xanh có thể bàn giao cho nhân viên lễ tân.

                Trong trường hợp này, khách hàng vui lòng thông báo trực tiếp với đơn vị vận chuyển khi người giao hàng liên hệ giao hàng.</p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- //Faqs -->
  </div>
</div>
<!-- //help -->

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