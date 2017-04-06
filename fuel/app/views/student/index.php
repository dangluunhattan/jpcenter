<div id="content">
    <div id="calltoaction">
    <div class="jumbotron">
      <h1>LOGO</h1>
    </div>
  </div>

<div id="feature">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">個人情報</h1>
        </div>
      </div>
    </div>
  </div>

<div id="feature1">
    <div class="container">    
            <div class="row">
                <div class="col-md-4">
                    <p>写真:</p>
                    <?php 
                        if($infos->image==null){
                      //      $infos->image ='<img src="/JPPROJECT/public/assets/img/NakatsugawaUi.jpg" width="200" height ="200"/>';
                            echo Asset::img('default.jpg',array('width=200', 'heigth=200'));
                        }
                        else { echo Asset::img($infos->image,array('width=200', 'heigth=200'));
                        }
                    ?> 
                    
                </div>      
                <div class ="col-md-8">
                    <br/>
                    <div class="form-group">
                      <div class="col-xs-6">
                         <p>生徒ID:</p>
                       </div>
                          <div class="col-xs-6">
                             <p><?php print_r($infos->id);?></p>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                         <p>名前:</p>
                       </div>
                          <div class="col-xs-6">
                             <p><?php print_r($infos->fullname); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                         <p>生年月日:</p>
                       </div>
                          <div class="col-xs-6">
                              <p><?php echo $infos->birthday;?></p>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                         <p>性別:</p>
                       </div>
                          <div class="col-xs-6">
                              <p><?php if($infos->gender==0){
                                 echo "男性";
                             }else {echo "女性";}
                             ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                         <p>電話番号:</p>
                       </div>
                          <div class="col-xs-6">
                             <p><?php print_r($infos->phonenumber); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                         <p>住所:</p>
                       </div>
                          <div class="col-xs-6">
                             <p><?php print_r($infos->address); ?></p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
  </div>
        
 
</div>