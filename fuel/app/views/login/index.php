<?php
    if(isset($error))
    {
        echo '<script>alert("'.$error.'！");</script>';
    }
?>
     <script>
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                document.getElementById("gg-id").value =  profile.getId();
                document.getElementById("gg-email").value = profile.getEmail();
                document.getElementById("gg-name").value = profile.getName();
                document.getElementById("gg-login").submit();
                signOut();
            }
            function signOut() {
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut();
              }


            
            (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1868262083430162";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1868262083430162',
              cookie     : true,
              xfbml      : true,
              version    : 'v2.8'
            });
            FB.AppEvents.logPageView();  
            
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
            function checkLoginState() 
            {
                FB.getLoginStatus(function(response) {
                  statusChangeCallback(response);
                });
            }
            function statusChangeCallback(response)
            {
                if (response.status === 'connected') {

                  var uid = response.authResponse.userID;
                  var accessToken = response.authResponse.accessToken;
                  FB.api('/me', 'get', { access_token: accessToken, fields: 'id,name,gender,email,location,birthday' }, function(response2) {

                        var bdayString = response2.birthday.split("/");
                        var bdayDate =  bdayString[2]+"-"+bdayString[0] + "-" +bdayString[1];
                        if(response2.gender == "male")
                        {
                            var gender = "0";
                        }else{
                            var gender = "1";
                        }
                        document.getElementById("fb-name").value = response2.name;
                        document.getElementById("fb-bday").value = bdayDate;
                        document.getElementById("fb-location").value = response2.location.name;
                        document.getElementById("fb-id").value = response2.id;
                        document.getElementById("fb-email").value = response2.email;
                        document.getElementById("fb-gender").value = gender;
                        document.getElementById("fb-login").submit();
                        FB.logout();
                  });
                } else if (response.status === 'not_authorized') {
                  alert('Not Authorized !!!!');
                } else {
                  alert('Not Logged In Save Book !!!!');
                }
            }
        </script>
        <!---End FB Login API-->
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>ログインページ</h1>
                        <div class="head">
						<?php echo Asset::img('user.png',array('class'=>'img-responsive'))?>
					</div>
                                        <?php 
                                                echo Form::open('login/dologin');
                                                echo Form::Input('username','',array('placeholder' => 'ID'));
                                                echo Form::Password('password','',array('placeholder' =>'ログイン','style'=>'margin-bottom:0px'));
                                                echo '<div>';
                                                    echo Form::label('Remember Me', 'remember');
                                                    echo Form::checkbox('remember','Remember',false,array('style'=>'margin-left: 5px;'));
                                                echo '</div>';
                                                echo '<div class="submit">';
						echo Form::Submit('loginSubmit','ログイン');
                                                echo '</div>'
                                        ?>
                                                <div class ="row fb-gg-login">
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="fb-btn">
                                                          <fb:login-button size="large" scope="public_profile,email,user_location,user_birthday" onlogin="checkLoginState();" size="large">
                                                              Login With Facebook
                                                          </fb:login-button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12" style="text-align: center">
                                                            <div id="google-btn" class="g-signin2" data-onsuccess="onSignIn" data-width="long"></div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-6 col-xs-12">
                                                        <p class="pass-recover" ><a data-toggle="modal" data-target="#forgotpassModal" style="cursor: pointer;">ログインできない ?</a></p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <p  class="register" ><a data-toggle="modal" data-target="#registerModal" style="cursor: pointer;">新規取得</a></p>
                                                    </div>
                                                </div>   
                                        <?php 
                                                echo Form::close();
                                        ?>
                </div>
		<!--//End-login-form-->
                <!--Password recorery-->
                <div id="forgotpassModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="margin: 0 auto">Quen Mat Khau</h4>
				</div>
				<?php 
                                    echo Form::open(array('action' => 'login/passwordrecovery/', 'method' => 'post','style'=>'padding-bottom: 0px','onsubmit' => 'return checkReEnterPass();'));
                                ?>
					<div class="modal-body" style="margin-bottom: 0px; padding:0px">
                                                  <div class="input-group">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
							<?php 
                                                           echo Form::input('email','',array('placeholder'=>'email address','class'=>'form-control','required','type'=>'email','pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'));
                                                        ?>
                                                        </div>
                                             <div class="form-group" style="padding-top: 24px; width: 75%; margin: 0 auto">
                                                <input name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                            </div>
                                        </div>
				 <?php echo Form::close(); ?>
			</div>
		</div>
	</div>
                <!--End of Password recorery-->
                <!--Register Modal-->
                <div id="registerModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">情報を記入してください</h4>
				</div>
				<?php 
                                    echo Form::open(array('action' => 'login/register', 'method' => 'post','style'=>'padding-bottom: 0px','onsubmit' => 'return checkReEnterPass();'));
                                ?>
                            <div class="register-head">
                                <?php echo Asset::img('register.png',array('class'=>'img-responsive','style' => 'margin: 0 auto; height: 64px ; width: 64px;'));?>
                            </div>
					<div class="modal-body" style="margin-bottom: 0px; padding:0px">
							<?php 
                                                            echo Form::label('ユーザ名','username');
                                                            echo Form::input('username','',array('class'=>'register-input','required','maxlenght'=>'255'));
                                                            echo Form::label('メールアドレス','email');
                                                            echo Form::input('email','',array('class'=>'register-input','required','type'=>'email','pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'));
                                                            echo Form::label('パスワード','password');
                                                            echo Form::password('password','',array('id' => 'pass','class'=>'register-input','required','maxlenght'=>'255'));
                                                            echo Form::label('パスワード再入力','repassword');
                                                            echo Form::password('repassword','',array('id' => 'pass2','class'=>'register-input','required','maxlenght'=>'255'));
                                                        ?>
                                                        <script>
                                                            function checkReEnterPass()
                                                            {
                                                                var pass = $("#pass").val();
                                                                var pass2 = $("#pass2").val();
                                                                if(pass === pass2)
                                                                {
                                                                    return true;
                                                                }
                                                                alert('パスワード再入力を正しく入力してください。 ');
                                                                return false;
                                                            }
                                                        </script>
					</div>
					<div class="modal-footer">
                                            <button type="submit" class="btn btn-info">レジスター</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">戻る</button>
					</div>
				 <?php echo Form::close(); ?>
			</div>
		</div>
	</div>
                <!--End Register Modal-->
                
			 <!-----start-copyright---->
<!--   					<div class="copy-right">
						<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
					</div>-->
				<!-----//end-copyright---->
                                	 <!-----//end-main---->
                <?php 
                    echo Form::open(array('action' => 'login/fblogin', 'method' => 'post','id' =>'fb-login', 'style' =>'display: none'));
                    echo Form::input('id','',array('id'=>'fb-id'));
                    echo Form::input('email','',array('id'=>'fb-email'));
                    echo Form::input('bday','',array('id'=>'fb-bday'));
                    echo Form::input('location','',array('id'=>'fb-location'));
                    echo Form::input('name','',array('id'=>'fb-name'));
                    echo Form::input('gender','',array('id'=>'fb-gender'));
                    echo Form::close();
                    
                    echo Form::open(array('action' => 'login/gglogin', 'method' => 'post','id' =>'gg-login', 'style' =>'display: none'));
                    echo Form::input('id','',array('id'=>'gg-id'));
                    echo Form::input('email','',array('id'=>'gg-email'));
                    echo Form::input('name','',array('id'=>'gg-name'));
                    echo Form::close(); 
                ?>	
        </div>
        