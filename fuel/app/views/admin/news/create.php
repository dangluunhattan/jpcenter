

<!-- general form elements disabled -->
              <div class="box box-warning">

                <div class="box-header with-border">
                  <h3 class="box-title"><b>新しいニュースを作成する</b></h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <form role="form" class="form" id="form" action="" method="post" enctype="multipart/form-data">
                    <!-- text input -->
                    <div class="form-group">
                      <label>タイトル</label>
                      <input name="title" type="text" class="form-control" placeholder="..." value="">
                    </div>
                    <div class="clear"></div>
                    <?php if (Session::get_flash('err_title')): ?>
                      <div class="error" style="color: #e74c3c;" id="err_title"><?php echo Session::get_flash('err_title'); ?></div>
                    <?php endif ?>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>カテゴリー</label>

                      <select class="form-control" name="category_id" >
                        <option value="">--None--</option>
                      <?php foreach ($category as $category): ?>
                      	<option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>

                      <?php endforeach ?>
                      </select>
                    </div>
                    <div class="clear"></div>
                    <?php if (Session::get_flash('err_category_id')): ?>
                      <div class="error" style="color: #e74c3c;" id="err_category_id"><?php echo Session::get_flash('err_category_id'); ?></div>
                    <?php endif ?>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>内容</label>
                      <textarea name="body" id="" class="ckeditor" placeholder="">
                      	
                      </textarea>
                    </div>
                    <?php if (Session::get_flash('err_body')): ?>
                      <div class="error" style="color: #e74c3c;" id="err_body"><?php echo Session::get_flash('err_body'); ?></div>
                    <?php endif ?>

					         <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="margin-left: -10px;">確認</button>
                    <?php echo Html::anchor('admin/news', 'ホームページに行く', array("class" => "btn btn-default pull-right", "style" => "margin-right: -10px;")); ?>
                  </div>
                  </form>
                  <!-- /.box-footer -->
                  
                  
                  
                  


                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>