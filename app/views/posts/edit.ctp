<h1>Edit Post</h1>

<?php
	echo $form->create('Post', array('action' => 'edit'));
	echo $form->hidden('id', array('value' => $post['Post']['id']));
	echo $form->input('title');
	echo $form->input('body', array('rows' => '3'));
	echo $form->end('Save Post');
?> 