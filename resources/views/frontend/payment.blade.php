@extends('layouts.front')

@section('title')
@section('title')
May xanh chào mừng bạn
@endsection


@section('content')
  	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Trang thanh toán</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>T</span>hanh Toán</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					<ul class="resp-tabs-list hor_1">
						<li>Thanh toán(COD)</li>
						<li>Thẻ VISA</li>
						<li>Ngân hàng nội địa</li>
						<li>Tài khoản Paypal</li>
					</ul>
					<div class="resp-tabs-container hor_1">

						<div>
							<div class="vertical_post check_box_agile">
								<h5>COD</h5>
								<div class="checkbox">
									<div class="check_box_one cashon_delivery">
										<label class="anim">
											<input type="checkbox" class="checkbox">
											<span> Chúng tôi có chấp nhận thanh toán bằng VISA</span>
										</label>
									</div>

								</div>
							</div>
						</div>
						<div>
							<form action="#" method="post" class="creditly-card-form agileinfo_form">
								<div class="creditly-wrapper wthree, w3_agileits_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Tên trên thẻ</label>
												<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
											</div>
											<div class="w3_agileits_card_number_grids my-3">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Số thẻ</label>
														<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
														    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right mt-2">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Ngày hết hạn</label>
												<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
											</div>
										</div>
										<button class="submit mt-3">
											<span>Thanh toán</span>
										</button>
									</div>
								</div>
							</form>

						</div>
						<div>
							<div class="vertical_post">
								<form action="#" method="post">
									<h5>Chọn ngân hàng</h5>
									<div class="swit-radio">
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio" checked="">
													<i></i>VietComBank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>MBBank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>TechComBank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>TP Bank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>VP Bank</label>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<h5>Hoặc chọn ngân hàng khác</h5>
									<div class="section_room_pay">
										<select class="year">
											<option value="">=== Ngân hàng khác ===</option>
											<option value="ALB-NA">Ngân hàng Nông nghiệp và Phát triển Nông thôn VN</option>
											<option value="ADB-NA">Ngân hàng Xây dựng</option>
											<option value="BBK-NA">Ngân hàng Đại Dương</option>
											<option value="BBC-NA">Ngân hàng Dầu Khí Toàn Cầu</option>
											<option value="BBR-NA">	Đầu tư và Phát triển Việt Nam</option>
											<option value="BOI-NA">Công Thương Việt Nam</option>
											<option value="BOM-NA">Ngân hàng Á Châu</option>
											<option value="CSB-NA">Sài Gòn-Hà Nội</option>
											<option value="CBI-NA">NH TMCP Phát triển Nhà Tp HCM</option>
											<option value="CUB-NA">	Ngân hàng TMCP Sài Gòn</option>
											<option value="CRP-NA">Sài Gòn Thương Tín</option>
											<option value="DBK-NA">NH TMCP Quốc tế Việt Nam</option>
											<option value="DCB-NA">Hàng Hải Việt Nam</option>
											<option value="DC2-NA">Ngân hàng Đông Nam Á</option>
											<option value="DLB-NA">	Phương Đông</option>
											<option value="FBK-NA">	Ngân hàng xuất nhập khẩu Việt Nam</option>
											<option value="IDS-NA">Bưu điện Liên Việt</option>
											<option value="IOB-NA">	Đại chúng Việt Nam</option>
											<option value="ING-NA">Ngân hàng TMCP Bắc Á</option>
											<option value="JKB-NA">	Ngân hàng An Bình</option>
											<option value="JSB-NA">Ngân hàng TMCP Đông Á</option>
											<option value="KBL-NA">	Bảo Việt</option>
											<option value="KVB-NA">Ngân hàng TMCP Nam Á</option>
											<option value="LVR-NA">	Việt Nam Thương Tín</option>
											<option value="OBC-NA">Ngân hàng TMCP Việt Á</option>
											<option value="CPN-NA">Quốc Dân</option>
											<option value="PNB-NA">	Ngân hàng Bản Việt</option>
											<option value="RSD-DIRECT">Kiên Long</option>
											<option value="RBS-NA">Sài Gòn Công Thương</option>
											<option value="SWB-NA">	Xăng dầu Petrolimex</option>
										</select>
									</div>
									<input type="submit" value="PAY NOW">
								</form>
							</div>
						</div>
						<div>
							<div id="tab4" class="tab-grid" style="display: block;">
								<div class="row">
									<div class="col-md-6 pay-forms">
										<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
										<p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
										<a class="btn btn-primary">Thanh toán qua Paypal</a>
									</div>
									<div class="col-md-6 number-paymk">
										<form action="#" method="post" class="creditly-card-form-2 shopf-sear-headinfo_form">
											<section class="creditly-wrapper payf_wrapper">
												<div class="credit-card-wrapper">
													<div class="first-row form-group">
														<div class="controls">
															<label class="control-label">Chủ thẻ </label>
															<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
														</div>
														<div class="paymntf_card_number_grids my-2">
															<div class="fpay_card_number_grid_left">
																<div class="controls">
																	<label class="control-label">Số thẻ</label>
																	<input class="number credit-card-number-2 form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
																	    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
																</div>
															</div>
															<div class="fpay_card_number_grid_right mt-2">
																<div class="controls">
																	<label class="control-label">CVV</label>
																	<input class="security-code-2 form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••">
																</div>
															</div>
															<div class="clear"> </div>
														</div>
														<div class="controls">
															<label class="control-label">Ngày hết hạn</label>
															<input class="expiration-month-and-year-2 form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
														</div>
													</div>
													<input class="submit" type="submit" value="Proceed Payment">
												</div>
											</section>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->

  @include('frontend.inc.front-middle-section')

@endsection

