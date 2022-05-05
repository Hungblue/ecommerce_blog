<div id="small-dialog1" class="mfp-hide">
  <div class="select-city">
    <h3>
      <i class="fas fa-map-marker"></i> Vui lòng chọn vị trí của bạn</h3>
    <select class="list_of_cities">
      <optgroup label="Một Số Thành Phố">
        <option selected style="display:none;color:#eee;">Chọn thành phố</option>
        <option>Hà Nội</option>
        <option>HCM</option>
        <option>Long Biên</option>
        <option>Thái Bình</option>
        <option>Bắc Giang</option>
        <option>Bắc Kạn</option>
        <option>Bắc Ninh</option>
        <option>Bến Tre</option>
        <option>Biên Hòa</option>
        <option>Buôn Ma Thuột</option>
        <option>Cam Ranh</option>
        <option>Cao Bằng</option>
        <option>Cao Lãnh</option>
        <option>Cà Mau</option>
      </optgroup>
      <optgroup label="Ninh Bình">
        <option>Ninh Bình</option>
        <option>Tam Điệp</option>
      </optgroup>
      <optgroup label="Thái Nguyên">
        <option>Phổ Yên</option>
        <option>Sông Công</option>
      </optgroup>
      <optgroup label="Arizona">
        <option>Phoenix</option>
        <option>Tucson</option>
        <option>Mesa</option>
        <option>Chandler</option>
        <option>Glendale</option>
      </optgroup>
      <optgroup label="Ninh Thuận">
        <option>Phan Rang – Tháp Chàm</option>
      </optgroup>
      <optgroup label="Quảng Ninh">
        <option>Uông Bí</option>
        <option>Móng Cái</option>
        <option>Hạ Long</option>
        <option>Cẩm Phả</option>
      </optgroup>
      <optgroup label="Bình Dương">
        <option>Thủ Dầu Một</option>
        <option>Thuận An</option>
        <option>Dĩ An</option>
      </optgroup>
      <optgroup label="Hải Dương">
        <option>Hải Dương</option>
        <option>Chí Linh</option>
      </optgroup>

    </select>
    <div class="clearfix"></div>
  </div>
</div>
<!-- //shop locator (popup) -->

<!-- modals -->
<!-- log in -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Đăng nhập</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="form-group">
            <label class="col-form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" placeholder=" " name="Name" required="">
          </div>
          <div class="form-group">
            <label class="col-form-label">Mật khẩu</label>
            <input type="password" class="form-control" placeholder=" " name="Password" required="">
          </div>
          <div class="right-w3l">
            <input type="submit" class="form-control" value="Log in">
          </div>
          <div class="sub-w3l">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
              <label class="custom-control-label" for="customControlAutosizing">Ghi nhớ đăng nhập?</label>
            </div>
          </div>
          <p class="text-center dont-do mt-3">Chưa có tài khoản?
            <a href="#" data-toggle="modal" data-target="#exampleModal2">
              Đăng ký ngay</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- register -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Đăng ký</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="form-group">
            <label class="col-form-label">Tên</label>
            <input type="text" class="form-control" placeholder=" " name="Name" required="">
          </div>
          <div class="form-group">
            <label class="col-form-label">Email</label>
            <input type="email" class="form-control" placeholder=" " name="Email" required="">
          </div>
          <div class="form-group">
            <label class="col-form-label">Mật khẩu</label>
            <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
          </div>
          <div class="form-group">
            <label class="col-form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
          </div>
          <div class="right-w3l">
            <input type="submit" class="form-control" value="Register">
          </div>
          <div class="sub-w3l">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
              <label class="custom-control-label" for="customControlAutosizing2">Tôi đồng ý với các Điều khoản & Điều kiện</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>