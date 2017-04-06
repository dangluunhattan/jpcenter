<?php isset($msg) ? '<script>alert("'.$msg.'")</script>' : '';?>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
                             <!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
    $(document).ready(function(){
        $('#username').on('keypress', function(e) {
                if (e.which === 32)
                    return false;
        });
        $("#username").val("<?php echo isset($username) ? $username : '';?>");
        $("#email").val("<?php echo isset($email) ? $email : '';?>");
        $("#name").val("<?php echo isset($name) ? $name : '';?>");
        $("#phone").val("<?php echo isset($phone) ? $phone : '';?>");
        $("textarea#address").val("<?php echo isset($address) ? $address : '';?>");
        $("#bday").val("<?php echo isset($bday) ? $bday : '';?>");
        <?php if(isset($gender)):?>
            var gender = <?php echo $gender ?>;
            switch (gender)
            {
                case 0:
                    $("#maleGender").attr('checked','true');
                    break;
                case 1:
                    $("#femaleGender").attr('checked','true');
                    break;
                default:
                    $("#unknownGender").attr('checked','true');
                    break;
            }
        <?php endif;?>
    });
    function validateForm()
    {
        return checkReEnterPass();
    }
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
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');        
</script>
    <div class="container text-center" style='padding-top: 30px; padding-bottom: 10px;'>
             <?php 
                echo Form::open(array('action' => 'login/doregister', 'method' => 'post','class'=>'form-horizontal','role'=>'form','onsubmit' => 'return checkReEnterPass();','enctype' => 'multipart/form-data'));
            ?>
        <div class='row'>    
            <div class='col-md-6'>
                <h4>ユーザー情報</h4>
                <div class="form-group">
                    <?php echo Form::label('ユーザ名','username',array('class'=>'col-sm-3 control-label')); ?>
                    <div class="col-sm-9">
                         <?php echo Form::input('username','',array('class'=>'form-control','required','maxlenght'=>'255','autofocus'=>'','id'=>'username','pattern'=>'[a-zA-Z0-9_-]+','title'=>"文字と数字と'_'と'-'のみ")); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::label('メールアドレス','email',array('class'=>'col-sm-3 control-label')); ?>
                    <div class="col-sm-9">
                        <?php echo Form::input('email','',array('class'=>'form-control','required','type'=>'email','id'=>'email','pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'));?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::label('パスワード','password',array('class'=>'col-sm-3 control-label')); ?>
                    <div class="col-sm-9">
                        <?php   echo Form::password('password','',array('id' => 'pass','class'=>'form-control','required','maxlenght'=>'255'));?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::label('パスワード再入力','repassword',array('class'=>'col-sm-3 control-label')); ?>
                    <div class="col-sm-9">
                        <?php  echo Form::password('repassword','',array('id' => 'pass2','class'=>'form-control','required','maxlenght'=>'255'));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">レジスター</button>
                    </div>
                </div>
            </div>
            <div class='col-md-6'>
                <h4>Personal info</h4>
                    <div class="form-group">
                         <?php echo Form::label('名前','name',array('class'=>'col-sm-3 control-label')); ?>
                        <div class="col-sm-9">
                             <?php echo Form::input('name','',array('class'=>'form-control','maxlenght'=>'255','id'=>'name')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">性別</label>
                        <div class="col-sm-6">
                            <div class="row" id='genterRadio'>
                            <div class="col-sm-4">
                                <?php
                                    echo Form::label('男性', 'gender',array('class'=>'radio-inline'));
                                    echo Form::radio('gender','1', array('checked'=>'true','id'=>'maleGender'));
                                ?>
                            </div>
                            <div class="col-sm-4">
                                <?php 
                                        echo Form::label('女性', 'gender',array('class'=>'radio-inline'));
                                        echo Form::radio('gender','0',array('id'=>'maleGender'));
                                ?>
                            </div>
                            <div class="col-sm-4">
                                 <?php 
                                        echo Form::label('不明', 'gender',array('class'=>'radio-inline'));
                                        echo Form::radio('gender','-1',array('id'=>'unknownGender'));
                                ?>
                            </div>
                        </div>
                        </div>
                    </div> <!-- /.form-group -->
                    <div class="form-group">  
                        <?php echo Form::label('電話番号','phone',array('class'=>'col-sm-3 control-label')); ?>
                        <div class="col-sm-9">
                           <?php echo Form::input('phone','',array('class'=>'form-control','id'=>'phone','pattern' => '[0-9]{10,15}','title'=>'正しい電話番号を入力してください')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('生年月日','bday',array('class'=>'col-sm-3 control-label')); ?>
                        <div class="col-sm-9">
                             <input class="col-sm-3 form-control" style="width:50%" id="bday" name="bday" type="date" />
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('住所','address',array('class'=>'col-sm-3 control-label','id'=>'address')); ?>
                        <div class="col-sm-9">
                            <?php echo Form::textarea('address','',array('class'=>'form-control','maxlenght'=>'255','style'=>'resize: none;','id'=>'address')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('写真','avatar',array('class'=>'col-sm-3 control-label')); ?>
                         <div class='col-sm-9'>
                            <?php echo Form::file(array('id'=>'avatar','name'=>'avatar')); ?>
                         </div>
                    </div>
            </div>
        </div>
             <?php 
                echo Form::close();
            ?>
    </div> <!-- ./container -->
