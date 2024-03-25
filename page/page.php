<?php 
	$page = "";
	if(isset($_GET['page'])){

		$page = $_GET['page'];

	}


	switch ($page) {

			case 'nasaun':
			$title = "Pagina Nasaun";
			$page = "include 'database/input/nasaun/index.php';";
			break;
			case 'aumentaNasaun':
			$title = "Pagina Aumenta Dadus Nasaun";
			$page = "include 'database/input/nasaun/aumenta.php';";
			break;
			case 'hadiaNasaun':
			$title = "Pagina Hadia Dadus Nasaun";
			$page = "include 'database/input/nasaun/hadia.php';";
			break;
			case 'hamosNasaun':
			$title = "Pagina Hadia Dadus Nasaun";
			$page = "include 'database/input/nasaun/hamos.php';";
			break;

			case 'munisipiu':
			$title = "Pagina Munisipiu";
			$page = "include 'database/input/munisipiu/index.php';";
			break;
			case 'aumentaMunisipiu':
			$title = "Pagina Aumenta Dadus Munisipiu";
			$page = "include 'database/input/munisipiu/aumenta.php';";
			break;
			case 'hadiaMunisipiu':
			$title = "Pagina Hadia Dadus Munisipiu";
			$page = "include 'database/input/munisipiu/hadia.php';";
			break;
			case 'hamosMunisipiu':
			$title = "";
			$page = "include 'database/input/munisipiu/hamos.php';";
			break;

			case 'postu':
			$title = "Pagina Postu";
			$page = "include 'database/input/postu/index.php';";
			break;
			case 'aumentaPostu':
			$title = "Pagina Aumenta Dadus Postu";
			$page = "include 'database/input/postu/aumenta.php';";
			break;
			case 'hadiaPostu':
			$title = "Pagina Hadia Dadus Postu";
			$page = "include 'database/input/postu/hadia.php';";
			break;
			case 'hamosPostu':
			$title = "";
			$page = "include 'database/input/postu/hamos.php';";
			break;

			case 'suku':
			$title = "Pagina Suku";
			$page = "include 'database/input/suku/index.php';";
			break;
			case 'aumentaSuku':
			$title = "Pagina Aumenta Dadus Suku";
			$page = "include 'database/input/suku/aumenta.php';";
			break;
			case 'hadiaSuku':
			$title = "Pagina hadia Dadus Suku";
			$page = "include 'database/input/suku/hadia.php';";
			break;
			case 'hamosSuku':
			$title = "";
			$page = "include 'database/input/suku/hamos.php';";
			break;

			case 'aldeia':
			$title = "Pagina Aldeia";
			$page = "include 'database/input/aldeia/index.php';";
			break;
			case 'aumentaAldeia':
			$title = "Pagina Aumenta Dadus Aldeia";
			$page = "include 'database/input/aldeia/aumenta.php';";
			break;
			case 'hadiaAldeia':
			$title = "Pagina Hadia Dadus Aldeia";
			$page = "include 'database/input/aldeia/hadia.php';";
			break;
			case 'hamosAldeia':
			$title = "";
			$page = "include 'database/input/aldeia/hamos.php';";
			break;

			case 'kuartu':
			$title = "Pagina Kuartu";
			$page = "include 'database/input/kuartu/index.php';";
			break;
			case 'aumentaKuartu':
			$title = "Pagina Aumenta Dadus Kuartu";
			$page = "include 'database/input/kuartu/aumenta.php';";
			break;
			case 'hadiaKuartu':
			$title = "Pagina Hadia Dadus Kuartu";
			$page = "include 'database/input/kuartu/hadia.php';";
			break;
			case 'hamosKuartu':
			$title = "";
			$page = "include 'database/input/kuartu/hamos.php';";
			break;

			case 'user':
			$title = "Pagina User";
			$page = "include 'database/input/user/index.php';";
			break;
			case 'aumentaUser':
			$title = "Pagina Aumenta Dadus User";
			$page = "include 'database/input/user/aumenta.php';";
			break;
			case 'hadiaUser':
			$title = "Pagina Hadia Dadus User";
			$page = "include 'database/input/user/hadia.php';";
			break;
			case 'hamosUser':
			$title = "";
			$page = "include 'database/input/user/hamos.php';";
			break;

			case 'kliente':
			$title = "Pagina Kliente";
			$page = "include 'database/proses/kliente/index.php';";
			break;
			case 'aumentaKliente':
			$title = "Pagina Aumenta Dadus Kliente";
			$page = "include 'database/proses/kliente/aumenta.php';";
			break;
			case 'hadiaKliente':
			$title = "Pagina Hadia Dadus Kliente";
			$page = "include 'database/proses/kliente/hadia.php';";
			break;
			case 'hamosKliente':
			$title = "";
			$page = "include 'database/proses/kliente/hamos.php';";
			break;

			case 'relatorio':
			$title = "";
			$page = "include 'database/output/relatorio.php';";
			break;
		
		default:
			$title = "Dashboard";
			$page = "include 'template/content.php';";
			break;
	}

	$CONTENT['main'] = $page;

 ?>