<?php
	include('assets/php/sql_conn.php');	
	
	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		$p = '';
	}
	
	if(isset($_GET["gr"])){
		$gr = $_GET["gr"];
	}else{
		$gr = '';
	}

	switch($p){
		case 'signin':
        $title = "Signin";
		include('signin/signin.php');
		break;

		case 'signup':
        $title = "Signup";
		include('signup/signup.php');
		break;
		
		case 'dashboard':
		$title = "Dashboard";
		include('dashboard/dashboard.php');		
		break;

		//SETUP			
		case 'banner':
			$title = "Banner Management";
			include('setup/banner/banner.php');		
		break;	

		case 'authors':
			$title = "Authors Profile";
			include('setup/authors/authors.php');		
		break;

		case 'post':
			$title = "Create a Post";
			include('setup/post/post.php');		
		break;

		case 'add_edit_post':
			$title = "Create/Update a Post";
			include('setup/post/add_edit_post.php');		
		break;

		case 'comment_manager':
			$title = "Comment Manager";
			include('setup/comment_manager/comment_manager.php');		
		break;
						
		default:
		include('signin/signin.php');
	}
    

?>