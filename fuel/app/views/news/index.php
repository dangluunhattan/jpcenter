<div class="container">
<h2>Listing News</h2>
<br>
<?php if ($news): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Category</th>
			<th>Body</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($news as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->category; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<?php echo Html::anchor('news/view/'.$item->id, 'View'); ?> 

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No News.</p>

<?php endif; ?><p>

</p>
</div>
