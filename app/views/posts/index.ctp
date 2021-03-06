<!-- File: /app/views/posts/index.ctp -->

<h1>Blog posts</h1>
<?php echo $html->link('Add Post',array('controller' => 'posts', 'action' => 'add'))?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>Options</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $html->link($post['Post']['title'], 
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
		<td>
			<?php echo $html->link('Delete', array('action' => 'delete', 'id' => $post['Post']['id']), null, 'Are you sure?' )?>
			 | 
			<?php echo $html->link('Edit', array('action' => 'edit', 'id' => $post['Post']['id']))?></td>		
	</tr>
	<?php endforeach; ?>

</table>
