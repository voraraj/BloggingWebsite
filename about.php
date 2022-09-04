<?php require_once('config.php') ?>
<!-- config.php should be here as the first include  -->

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>


<?php include('includes/head_section.php'); ?>
<title>LifeBlog | About </title>
</head>

<body>
	<!-- navbar -->
<?php include('includes/navbar.php') ?>

<div class="content">
<div class="row">
<div class="column" style="margin-left: 140px; margin-top: 50px">
	
		<img src="../s.jpg" class="img">
	
		<br>
		<a>
			<span>Md. Shahbaz Akhtar</span>
			<br>
			<span>Founder</span>
		</a>
	</div>
	<div class="column" style="margin-left:-40px;margin-top: 50px">
	
		<img src="../h.jpg" class="img">
	
		<br>
		<a>
			<span>Hitesh Sipani</span>
			<br>
			<span>Founder</span>
		</a>
	</div>
	<div class="column" style="margin-left:-40px;margin-top: 50px">
	
		<img src="../r.jpg" class="img">
	
		<br>
		<a>
			<span>Raj Vora</span>
			<br>
			<span>Founder</span>
		</a>
	</div>
</div>
<div  class="myform2">
	<br><br><br><br>
	<p>The project shows an interaction between the whole world of bioinformatics. A webpage is created in the form of a Blog website where we can read and post articles. The website is capable of supporting login and admin options with various activites. It always allows you to post any reseaches you have done. This website is connected with an scientific research which was done on a total different platform. The  website was created with the help of html, css and php formats.<br><br>

Talking about out research, The Iris Flower Dataset is a popular multivariate dataset that was introduced by R.A. Fisher as an example for discriminant analysis. The Iris dataset has been analyzed and plotted the dataset onto scatterplots to determine patterns in the data in relation to the Iris classifications. The data set was taken from the Internet and all the data analysis and majority work is shown under the Jupyter lab notebooks which works on the platform of Anaconda Navigator. There is a use of machine learning using python.<br><br>

The notebook was then connected to the website by converting the notebook into the html format. Apparently, this research can be very useful to other students all over theworld. The website is currently available to the local hosts and could be available to everyone after proper hosting.

	</p>
	</div>
</div>

<?php include( ROOT_PATH . '/includes/footer.php'); ?>

ADMIN_STYLING.CSS
/* * * * * * * * * *
* STYLING DEFAULTS
* * * * * * * * * */
* { margin: 0px; padding: 0px; }
a { text-decoration: none; }
h1, h2, h3, h4, h5, h6 { font-family: 'Noto Serif', serif; }
/* forms */
form { width: 60%; margin: 5px auto; padding-bottom: 50px; }
form input[type=file], input[type=email], input[type=password], input[type=text], 
form select, form textarea {
	width: 100%;
	display: block;
	padding: 13px 13px;
	font-size: 1em;
	margin: 5px auto 10px;
	border-radius: 3px;
	box-sizing : border-box;
	background: transparent;
	border: 1px solid #3E606F;
}
input[type="checkbox"] { height: 20px; float: left; }
form button { float: right; margin-left: 24%; }
form input:focus { outline: none; }
label {	margin-top: 20px; float: left; }
/* tables */
table { border-collapse: collapse; width: 70%; margin: 20px auto; }
th, td { padding: 8px; text-align: left; border: 1px solid #ddd; }
th { text-align: center;}
/* buttons */
.btn {
	

color: white;
	background: #4E6166;
	text-align: center;
	border: none;
	border-radius: 5px;
	display: block;
	letter-spacing: .1em;
	padding: 13px 20px;
	text-decoration: none;
}
/* * * * * * * * * *
* HEADER
* * * * * * * * * */
.header {
	padding: 15px 45px;
	font-family: 'Noto Serif', serif;
	color: white;
	background: black;
}
.header .logo { width: 50%; float: left; }
.header .logo h1 { color: white; }
.header .user-info { width: 10%; margin-top: 10px; float: right;}
.header .logout-btn { color: red; text-decoration: none; }
.header:after{ content: ""; display: block; clear: both; }
/* * * * * * * * * *
* DASHBOARD
* * * * * * * * * */
.container {
	width: 95%;
	margin: 5px auto 50px;
	border: 1px solid #BFBCB3;
	padding: 10px 0px 50px;
}
.container:after { content: ""; display: block; clear: both; }
.container.dashboard h1 { text-align: center; margin: 25px; }
.container.dashboard .stats a {
	display: inline-block;
	padding: 30px;
	margin: 5px;
	width: 25%;
	text-align: center;
	border-radius: 3px;
	border: 1px solid #BFBCB3;
}
.container.dashboard .stats a.first { margin-left: 25px; }
.container.dashboard .stats a:hover { cursor: pointer; background-color: #E1E1E1; }


.container.dashboard .buttons { margin-left: 15px; }
.container.dashboard .buttons a {
	display: inline-block;
	margin: 10px;
	text-decoration: none;
	color: #444;
	padding: 10px 25px;
	border: none;
	background-color: #0E7D92;
	color: white;
}
/* * * * * * * * * *
* PAGE CONTENT
* * * * * * * * * */
.container.content .menu { width: 16%; float: left; padding: 40px 10px; }
/* Menu card */
.container.content .menu .card .card-header {
	padding: 10px;
	text-align: center;
	border-radius: 3px 3px 0px 0px;
	background: #3E606F;
}
.container.content .menu .card .card-header h2 { color: white; }
.container.content .menu .card .card-content a {
	display: block;
	box-sizing: border-box;
	padding: 8px 10px;
	border-bottom: 1px solid #e4e1e1;
	color: #444;
}
.container.content .menu .card .card-content a:hover {
	padding-left: 20px; background: #F9F9F9; transition: 0.1s;
}
/* Actions div (at the middle) */
.container.content .action { width: 35%; float: left; text-align: center; }
.container.content .action form { width: 90%; }
.container.content .action .page-title { margin: 25px; }
.container.content .action.create-post-div { width: 80%; }
/* Table div (Displaying records from DB) */
.table-div { float: left; width: 47%; }
.table-div .message { width: 90%; margin-top: 20px; }
.table-div table { width: 90%; }
.table-div a.fa { color: white; padding: 3px; }
.table-div .edit { background: #004220; }
.table-div .delete { background: #F70E1A; }
.table-div .publish { background: red; }


.table-div .unpublish { background: green; }
/* * * * * * * * * *
* VALIDATION ERRORS
* * * * * * * * * */
.message {
	width: 100%; 
	margin: 0px auto; 
	padding: 10px 0px; 
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	border-radius: 5px; 
	text-align: center;
}
.error {color: #a94442; background: #f2dede; border: 1px solid #a94442; margin-bottom: 20px; }
.validation_errors p {text-align: left;margin-left: 10px;}
