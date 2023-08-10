<?php	
	include 'studio/assets/php/sql_conn.php';

	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		$p = '';
	}

	switch($p){
		case 'home':
        $title = "Home";
		include('pages/home.php');
		break;

		case 'videos':
        $title = "Videos";
		include('pages/category.php');
		break;

		case 'articulture':
        $title = "Articulture";
		include('pages/category.php');
		break;

		case 'art_work':
        $title = "Art Work";
		include('pages/category.php');
		break;

		case 'photo_stories':
        $title = "Photo Stories";
		include('pages/category.php');
		break;

		case 'cinemania':
        $title = "Cinemania";
		include('pages/category.php');
		break;

		case 'adda':
        $title = "Adda";
		include('pages/category.php');
		break;

		case 'satire':
        $title = "Satire";
		include('pages/category.php');
		break;

		case 'op_ed':
        $title = "Op-Ed";
		include('pages/category.php');
		break;

		case 'letters_to_the_editor':
        $title = "Letters to the Editor";
		include('pages/category.php');
		break;

		case 'indept-reportage':
        $title = "Indept Reportage";
		include('pages/category.php');
		break;

		case 'righting-the-wrong':
        $title = "Righting the Wrong";
		include('pages/category.php');
		break;

		case 'public_culture':
        $title = "Public Culture";
		include('pages/category.php');
		break;

		case 'public_history':
        $title = "Public History";
		include('pages/category.php');
		break;

		case 'podcasts_sahityacharcha':
        $title = "Podcasts Sahityacharcha";
		include('pages/category.php');
		break;

		case 'authors':
        $title = "Our Authors";
		include('pages/authors.php');
		break;

		case 'my-bio':
        $title = "My Bio";
		include('pages/my_bio.php');
		break;

		case 'read-more':
        $title = "Read More";
		include('pages/read_more.php');
		break;

		default:
		include('pages/home.php');
	}

?>