<section class="content">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><b>ニュース管理</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				<?php if ($news): ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>タイトル</th>
                        <th>カテゴリー</th>
                        <th>内容</th>
                        <th>削除日</th>
                        <th>作成日</th>
                        <th>更新日</th>
                        <th>コントロール</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($news as $item): ?>

                      <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->title; ?></td>
                        <td>
                          <?php if ($category): ?>
                            <?php print_r($category[$item->category_id]->name); ?>
                          <?php endif ?>
                        </td>
                        <td><?php echo Str::Truncate(html_entity_decode($item->body),100); ?></td>
                        <td><?php echo $item->deleted_at; ?></td>
                        <td><?php echo $item->created_at; ?></td>
                        <td><?php echo $item->updated_at; ?></td>
                        <td class="text-center">
							<a href="news/view/<?php echo $item->id; ?>"><?php echo Html::img('assets/img/admin-icon/view.png', array("style" => "width: 20%")); ?>|
							</a>
							<a href="news/edit/<?php echo $item->id; ?>"><?php echo Html::img('assets/img/admin-icon/edit.png', array("style" => "width: 20%")); ?>|
							</a>
							<a href="" data-toggle="modal" data-target="#myModal<?php echo $item->id; ?>"><?php echo Html::img('assets/img/admin-icon/delete.png', array("style" => "width: 18%")); ?>
							</a>
            
							
                        </td>
                      </tr>
                    
                    <!-- Delete Modal -->
                      <div class="modal" id="myModal<?php echo $item->id; ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <h3 class="modal-title"><b>警告</b></h3>
                            </div>
                            <div class="modal-body">
                              <p>消去してもよろしいですか？</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">キャンセル</button>
                              <a class="btn btn-danger" href="news/delete/<?php echo $item->id; ?>">削除の確認</a>
                            </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div>
                    <!-- End Delete Modal -->
                    <?php endforeach; ?>  

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category(s)</th>
                        <th>Content</th>
                        <th>Deleted_Date</th>
                        <th>Created_Date</th>
                        <th>Updated_Date</th>
                        <th>News_Control_Action</th>
                      </tr>
                    </tfoot>

                  </table>

                  <?php else: ?>
				<p>No News.</p>
  
				<?php endif; ?>

				<p>
					<?php echo Html::anchor('admin/news/create', '新しいニュースを追加', array('class' => 'btn btn-success', 'style' => 'margin-top: 10px')); ?>

				</p>

                </div><!-- /.box-body -->

              </div><!-- /.box -->

        </section><!-- /.content -->
