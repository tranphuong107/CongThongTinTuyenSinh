<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
</head>
<style>
	.login{
    border: 1px solid grey;
    border-radius: 10px;
    text-align: center;
    background-color: rgb(193, 202, 202);
    width: 30%;
    margin: 10% auto;
    padding: 2%;
    margin-bottom: 10px;}
	button{
    width:280px;
    height:40px;
    background-color: dodgerblue;
    margin-bottom:25%;}
	input{
    display: block;
    width:250px;
    height:50px;
    border-radius: 5px;
    border:1px solid grey;
    padding-left: 30px;
    margin: 5px auto;}
	</style>
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
