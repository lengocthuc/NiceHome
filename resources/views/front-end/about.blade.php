<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    @include('front-end.common.css')
</head>
<body>
    @include('front-end.common.header')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Cừa hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Trang chủ</a>
                            <img src="/images/right-arrow.png">
                            <span>Thông tin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    	<div class="site__section" id="about__section">
	      <div class="container">
	        <div class="row align-items-lg-center">
	          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
	            <img src="images/pk-hien-dai.jpg" class="img-fluid" alt="Image">
	            <div class="experience">
	              <span class="year">Doanh nghiệp hàng đầu</span>
	              <span class="caption">trong 5 năm</span>
	            </div>
	          </div>
	          <div class="col-md-3 ml-auto">
	            <h3 class="section__sub__title">Doanh nghiệp</h3>
	            <h3 style="font-size: 36px;" class="section__title mb-3">NICE HOME</h3>
	            <p class="mb-4">Cung cấp và đưa tới cho người tiêu dùng những sản phẩm có chất lượng hàng đầu, được nhập chính hãng từ các tập đoàn lớn</p>
	            <p><a   class="section__learn-more rounded-0">Đọc thêm</a></p>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>
    <section class="services">
    	<div class="site__section bg-light" id="services__section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section__sub__title">Dịch vụ</h3>
            <h2 class="section__title mb-3">Dịch vụ của chúng tôi</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="/images/icon1.png"></div>
              <div>
                <h3>Tư vấn khách hàng</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a  >Đọc thêm</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="/images/icon2.png"></div>
              <div>
                <h3>Phân tích sản phẩm</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a  >Đọc thêm</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="/images/icon3.png"></div>
              <div>
                <h3>Giám sát người dùng</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a  >Đọc thêm</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="/images/icon4.png"></div>
              <div>
                <h3>Bảo hành 12 tháng</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a  >Đọc thêm</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="/images/icon5.png"></div>
              <div>
                <h3>Nguồn nhập tin cậy</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a  >Đọc thêm</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="/images/icon6.png"></div>
              <div>
                <h3>Dịch vụ hậu mãi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a  >Đọc thêm</a></p>
              </div>
            </div>
          </div>
    </section>
    @include('front-end.common.footer')
    @include('front-end.common.js')
</body>
</html>