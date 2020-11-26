<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select or Create</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/213Final/lib/navBar.php"; ?>
        <div class ="content">
            <!--all other content and divs go here-->
            <h1>Create or Select a Character</h1>
            <div class="select-character">
                <fieldset>
                    <legend><h2>Select Existing Character</h2></legend>
                </fieldset>
            </div> <!--select-character-->
            <div class="create-character">
                <fieldset>
                    <legend><h2>Create New Character</h2></legend>
                    <form method="post" onsubmit="createChar(); return false">
                        <table>
                            <tr>
                                <td>Character Name: </td>
                                <td><input type="text" id="charname" required></td>
                            </tr>
                            <tr>
                                <td>Strength(0-10): </td>
                                <td><input type="number" id="strength" value="0" min="0" max="10"></td>
                            </tr>
                            <tr>
                                <td> Agility(0-10): </td>
                                <td><input type="number" id="agility" value="0" min="0" max="10"></td>
                            </tr>
                            <tr>
                                <td>Intelligence(0-10): </td>
                                <td><input type="number" id="intelligence" value="0" min="0" max="10"></td>
                            </tr>
                        </table>
                        <input type="submit" value="Create Character">
                    </form>
                    <div id="createresponse"></div>
                </fieldset>
            </div> <!--create-character-->
        </div>
        <!--import jQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--This is the JS file that will be used on every page-->
        <script src="../main.js"></script>
        <script src="./char_ajax.js"></script>
        <!--Add additional JS files below.-->
    </body>
</html>
