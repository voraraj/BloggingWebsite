<?php require_once('config.php') ?>
<!-- config.php should be here as the first include  -->
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php include('includes/head_section.php'); ?>
<title>Contact Form </title>
</head>
<body>
<div class="container">
<!-- navbar -->
<?php include('includes/navbar.php') ?>
<div id="stylized" class="myform">
<form id="form1" id="form1" action="mail.php" method="POST">
<label>Name
<span class="small">Add your name</span>
</label>
<input type="text" name="name">
<label>Email
<span class="small">Enter a Valid Email</span>
</label>
<input type="text" name="email">
<label>Phone
<span class="small">Add a Phone Number</span>
</label>
<input type="text" name="phone">
<br />
<br />
<label>Website
<span class="small">Your Website</span>
</label>
<input type="text" name="website">
<label>Priority  
<span class="small">Priority Level  </span>
</label>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<br />
<br />
<label>Type
<span class="small">Type of Contact</span>


</label>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br />
<br />
<br />
<label>Message
<span class="small">Type Your Message</span>
</label>
<textarea name="message" rows="6" cols="25"></textarea><br />
<button type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>
</form>
</div>
</div><!-- end of form class -->
<?php include( ROOT_PATH . '/includes/footer.php'); ?>
