<div id="content">
  <!-- Slide begin -->
  <div class="hot-slider">
    <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <?php echo Asset::img('slider/slide1.jpg', array('alt' => 'First Slide')); ?>
                <div class="carousel-caption">
                    <!--                  <h3>First slide label</h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                </div>
            </div>
            <div class="item">
                <?php echo Asset::img('slider/slide2.jpg', array('alt' => 'Second Slide')); ?>
                <div class="carousel-caption">
                    <!--                  <h3>Second slide label</h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                </div>
            </div>
            <div class="item">
                <?php echo Asset::img('slider/slide3.jpg', array('alt' => 'Third Slide')); ?>
                <div class="carousel-caption">
                    <!--                  <h3>Third slide label</h3>
                                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>-->
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- End slide -->

<!-- flash begin -->
<?php if(Session::get_flash('success')):?>
      <div class='alert alert-success text-center'>
        <span style="font-size: 130%" class="glyphicon glyphicon-ok-circle"> <?php echo Session::get_flash('success'); ?></span>
      </div>
  <?php endif; ?>

  <?php if(Session::get_flash('error')):?>
      <div class='alert alert-danger text-center'>
        <span style="font-size: 130%" class="glyphicon glyphicon-exclamation-sign"> <?php echo Session::get_flash('error'); ?></span>
      </div>
  <?php endif; ?>
<!-- flash end -->

  <div id="feature">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">お問い合わせ</h2>
        </div>
      </div>
    </div>
  </div>

  <div id="feature1">
    <div class="container">
      <div class="row" style="height: 500px;">

        <!-- form support -->
        <div class="col-sm-8">
          <h3 class="text-center">メールでのお問い合わせ</h3>
          <hr>

          <form class="form-horizontal" method="post" action="/contact/contact/" enctype="multipart/form-data">

            <div class="form-group">
              <label for="名前" class="col-sm-3 control-label">お名前</label>
              <div class="col-sm-9">
                <input name="name" type="text" class="form-control input-lg" id="inputName" placeholder="お名前" tabindex="1">
                <div class="clear"></div>
                <?php if (Session::get_flash('err_name')): ?>
                  <div class="error" style="color: #e74c3c;" id="err_name"><?php echo Session::get_flash('err_name'); ?></div>
                <?php endif ?>
                
              </div>
            </div>

            <div class="form-group">
              <label for="メールアドレス" class="col-sm-3 control-label">メールアドレス</label>
              <div class="col-sm-9">
                <input name="email" type="text" class="form-control input-lg" id="inputEmail" placeholder="メールアドレス" tabindex="2">
                
                <?php if (Session::get_flash('err_email')): ?>
                  <div class="error" style="color: #e74c3c;" id="err_email"><?php echo Session::get_flash('err_email'); ?></div>
                <?php endif ?>
              </div>
            </div>

            <div class="form-group">
              <label for="電話番号" class="col-sm-3 control-label">お電話番号</label>
              <div class="col-sm-9">
                <input name="phone" type="number" class="form-control input-lg" id="inputPhone" placeholder="お電話番号" tabindex="3">
               <?php if (Session::get_flash('err_phone')): ?>
                  <div class="error" style="color: #e74c3c;" id="err_phone"><?php echo Session::get_flash('err_phone'); ?></div>
                <?php endif ?>
              </div>
            </div>

            <div class="form-group">
              <label for="アドレス" class="col-sm-3 control-label">アドレス</label>
              <div class="col-sm-9">
                <input name="address" type="text" class="form-control input-lg" id="inputAddress" placeholder="アドレス" tabindex="4">
                
                <?php if (Session::get_flash('err_address')): ?>
                  <div class="error" style="color: #e74c3c;" id="err_address"><?php echo Session::get_flash('err_address'); ?></div>
                <?php endif ?>
              </div>
            </div>

            <div class="form-group">
              <label for="タイトル" class="col-sm-3 control-label">タイトル</label>
              <div class="col-sm-9">
                <input name="title" type="text" class="form-control input-lg" id="inputTitle" placeholder="タイトル" tabindex="5">
                
                <?php if (Session::get_flash('err_title')): ?>
                  <div class="error" style="color: #e74c3c;" id="err_title"><?php echo Session::get_flash('err_title'); ?></div>
                <?php endif ?>
              </div>
            </div>

            <div class="form-group">
              <label for="内容" class="col-sm-3 control-label">内容</label>
              <div class="col-sm-9">
                <textarea name="content" class="form-control input-lg" rows="12" id="inputContent" placeholder="..." tabindex="6"></textarea>
                
                 <?php if (Session::get_flash('err_content')): ?>
                 <div class="error" style="color: #e74c3c;" id="err_content"><?php echo Session::get_flash('err_content'); ?></div>
                <?php endif ?>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn-lg btn-primary" tabindex="6">確認する</button>
              </div>
            </div>

          </form>
         
        </div>
        <!-- End form support -->


        <div class="col-sm-4" >
        <div>
          <div class="info-box">
                      <h3 class="text-left">お電話でのお問い合わせ</h3>
                      <hr>
                      <ul>
                        <li><span style="font-size: 130%" class="glyphicon glyphicon-envelope">&nbspdangluunhattan@gmail.com</span></li>
                        <li><span style="font-size: 130%" class="glyphicon glyphicon-earphone">&nbsp0943 541 741(　諮問　)</span></li>
                        
                      </ul>
        </div>
          
          <hr/>

            <div id="fb-root" class="text-left" style="width:auto; height: auto;">
                   <div class="fb-page" data-tabs="timeline,messages,events" data-href="https://www.facebook.com/%C4%90i%E1%BB%87n-Tho%E1%BA%A1i-Nh%E1%BA%ADt-T%C3%A2n-1790123254589833/?skip_nax_wizard=true" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                       <blockquote cite="https://www.facebook.com/%C4%90i%E1%BB%87n-Tho%E1%BA%A1i-Nh%E1%BA%ADt-T%C3%A2n-1790123254589833/?skip_nax_wizard=true" class="fb-xfbml-parse-ignore">
                           <a href="https://www.facebook.com/%C4%90i%E1%BB%87n-Tho%E1%BA%A1i-Nh%E1%BA%ADt-T%C3%A2n-1790123254589833/?skip_nax_wizard=true">Điện Thoại Nhật Tân</a>
                       </blockquote>
                       data-tabs="events"
                   </div>
               </div>
        </div>
      </div>
    </div> <!-- End row -->
  </div><!-- End container -->
</div><!-- End feature1 -->
<div id="map-container">
    <div id="map"></div>
    <div class="map-info">
        <h2>場所</h2>
        <hr>
        <p>本社: フォイスベトナム有限会社 （略称） FOIS-VN</p>
        <p>所在地: 200番Ｄ５通り25丁目ビンタン区ホーチミン市</p>
        <p>TEL: (84-8) 6281-0011</p>
        <hr>
        <p>支社: FOISスマイル日本語・ITセンター</p>
        <p>所在地: 15B/96番レトハントン通りベンノゲ丁１区目ホーチミン市</p>
        <p>TEL: (84-8) 6281-0011</p>
    </div>
</div>
</div><!-- End content -->
 <script>
 (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1799706053648152";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>
 <script>
    function myMap() {
        var center = new google.maps.LatLng(10.800895, 106.661842);
        var location1 = new google.maps.LatLng(10.805738, 106.716307);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: center, zoom: 13};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position: location1});
        marker.setMap(map);
        var location2 = new google.maps.LatLng(10.780135, 106.705689);
        var marker2 = new google.maps.Marker({position: location2});
        marker2.setMap(map);
        var infowindow1 = new google.maps.InfoWindow({
            content: "200番Ｄ５通り25丁目ビンタン区ホーチミン市"
        });
        infowindow1.open(map, marker);
        var infowindow2 = new google.maps.InfoWindow({
            content: "15B/96番レトハントン通りベンノゲ丁１区目ホーチミン市"
        });
        infowindow2.open(map, marker2);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmgxAc6NzCeoRTOFyuhX2ROxZ5TvlLkhY&callback=myMap"></script>