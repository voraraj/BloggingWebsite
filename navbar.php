<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
		

	<?php if ($_SESSION['user']['role'] == "Admin" ): ?>
			<h1>LifeBlog - Admin</h1>
			<?php else: ?>
			<h1>LifeBlog-Author</h1>
			<?php endif ?>
		</a>
	</div>
	<div class="user-info">
		<span><?php echo $_SESSION['user']['username'] ?></span>&nbsp; &nbsp; <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
	</div>
</div>
