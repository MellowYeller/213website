<!DOCTYPE html>
<!--
Basic outline for HTML pages
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select or Create</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT']."/213Final/lib/navBar.php"; ?>
        <div class ="content">
            <!--all other content and divs go here-->
            <h1>Create or Select a Character</h1>
            <div class="select-character">
                <fieldset>
                    <legend><h2>Select</h2></legend>
                </fieldset>
            </div> <!--select-character-->
            <div class="create-character">
                <fieldset>
                    <legend><h2>Create</h2></legend>
                </fieldset>
            </div> <!--create-character-->
        </div>
        <!--import jQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--This is the JS file that will be used on every page-->
        <script src="../main.js"></script>
        <!--Add additional JS files below.-->
    </body>
</html>
