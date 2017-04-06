<div class="hot-slider">
    <div id="myCarousel" class="carousel slide" data-interval="20000" data-ride="carousel">
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
<div class="coursesblock">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">いろいろな相手にカリキュラムがある！</h2>
                <div class="row" style="margin: 0px 5px;">
                    <a href="#">
                        <div class="col-sm-4" style="padding:5px;">
                            <div class="card card-inverse" style="height: 20rem; position:relative;">
                                <?php echo Asset::img('card/card1.jpg', array('alt' => 'Card Image', 'class' => 'card-img')); ?>
                                <div class="card-img-overlay" style="background-color: rgba(0,0,0, 0.7); overflow: hidden;">
                                    <h4 class="card-title">初歩の日本語</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida tortor enim, et auctor elit accumsan at. Integer elementum, elit ac bibendum viverra, sem nunc viverra mauris, maximus convallis elit tortor sed turpis. Fusce non risus et nisi varius dapibus. Curabitur felis est, pellentesque id lobortis ac, mollis ac felis.</p>

                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="col-sm-4" style="padding:5px;">
                            <div class="card card-inverse" style="height: 20rem; position:relative;">
                                <?php echo Asset::img('card/card2.jpg', array('alt' => 'Card Image', 'class' => 'card-img')); ?>
                                <div class="card-img-overlay" style="background-color: rgba(0,0,0, 0.7); overflow: hidden;">
                                    <h4 class="card-title">オフィスの日本語</h4>
                                    <p class="card-text">Quisque consequat sagittis quam, vel facilisis elit laoreet efficitur. Integer in sem ultricies, vulputate ante sit amet, molestie augue. Maecenas porta diam at ipsum fermentum ullamcorper. In hac habitasse platea dictumst. Quisque enim mi, iaculis in pretium sed, iaculis non enim. Fusce iaculis egestas erat, ut blandit arcu consequat et. Phasellus vulputate enim in molestie rhoncus.</p>

                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="col-sm-4" style="padding:5px;">
                            <div class="card card-inverse" style="height: 20rem; position:relative;">
                                <?php echo Asset::img('card/card3.jpg', array('alt' => 'Card Image', 'class' => 'card-img')); ?>
                                <div class="card-img-overlay" style="background-color: rgba(0,0,0, 0.7); overflow: hidden;">
                                    <h4 class="card-title">JLPT試験の練習</h4>
                                    <p class="card-text">Integer justo mauris, pellentesque quis quam ut, auctor porta nulla. Nullam sed ligula vel enim mollis varius sit amet at tortor. Suspendisse eu arcu elit. Mauris placerat ut nulla vel ullamcorper. Suspendisse ultricies laoreet massa. Phasellus eget metus efficitur, interdum sapien non, rhoncus nunc.</p>

                                </div>
                            </div>
                        </div>
                    </a>
                </div><br>

                <button type="button" class="btn btn-default">
                    もっと見る>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="reasonblock">
    <div class="container">
        <h2>どうして「FOIS SMILE」を選ぶ？</h2>
        <div class="row">
            <div class="col-sm-6">
                <h3>日本で働くチャンスがある！</h3>
                <p>フォイススマイル日本語・ITセンターは日本の企業FOISが運営する学校です。そのため、一般的な日本語だけでなく実用的な日本語を勉強することができます。
                    日本のフォイスではエンジニアの派遣事業も行っており、多くのIT会社とつながりがあります。このつながりがあるからこそ、ブリッジSEコースを卒業した方の日本での就職をしっかりとサポートすることができます。</p>
            </div> 
            <div class="col-sm-6">
                <?php echo Asset::img('homepage/japanwork.jpg', array('alt' => 'Work in Japan', 'class' => '')); ?>
            </div> 
        </div><hr>
        <div class="row">
            <div class="col-sm-6">
                <?php echo Asset::img('homepage/conversation.jpg', array('alt' => 'BrSE program', 'class' => '')); ?></div> 
            <div class="col-sm-6">
                <h3>BrSEにカリキュラムがある！</h3>
                <ol>
                    <li>単なる日本語は教えません。
                        <b>様々な仕事で活躍できる日本語とIT</b>を教えます。</li>
                    <li>
                        <b>少人数制</b>だからしっかり覚えられる！</li>
                    <li>
                        <b>日本のIT企業で20年以上実績</b>のある
                        「IT人財育成カリキュラム」を使用。</li>
                    <li>
                        日本に行ってからの<b>サポート</b>と<b>継続教育</b>が万全
                        （東京・名古屋・大阪）</li>
                    <li>
                        日本で働くための仕事や会社の紹介が可能。</li>
                </ol>
            </div> 
        </div><hr>
        <div class="row">
            <div class="col-sm-6">
                <h3>日本文化体験</h3>
                <p>毎月１回、浴衣着付けや書道、まんがなど日本の文化を体験できるイベント開催中しております。
                    参加費は無料なので、ぜひ一度足を運んでみてください。</p>
                <ol>
                    <li>開催日時：月１回（土曜日開催）　16:00～20:00</li>
                    <li>参加資格：受講生・受講生の紹介者・事前予約の方</li>
                    <li>参加費用：無料</li>
                    <li>場所：ＦＯＩＳスマイルビル</li>
                    <li>参加人数：２４名（先着順）　※若干の増加は対応可能</li>
                </ol>
            </div> 
            <div class="col-sm-6">            
                <?php echo Asset::img('homepage/japanculture.jpg', array('alt' => 'pricequality', 'class' => '')); ?>
            </div> 
        </div>
    </div>
</div>
<div class="regblock">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>学費</h2>
                <table class="table">
                    <thead>
                        <tr class="warning">
                            <th>コース</th>
                            <th>学費</th>
                            <th>合計時間</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="active">
                            <td>日本語・JLPT試験の練習</td>
                            <td>900.000vnd/月</td>
                            <td>108時間</td>
                        </tr>      
                        <tr class="warning">
                            <td>日本語・オフィス</td>
                            <td>1.500.000vnd/月</td>
                            <td>72時間</td>
                        </tr>
                        <tr class="active">
                            <td>日本語・初歩</td>
                            <td>2.000.000vnd/月</td>
                            <td>144時間</td>
                        </tr>
                        <tr class="warning">
                            <td>ベトナム語・VLPT試験の練習</td>
                            <td>120.000vnd/時間</td>
                            <td>108時間</td>
                        </tr>      
                        <tr class="active">
                            <td>ベトナム語・オフィス</td>
                            <td>150.000vnd/時間</td>
                            <td>72時間</td>
                        </tr>
                        <tr class="warning">
                            <td>ベトナム語・初歩</td>
                            <td>200.000vnd/時間</td>
                            <td>144時間</td>
                        </tr>                        
                    </tbody>
                </table>
                <div class="promotion">
                    <div class="row"> 
                        <div class="col-xs-9">
                            <h3>まずは、無料体験レッスン!!</h3>
                            <h4>スタッフとのカウンセリング付き</h4>
                        </div>
                        <div class="col-xs-3">
                            <h1>90分</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>今すぐ、コースを登録しよう</h2>
                <?php echo Form::open(array("class" => "form-horizontal")); ?>
                <fieldset>
                    <div class="row form-group">
                        <?php
                        echo Form::label('名前:', 'name', array('class' => 'control-label'));
                        echo Form::input('name', Input::post('name', ''), array('class' => 'form-control', 'placeholder' => '名前'));
                        ?>
                    </div>

                    <div class="row form-group">
                        <?php
                        echo Form::label('メールアドレス:', 'email', array('class' => 'control-label'));
                        echo Form::input('email', Input::post('email', ''), array('class' => 'form-control', 'placeholder' => 'メールアドレス'));
                        ?>
                    </div>

                    <div class="row form-group">
                        <?php
                        echo Form::label('電話番号：', 'phone', array('class' => 'control-label'));
                        echo Form::input('phone', Input::post('phone', ''), array('class' => 'form-control', 'placeholder' => '電話番号'));
                        ?>
                    </div>
                    <div class="row form-group">
                        <?php
                        echo Form::label('コース：', 'course', array('class' => 'control-label'));
                        echo Form::select('course', 'none', array(
                            'none' => '-----',
                            '日本語' => array(
                                'jpn1st' => '初歩の日本語',
                                'jpnoffice' => 'オフィスの日本語',
                                'jlptn4' => 'JLPT試験の練習・N4',
                                'jlptn3' => 'JLPT試験の練習・N3',
                                'jlptn2' => 'JLPT試験の練習・N2',
                                'jlptn4' => 'JLPT試験の練習・N4',
                            ),
                            'ベトナム語' => array(
                                'vn1st' => '初歩のベトナム語',
                                'vnoffice' => 'オフィスのベトナム語',
                                'vlpt' => 'VLPT試験の練習',
                            )
                                ), array('class' => 'form-control'));
                        ?>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-6" style="padding-left: 0px;">
                            <?php
                            echo Form::label('授業の日：', 'studyday', array('class' => 'control-label'));
                            echo Form::select('studyday', 'none', array(
                                'none' => '-----',
                                'mowefr' => '月・水・金',
                                'tuthsa' => '火・木・土'
                                    ), array('class' => 'form-control'));
                            ?>
                        </div>
                        <div class="col-xs-6" style="padding-right: 0px;">
                            <?php
                            echo Form::label('授業の時間：', 'studytime', array('class' => 'control-label'));
                            echo Form::select('studytime', 'none', array(
                                'none' => '-----',
                                'seni' => '7時-9時',
                                'eite' => '8時-10時',
                                'niel' => '9時-11時',
                                'tetw' => '10時-12時',
                                'thtfit' => '13時-15時',
                                'fitset' => '15時-17時',
                                'setnit' => '17時-19時',
                                'nitw' => '19時-21時'
                                    ), array('class' => 'form-control'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <?php echo Form::submit('submit', '登録', array('class' => 'btn btn-warning btn-block btn-lg')); ?>
                    </div>
                </fieldset>
                <?php echo Form::close(); ?>   
            </div>
        </div>       
    </div>    
</div>

<div class="newsblock">
    <div class="row">
        <div class="col-md-12">
            <h2>ニュース</h2><hr/>
            <?php foreach ($news as $emp): ?>
                <div class="row">
                    <div class="col-xs-3 new-date">
                        <?php
                        echo substr($emp->created_at, 0, 4) . "年"
                        . substr($emp->created_at, 5, 2) . "月"
                        . substr($emp->created_at, -2) . "日";
                        ?>
                    </div>
                    <div class="col-xs-2 new-type">
                        <?php echo $emp->category->name; ?>
                    </div>
                    <div class="col-xs-7 new-title">
                        <a href="/news/<?php echo $emp->id; ?>">
                            <?php echo $emp->title; ?>
                        </a>
                    </div>
                </div> <hr>
            <?php endforeach; ?>
            <button type="button" class="btn btn-default">
                もっと見る>
            </button>
        </div>
    </div>


</div>
<div id="map-container">
    <div id="map"></div>
    <div class="map-info">
        <h2>場所</h2>
        <hr>
        <p>本社: フォイスベトナム有限会社 （略称） FOIS-VN</p>
        <p>所在地: 200番D5通り25丁目ビンタン区ホーチミン市</p>
        <p>TEL: (84-8) 6281-0011</p>
        <hr>
        <p>支社: FOISスマイル日本語・ITセンター</p>
        <p>所在地: 15B/96番レトハントン通りベンノゲ丁1区目ホーチミン市</p>
        <p>TEL: (84-8) 6281-0011</p>
    </div>
</div>

<script>
    function myMap() {
        var center = new google.maps.LatLng(10.800895, 106.701700);
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
            content: "200番D5通り25丁目ビンタン区ホーチミン市"
        });
        infowindow1.open(map, marker);
        var infowindow2 = new google.maps.InfoWindow({
            content: "15B/96番レトハントン通りベンノゲ丁1区目ホーチミン市"
        });
        infowindow2.open(map, marker2);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmgxAc6NzCeoRTOFyuhX2ROxZ5TvlLkhY&callback=myMap"></script>
