<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/colorpicker.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
		<link rel="stylesheet" href="css/icheck/flat/blue.css" />
		<link rel="stylesheet" href="css/select2.css" />
		<link rel="stylesheet" href="css/jquery-ui.css" />		
		<link rel="stylesheet" href="css/unicorn.css" />
		<link rel="stylesheet" href="css/unicorn.grey.css" class="skin-color" />	
	</head>
	<body>

<div id="header">
			<h1><a href="./dashboard.html">SLI</a></h1>	
			<a id="menu-trigger" href="#"><i class="icon-align-justify"></i></a>	
		</div>
		
		<div id="search">
			<input type="text" placeholder="Rechercher..."/><button type="submit" class="tip-right" title="Search"><i class="icon-search"></i></button>
		</div>
		<div id="user-nav">
            <ul class="btn-group">
                <li class="btn" ><a title="" href="#"><i class="icon-user"></i> <span class="text">Profil</span></a></li>
                <li class="btn dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">Nouveaux Messages</a></li>
                        <li><a class="sInbox" title="" href="#">Boite de Reception</a></li>
                        <li><a class="sOutbox" title="" href="#">Boite d'envoi</a></li>
                        <li><a class="sTrash" title="" href="#">Corbeille</a></li>
                    </ul>
                </li>
                <li class="btn"><a title="" href="#"><i class="icon-cog"></i> <span class="text">Options</span></a></li>
                <li class="btn"><a title="" href="index.html"><i class="icon-share-alt"></i> <span class="text">Se deconnecter</span></a></li>
            </ul>
        </div>

       