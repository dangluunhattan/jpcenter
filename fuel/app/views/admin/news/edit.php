<!-- general form elements disabled -->
              <div class="box box-warning">

                <div class="box-header with-border">
                  <h3 class="box-title">編集</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <form role="form" class="form" id="form" action="" method="post" enctype="multipart/form-data">
                    <!-- text input -->
                    <div class="form-group">
                      <label>タイトル</label>
                      <input name="title" type="text" class="form-control" placeholder="..." value="<?php echo ($news->title)?$news->title:''; ?>">
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
                            <option value="<?php echo $category->id ?>" <?php echo ($category->id == $news->category_id)? 'selected' : '' ?>><?php echo $category->name; ?></option>
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
                      <textarea name="body" id="" class="ckeditor" placeholder="" >
                        <?php echo ($news->body)?$news->body:''; ?>
                      </textarea>
                    </div>
                    <?php if (Session::get_flash('err_body')): ?>
                      <div class="error" style="color: #e74c3c;" id="err_body"><?php echo Session::get_flash('err_body'); ?></div>
                    <?php endif ?>

                    <input type="hidden" name ="news_id" value ="<?php echo $news->id; ?>">

                   <div class="box-footer">
                    <a href="" style="margin-left: -10px" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $news->id; ?>">編集</a>

                    <?php echo Html::anchor('admin/news', 'ホームページに行く', array("class" => "btn btn-default pull-right", "style" => "margin-right: -10px;")); ?>
                    <?php echo Html::anchor('admin/news/view/'.$news->id, '詳細を見る', array("class" => "btn btn-warning pull-right", "style" => "margin-right: 10px;")); ?>
                  </div>

                  <!-- Delete Modal -->
                      <div class="modal" id="myModal<?php echo $news->id; ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <h3 class="modal-title"><b>お知らせ</b></h3>
                            </div>
                            <div class="modal-body">
                              <p>更新してもよろしいですか？</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">キャンセル</button>
                              <input type="submit" name="" value="確認" class="btn btn-primary pull-right">
                            </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div>
                    <!-- End Delete Modal -->

                  </form>
                  <!-- /.box-footer -->
                  
                  
                  
                  


                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>