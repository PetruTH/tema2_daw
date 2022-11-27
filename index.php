<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>

	<body>


		<?php ?>

        <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

        </form>

	<?php ?>

	</body>
</html>