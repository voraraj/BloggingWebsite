<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>LifeBlog - Dashboard</h1>
			</a>
		</div>
	<?php if (isset($_SESSION['user'])): ?>
	<div class="user-info">
	<span><?php echo $_SESSION['user']['username'] ?></span>&nbsp; &nbsp; 
	<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
<h1>Welcome <span><?php echo $_SESSION['user']['username'] ?></span>&nbsp; &nbsp; </h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>Registered users</span>
			</a>
			<a href="posts.php">
				<span>Published posts</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
</body>
</html>
