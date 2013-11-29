<html>
<head>
	<title>World++ | Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</head>
<body>


<style>
body{
	background-image: url('./img/bg_mon_millor.jpg');
}
.profilepricture{
	margin-right:12%;
	z-index: 9;
	display:block;
}
div.contenedor{
	background-color:#ffffff;
	opacity:0.99;
}
div.contenedor p{
	margin:30px 40px;
	opacity:1.0;
}
div.logout{
	position:absolute;
	float:right;
	margin-left:90%;
	margin-top:2%;
}
</style>
<div class="logout">
	<a href="./book-index.php">LOGOUT</a>
</div>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column"><p>&nbsp;</div>
		<div class="col-md-1 column">
			<div class="col-md-12 column">
				<img style="display-block;float-left" alt="asd" 
				src="http://lorempixel.com/80/80/" 
				class="img-circle profilepricture"/> 
			</div>
			<div class="col-md-12 column" style="margin-top:20%">
			<span style="margin:33%" class="label label-success">330 PTS</span>
			</div>
		</div>
		<div class="col-md-8 column">
			<div class="tabbable" id="tabs-778803">
				<ul class="nav nav-tabs" style="width:100%">
					<li class="active" style="float:left;width:25%;">
						<a style="text-align:center" href="#panel-profile" data-toggle="tab">PROFILE</a>
					</li>
					<li style="float:left;width:25%;">
						<a style="text-align:center" href="#panel-books" data-toggle="tab">BOOKS</a>
					</li>
					<li style="float:left;width:25%;">
						<a style="text-align:center" href="#panel-comunity" data-toggle="tab">COMUNITY</a>
					</li>
					<li style="float:left;width:25%;">
						<a style="text-align:center" href="#panel-help" data-toggle="tab">HELP</a>
					</li>
				</ul>
				
			</div>
		</div>
		<div class="col-md-3 column">
			<div class="control-group">
				<div class="controls">
				    <div class="input-append">
      					<input id="appendedtext" name="appendedtext" class="input-mini" placeholder="placeholder" type="text">
							<buton class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></buttom>
      					</input>
      				</div>
      			</div>
      		</div>
      	</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-1 column">
		</div>
		<div class="col-md-11 column contenedor">
			<div class="contenido">
				<div class="tab-content">
						<div class="tab-pane active" id="panel-profile">
							<p>
			<!-- Profile -->
								<div class="row clearfix">
									<div class="col-md-8 column">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												 <label for="username" class="col-sm-2 control-label">Username</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="username" placeholder="001" readonly/>
												</div>
											</div>
											<div class="form-group">
												 <label for="username" class="col-sm-2 control-label">Name</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="username" placeholder="001" readonly/>
												</div>
											</div>
											<div class="form-group">
												 <label for="username" class="col-sm-2 control-label">Last Name</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="username" placeholder="001" readonly/>
												</div>
											</div>
											<div class="form-group">
												 <label for="username" class="col-sm-2 control-label">Email:</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="username" placeholder="001" readonly/>
												</div>
											</div>
											<div class="form-group">
												 <label for="username" class="col-sm-2 control-label">City</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="username" placeholder="001" readonly/>
												</div>
											</div>
											<div class="form-group">
												 <label for="username" class="col-sm-2 control-label">Country</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="username" placeholder="001" readonly/>
												</div>
											</div>
										</form>
									</div>
									<div class="col-md-4 column">
										<img alt="300x300" src="http://lorempixel.com/300/300/" />
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="col-md-3">
											 <label for="username" class="col-sm-12 control-label">Global Books Percentatge</label>
										</div>
										<div class="col-md-4">
											<div class="progress">
												<div class="progress-bar progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-md-5 column">
										<div class="row clearfix">
											<div class="col-md-12 column">
												<div class="col-md-3">
													Book 1
												</div>
												<div class="col-md-6">
													<div class="progress">
														<div class="progress-bar progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<a href="#">View</a>
												</div>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-md-12 column">
												<div class="col-md-3">
													Book 1
												</div>
												<div class="col-md-6">
													<div class="progress">
														<div class="progress-bar progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<a href="#">View</a>
												</div>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-md-12 column">
												<div class="col-md-3">
													Book 1
												</div>
												<div class="col-md-6">
													<div class="progress">
														<div class="progress-bar progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<a href="#">View</a>
												</div>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-md-12 column">
												<div class="col-md-3">
													Book 1
												</div>
												<div class="col-md-6">
													<div class="progress">
														<div class="progress-bar progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<a href="#">View</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7 column">
										<h4>Objectives: </h4><br />
										<ul>
											<li>
												Give money to homeless
											</li>
											<li>
												Help old persons cross the road
											</li>
										</ul>
									</div>
								</div>
			<!-- End of Profile -->
							</p>
							<div class="">
							</div>
						</div>
						<div class="tab-pane" id="panel-books">
							<p>
<!-- Tab Books -->
								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="row clearfix">
											<div class="col-md-8 column">
												<div class="row clearfix">
													<div class="col-md-6 column">
														<h3 class="text-default">
															History Book 2:
														</h3>
													</div>
													<div class="col-md-6 column">
														<br />
														<div class="progress">
															<div class="progress-bar progress-success">
															</div>
														</div>
													</div>
												</div>
												<div style="border:1px solid black">
													<p>
														Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
													</p>
												</div>
											</div>
											<div class="col-md-4 column">
												<img alt="140x140" src="http://lorempixel.com/300/300/" />
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-md-12 column">
										<h3>
											Chapter 2:
										</h3>
										<div class="row clearfix">
											<div class="col-md-3 column">
												<div class="control-group">
													<div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one"checked>
													      Opcion 1
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one"checked>
													      Opcion 2
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 3
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one" disabled>
													      Opcion 4
													    </label>
													</div>
												</div>
											</div>
											<div class="col-md-3 column">
												<div class="control-group">
													<div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 1
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 2
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 3
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 4
													    </label>
													</div>
												</div>
											</div>
											<div class="col-md-3 column">
												<div class="control-group">
													<div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 1
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 2
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 3
													    </label>
													</div>
													 <div class="controls">
													    <label class="checkbox" for="checkboxes-0">
													      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
													      Opcion 4
													    </label>
													</div>
												</div>
											</div>

											</div>
											<div class="col-md-3 column"> <!-- Vacio! -->
											</div>
										</div>
									</div>
	
<!-- End of Tab Books -->
							</p>
						</div>
						<div class="tab-pane" id="panel-comunity">
							<p>
<!-- Tab Comunity (rankings) -->

								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="row clearfix">
											<div class="col-md-6 column">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>
																Username (Name)
															</th>
															<th>
																Progress %
															</th>
															<th>
																Country
															</th>
															<th>
																City
															</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																01/04/2012
															</td>
															<td>
																Default
															</td>
														</tr>
														<tr class="active">
															<td>
																1
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																01/04/2012
															</td>
															<td>
																Approved
															</td>
														</tr>
														<tr class="success">
															<td>
																2
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																02/04/2012
															</td>
															<td>
																Declined
															</td>
														</tr>
														<tr class="warning">
															<td>
																3
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																03/04/2012
															</td>
															<td>
																Pending
															</td>
														</tr>
														<tr class="danger">
															<td>
																4
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																04/04/2012
															</td>
															<td>
																Call in to confirm
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-md-6 column">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>
																#
															</th>
															<th>
																Product
															</th>
															<th>
																Payment Taken
															</th>
															<th>
																Status
															</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																01/04/2012
															</td>
															<td>
																Default
															</td>
														</tr>
														<tr class="active">
															<td>
																1
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																01/04/2012
															</td>
															<td>
																Approved
															</td>
														</tr>
														<tr class="success">
															<td>
																2
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																02/04/2012
															</td>
															<td>
																Declined
															</td>
														</tr>
														<tr class="warning">
															<td>
																3
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																03/04/2012
															</td>
															<td>
																Pending
															</td>
														</tr>
														<tr class="danger">
															<td>
																4
															</td>
															<td>
																TB - Monthly
															</td>
															<td>
																04/04/2012
															</td>
															<td>
																Call in to confirm
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>

<!-- End of Tab Comunity -->

							</p>
						</div>
						<div class="tab-pane" id="panel-help">
							<p>&nbsp;</p>
						</div>
				</div>
			</div>
	</div>
</div>


</body>
</html>