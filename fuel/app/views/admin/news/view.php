        <section class="content">
          <div class="row">
          <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3><?php echo $news->title; ?></h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                  <span><b><u>カテゴリー: </u></b><button class="btn bg-orange margin"><?php echo $category->name; ?></button></span>
                  </div><!-- /.mailbox-read-info -->
                  
                  <div class="mailbox-read-message">
                    <?php echo html_entity_decode($news->body); ?>
                  </div><!-- /.mailbox-read-message -->

                   
                </div><!-- /.box-body -->
              
                <div class="box-footer">
                  <?php echo Html::anchor('admin/news', 'ホームページに行く', array("class" => "btn btn-default pull-right")); ?>
                  <?php echo Html::anchor('admin/news/edit/'.$news->id, '編集ページに行く
', array("class" => "btn btn-warning pull-right", "style" => "margin-right: 10px;")); ?>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
            </div>
            </section>