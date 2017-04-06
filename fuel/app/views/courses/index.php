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
        <div class="col-md-12">
          <h1 class="text-center">コースのリスト</h1>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div id="feature1">
    <div class="container">
      <div class="row" style="height: 500px;">
        
            <div class="col-md-3">
                <div class ="row">
                    <div class="col-md-12 alert-success">
                            <h4>
                                <a href="/student/index">あなたの個人情報</a>
                            </h4>
                    </div>
                    <div class="col-md-12">
                        <h4>
                             <a href="#">あなたのコース</a>
                        </h4>
                    </div>
                    <div class="col-md-12">
                        <h4>
                            <a href="#">スケジュール</a>
                        </h4>
                    </div>
                    <div class="col-md-12">
                        <h4>
                            <a href="#">コースを登録</a>
                        </h4>
                    </div>
                </div>
            </div>        

        <div class="col-md-9">
                <table class="table table-bordered text-center">
                    <thead>
                      <tr>
                        <th >登録ID</th>
                        <th>コースID</th>
                        <th>レッスン名</th>
                        <th>教師の名前</th>
                        <th>登録の日</th>
                        <th>開始日</th>
                        <th>学資</th>
                        <th>状態</th>
                        <th>紹介</th>
                        <th>詳細</th>
                      </tr>
                    </thead>
                    <tbody>
                         <?php 
                         $i = 0;
                         foreach($registes as $register): ?>
                      <tr>
                        <td><?php echo $register['id']; ?></td>
                        <td><?php echo $register['course_id']; ?></td>
                        <td><?php echo $subjects[$i]->name; ?></td>
                        <td><?php echo $teachers[$i]->fullname;?></td>
                        <td><?php echo $register['date_regis']; ?></td>
                        <td><?php echo $courses[$i]->start_date;?></td>
                        <td><?php echo $courses[$i]->fee?></td>>
                        <td><?php if($register['confirm_regis']==1){
                            echo "Đã đóng học phí!";
                        }else echo "Chưa đóng học phí!"; ?></td>
                        <td><?php echo $register['note']; ?></td>
                        <td><button class="btn btn-default">Chi tiết</td>
                      </tr>
                          <?php $i++;
                          endforeach; ?> 
                    </tbody>
                  </table>

            
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