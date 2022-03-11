<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    <div class="login">
     <form action="process.php" method="post">
     	<h2>Đăng nhập</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="username" placeholder="User Name"><br>
     	<input type="password" name="userpass" placeholder="Password"><br>
     	<button type="submit">Đăng nhập</button>
     </form>
         </div>
</body>
