<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php echo Asset::js('recovery.js');?>
<?php echo Form::open(array('action'=>'recovery/reset','class'=>'form-horizontal','method'=>'post','onsubmit'=>'return checkRepeatPass()'))?>
<fieldset>
<!-- Form Name -->
<legend>パースワード変更</legend>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
    <?php 
    echo Form::input('password','',array('placeholder'=>'新しいパスワード','class'=>'form-control','required','type'=>'password', 'required','id'=>'pass'));
    ?>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-repeat color-blue"></i></span>
    <?php 
    echo Form::input('repeatpassword','',array('placeholder'=>'パスワード再入力','class'=>'form-control','required','type'=>'password', 'required','id'=>'repeate-pass'));
    ?>
  </div>
<!-- Button (Double) -->
<div class="input-group btn-submit-container text-center">
    <button id="btnSubmit" name="id" class="btn btn-success" disabled value='<?php echo $id ?>'>変更</button>
</div>

</fieldset>
<?php echo Form::close(); ?>