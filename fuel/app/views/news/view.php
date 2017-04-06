<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <h2><?php echo $news->title; ?></h2>
    <p><?php echo $news->created_at; ?></p>
    <p><?php echo $news->body; ?></p>
    <?php echo Html::anchor('admin/news', 'Back'); ?>
</div>