<?php
/*
 * TODO: back button upon account creation
 */


$targetemail = strtolower(filter_input(INPUT_POST, 'email'));
$targetusername = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!$targetemail) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Creation</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class='nav'><p></p></div>
        <div class ="content">
            <h1>Account Creation</h1>
            <fieldset>
                <legend><h2>New User</h2></legend>
                <form action="" method="POST">
                    <label for="username">User Name:</label>
                    <br>
                    <input class="text-field" type="text" name="username" id="username" required>
                    <br><br>
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
        </div>
        <!--import jQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--This is the JS file that will be used on every page-->
        <script src="../main.js"></script>
        <!--Add additional JS files below.-->
    </body>
</html>
<?php
} else {
    include "../lib/loginDB.php";
    
    $mysqli = new mysqli($hostDB, $usernameDB, $passwordDB, $databaseDB);

    $message = "";
    if ($mysqli->connect_errno) {
        $message .= "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " 
                . $mysqli->connect_error . "\n";
    }
    $query = "INSERT INTO Users VALUES("
            . "?, SHA1(?), ?)";
    if (!$stmt = $mysqli->prepare($query)) {
        $message .= "Prepare failed (" . $mysqli->errno . ") " . $mysqli->error . "\n";
    }
    if (!($stmt->bind_param("sss", $targetusername, $password, $targetemail))) {
        $message .= "Binding parameters failed: (" . $stmt->errno . ") " 
             . $stmt->error . "\n";
    }
    if (!$stmt->execute()) {
        $message .= "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "\n";
    } else {
        $message = nl2br("Account successfully created!\n\n"
                . "Email: $targetemail\n"
                . "Username: $targetusername");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Creation</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT']."/213Final/lib/navBar.php"; ?>
        <div class ="content">
            <h1>Account Creation</h1>
            <fieldset>
                <legend><h2>New User</h2></legend>
                <p>
                    <?php echo $message; ?>
                </p>
            </fieldset>
        </div>
        <!--import jQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--This is the JS file that will be used on every page-->
        <script src="../main.js"></script>
        <!--Add additional JS files below.-->
    </body>
</html>
<?php
}
