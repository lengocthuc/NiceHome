<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    @include('front-end.common.css')
    <style type="text/css">
    	.customm {
    		
			  width: 300px;
			  height : 150px; 
			  overflow: hidden;
			  text-overflow: ellipsis;
    	}
    </style>
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0&appId=1203814640127235&autoLogAppEvents=1" nonce="6lqenzMm">
    </script> -->
    <meta property="fb:admins" content="&#123;Love180901&#125;"/>
</head>
<body>
    @include('front-end.common.header')
    <section class="breadcrumb-blog set-bg" data-setbg="/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Bài viết</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="blog__section">
    	<div class="site__section" id="blog__section">
      <div class="container">
        <div class="row">
          
          @foreach($blogs as $blog)
          		<div class="blog__section__item col-md-6 col-lg-4 mb-4 mb-lg-4">
		            <div class="h-entry">
		              <img style="height: 235px;" src="/images/{{$blog->image}}" alt="Image" class="img-fluid">
		              <h2 class="font__size__regular"><a  class="text-black">{{$blog->title}}</a></h2>
		              <div class="meta mb-4">Love u <span class="mx-2">&bullet;</span> All time<span class="mx-2">&bullet;</span> </div>
		              <p class="customm">{{$blog->description}}</p>
		              <p><a href="/view-blog">Đọc tiếp...</a></p>
		            </div> 
         		 </div>
          @endforeach
          
        </div>
      </div>
    </div>
    </section>
    <div class="container">
            <div class="row">
                <div class="col-lg-12 comment">
                <div class="fb-comments" data-href="http://localhost:8003/" data-width="" data-numposts="5"></div>
                    <!--<div class="fb-comments" data-href="http://localhost:8888/" data-width="" data-numposts="8"></div>-->
                </div>
            </div>
            </div>
    </section>

    @include('front-end.common.footer')
    @include('front-end.common.js')
</body>
</html>