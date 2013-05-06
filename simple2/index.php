<?php
session_start();
include_once('resources/init.php');
$toplinks = "";
if ( isset($_SESSION['id'])) {
    //$posts = ( isset($_GET['id']) ) ? get_posts($_GET['id']) : get_posts();
    $posts = get_posts_member($_SESSION['id']);
    $userid = $_SESSION['id'];
   // $name = $_SESSION['name'];
  //  print_r($name);
    
    $toplinks = '<a href="index.php?id=' . $userid . '"></a> &bull; 
    <a href="../logout.php">Log Out</a>';
   
} else {
    
    header("Location: ../login.php");

    $toplinks = '<a href="join_form.php">Registrera</a> &bull; <a href="login.php">Logga in</a>';

}

?>
<!doctype html>
<html>
    <head>
        <meta charset=utf-8>

        <style>
        ul { list-style-type: none;}
        li { display: inline; margin-right:20px;}
        </style>

        <title> My Blog </title>
    </head> 
    <body>
    	<nav>

    		<ul>
    			<li><a href = "index.php"> Index </a></li>
    			<li><a href = "add_post.php"> Add a Post </a></li>
    			<li><a href = "add_category.php"> Add a Category </a></li>
    			<li><a href = "category_list.php"> Category List </a></li>
    		</ul>

    	</nav>
        <?php echo $toplinks; ?>
        <h1> Hampus Awesome Blog</h1>
        
        <?php 
        foreach ($posts AS $post) {

        ?>
            <h2><?php echo $post['title']; ?></h2>
            <?php echo $post['date_posted'] ?>
        	<!--<h2><a href = "index.php?id=<?php echo $post ['post_id']; ?>"><?php echo $post['title']; ?></a></h2> 
        	<p> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])) ;?> 
        		in <a href ="category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name']; ?></a>
        	</p> -->
        	<div><?php echo nl2br($post['contents']); ?></div> 

        	<menu>
        		<ul>
        			<li><a href ="delete_post.php?id=<?php echo $post['post_id']; ?>"> Delete This Post </a></li>
        			<li><a href ="edit_post.php?id=<?php echo $post['post_id']; ?>"> Edit This Post </a></li>
        		</ul>
        	</menu> 
        	<?php
        }//end forach
        ?>
    </body>
</html>
