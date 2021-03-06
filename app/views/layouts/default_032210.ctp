<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title_for_layout?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- Include external files and scripts here (See HTML helper for more info.) -->
        <?php 
			echo $scripts_for_layout;
			echo $javascript->link('common');
			echo $html->css('site');
		?>
	</head>
    <body>
        <div id="header">
          <div id="menu">...</div>
        </div>
        <?php echo $content_for_layout ?>
        <!-- Add a footer to each displayed page -->
        <div id="footer">...</div>
    </body>
</html>