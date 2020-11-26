<!DOCTYPE html>
<!--
Mitchell Vivian 300202471
Daniel Strauch 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT']."/213Final/lib/navBar.php"; ?>
        <div class ="content">
            <h1>Create-A-Character</h1>
            <fieldset>
                <legend><h2>Login</h2></legend>
                <form action="login/login.php" method="POST">
                    <label for="email">Email:</label>
                    <br>
                    <input class="text-field" type="text" name="email" id="email" required>
                    <br><br>
                    <label for="password">Password:</label>
                    <br>
                    <input class="text-field" type="password" name="password" id="password" required>
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </fieldset>
            <br>
            <a href="login/createAccount.php">Create Account</a>
        </div>
        <!--import jQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--This is the JS file that will be used on every page-->
        <script src="/main.js"></script>
        <!--Add additional JS files below.-->
    </body>
</html>
