<?php

include 'backend/database.php';
?>


<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<title>Fabiana Gonzalez</title>
	
	<meta name="description" content="">
	<meta name="google-site-verification" content="">
	<meta name="author" content="Christopher McClellan">
	
	<link rel="shortcut icon" href="http://demo.nookthemes.com/html/Hipstar/_images/favicon.ico">

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fabi.css">



	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="crud/ajax/ajax.js"></script>


<!-- partial -->
  <script src="./script.js"></script>



	
</head>

<body class="light">

<!-- Left Column (Header) -->
	<header id="header">
		
	<!-- Logo -->
		<h1>
			<a href="index-2.html">
				<img src="images/logo.png" alt="logo" width="114" height="38">
			</a>
		</h1>
	<!-- /Logo -->
	
	<!-- Navigation -->
		<nav id="nav-primary">
			<ul>
				<li class="current"><a href="index-2.html">1) Antiasmatico </a></li>				
				<li><a href="classe.html">2) Classe</a>
					<ul>
						<li><a href="classe.html"></a></li>
						<li><a href="classe.html">Anticoagulante</a></li>
						<li><a href="classe.html">Antiplaquetario</a></li>
						<li><a href="classe.html">Trombolitico</a></li>
					</ul>
				</li>
				<li><a href="Antihiperglicemiante.html">3) Antihiperglicemiante</a></li>
				<li><a href="Antihipertensivo.html">4) Anti-hipertensivo</a></li>
				<li><a href="Antiparkisoniano.html">5) Antiparkisoniano</a></li>
				<li><a href="Antitireoidiano.html">6) Antitireoidiano</a></li>
				<li><a href="Drogas_autonomias.html">7) Drogas autonomias</a></li>
				<li><a href="Remodelagem_ossea.html">8) Remodelagem ossea</a></li>
				<li><a href="Droga_do_TSI.html">9) Droga do TSI</a></li>
				<li><a href="Sindrome_Toxicas.html">10) Sindrome Toxicas</a></li>
				
				
			</ul>
		</nav>
	<!-- /Navigation -->
	
	</header>
<!-- /Left Column (Header) -->

<!-- Right Column -->
	<div id="main" role="main">
	
	<!-- Call to action -->
		<header class="clearfix">
			<div id="call-to-action"><a href="#"><span>Click na</span>CARTA</a></div>
			<h2 id="tagline">1) Antiasmatico<span class="heart"></span>strings</h2>
			<ul class="breadcrumbs">
				<li>You are here:</li>
				<li><a href="home.php">Home</a></li>
				<li><a href="home.php">Portfolio</a></li>
				<li>Portfolio Grid Large</li>
			</ul>
		</header>
	<!-- /Call to action -->
	
	<div id="content-area" class="container clearfix" style="margin-top: 79px;">
		
			<div class="container-12">
			
				<article class="clearfix post">
					
					<header class="col-12">
						<h3>Usuarios do  sistema</h3>
                        <div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
					</header>
                    
                    <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>SL NO</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
						<th>PHONE</th>
                        <th>CITY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM crud");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><?php echo $row["city"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-name="<?php echo $row["name"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
							data-phone="<?php echo $row["phone"]; ?>"
							data-city="<?php echo $row["city"]; ?>"
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
				</tr>
				
				<?php
				$i++;
				}
				?>
                </div>
				</tbody>
			</table>		
				
					
					<div class="cl"></div>
					
				</article>
		
				<div class="cl"></div>
				
			</div><!-- .container-12 -->
			
		</div>
		<div class="cl"></div>
		
		<!-- Pagination -->
		<div class="pagination">
			<ul>
				<li><a href="#" class="prev">&lsaquo;</a></li>
				<li><span class="page current">1</span></li>
				<li><a href="#" title="2" class="page">2</a></li>
				<li><a href="#" title="3" class="page">3</a></li>
				<li><a href="#" title="4" class="page">4</a></li>
				<li><span class="gap">[...]</span></li>
				<li><a href="#" title="39" class="page">8</a></li>
				<li><a href="#" class="next">&rsaquo;</a></li>
			</ul>
		</div>
		<!-- /Pagination -->
		
	<!-- /Content Area -->
	</div>
<!-- /Right Column -->

<!-- Footer -->
	<footer id="footer">
		
		
		
			<a href="index-2.html">
				<img src="images/Ativo.png" alt="logo" width="130" height="100">
			</a>
		<!-- #search -->
		
		<div class="source-org vcard copyright">
			<p>&copy; 2022 Fabiana Gonzalez</p>
		</div><!-- .copyright -->
	</footer>
<!-- /Footer -->

<!-- Large image viewer -->
	<div id="img-preview-controls">
		<a class="" id="img-title" href="#"></a>
		<a id="img-view-post" href="#">View</a>
		<a id="img-close" href="#">Close</a>
	</div>
<!-- /Large image viewer -->

<div class="back-to-top"><a href="#">Up</a></div>

<!-- Javascript (in footer for a reason) -->





	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="phone" id="phone" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CITY</label>
							<input type="city" id="city" name="city" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Usuário</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="phone" id="phone_u" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="city" id="city_u" name="city" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Atulizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Deletar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Tem certeza que deja deletar esse registro?</p>
						<p class="text-warning"><small>Essa ação não pode ser revertida.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Deleta</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
