<?php include_once('resources/init.php'); ?>
<!doctype html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel=stylesheet href="css/style.css">
        <link rel=author href="humans.txt">
        <title>Category List</title>
    </head>
    <body>
    	<?php
    	foreach (get_categories() as $category)  {
    		?>
    		<p><a href ="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a> - <a href ="delete_category.php?id=<?php echo $category['id'];?>"> Delete </a></p>
    		<?php
    	
    	} 

    	?> 
    </body>
</html>