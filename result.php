<?php
//Step1
 $db = mysqli_connect('localhost','root','','url')
 or die('Error connecting to MySQL server.');

//Step2
$query = "SELECT * FROM user ORDER BY no desc";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>UNITEN ROBOTIC COMPETITION</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    
</head>

<body class="landing-page">
    <nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container" id="home">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#home">UNITEN ROBOTICS</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
	    				<li><a href="#Overview" class="smoothScroll">OVERVIEW</a></li>
	    				<li><a href="#Terms" class="smoothScroll"> Terms and Conditions</a></li>
	    				<!-- <li><a href="#rule" class="smoothScroll"> Rules and Regulation</a></li> -->
	    				<li><a href="#organizer" class="smoothScroll"> organizer</a></li>
	    				<li><a href="" data-toggle="modal" data-target="#myModal">Contact</a></li>
	    				<li><a href="url.html">Uniten Robotic League</a></li>
			        	<li><a href="https://www.facebook.com/unitenroboticleague/" target="_blank" class="btn btn-simple btn-white 				btn-just-icon">
								<i class="fa fa-facebook-square"></i></a></li>
						<li><a href="https://www.instagram.com/roboticleague7746" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-instagram"></i></a></li>
        		</ul>
        	</div>
    	</div> 
    </nav>

    <div class="wrapper">

    <div class="header header-filter" style="background-image: url('assets/img/bg.jpg');">
            <div class="container">
                <div class="row">
					<div class="col-md 12">
						<h3 class="title">UNITEN ROBOTICS LEAGUE 2017</h3>
					    
					</div>
                </div>
            </div>
        </div>


        <!-- ==== Result ==== -->
		<div class="main main-raised">
			<div class="container">
		    	<div class="section-landing">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2"> 
	                        <h2 class="title">Result</h2>

							<div class="table-responsive">	                       
	                        <table class="table table-sm" > 

	 						<thead class="thead-inverse">
	 						 <tr> <th> NAME </th> <th> Played </th> <th> Pts </th> <th> TB </th> <th> Pts Diff </th> </tr>
	 						</thead>	 
							<?php while ($row = mysqli_fetch_array($result)) { echo

							' <tbody> <tr>

									<td>'. $row['name'] . '<br /> 
									</td>

									<td>'. $row['played'] .'<br />
									</td>

									<td>'. $row['point'] .'<br />
									</td>

									<td>'. $row['point'] .'<br />
									</td>

									<td>'. $row['point_difference'] .'<br />
									</td>

									

								</tr> </tbody>';
								}?>

							</table>
							</div>								                       	
	                    </div>
	                </div> 
	            </div>
		     </div>
		</div>


	    <footer class="footer">
	        <div class="container">
            	<div class="copyright pull-right">
            	&copy; 2017, MRC UNITEN
            	</div>
			</div>
		</footer>
		
	</div>	
</body>


			<!-- ==== Contact ==== -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">                
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-phone"> Contact us here:</i></h4>
                    </div>
                
                    <div class="modal-body">
                        <p><a href="https://www.facebook.com/unitenroboticleague/" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a> URL Official FB Page</p>
                        <p><a href="https://www.instagram.com/roboticleague7746/" target="_blank" class="badge social instagram"><i class="fa fa-instagram"></i></a> URL official Instagram</p>
                        <p><a target="_blank" class="badge social mobile"><i class="fa fa-mobile"></i></a> 017-6710896 yunus / 016-416 8770 Adriana</p>
                  </div>
                </div>
            </div>        
        </div>


	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>

<?php
//Step 4
mysqli_close($db);
?>