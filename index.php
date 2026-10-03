<!-- php code with variable data assignment -->
<!-- internal php, external php -->
<?php include "pure_php.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
    <a href="next_page.php">Click to Next</a>
    <a href="example2.php">Click to Example 2</a>
    <!-- <h1>HELLO, WORLD!</h1> -->
    <?php //echo "<h1>HELLO, WORLD!</h1>";?>

    <h2>Username: <u><?php echo $username; ?></u></h2>
    <h2>User ID: <u><?php echo $user_id; ?></u></h2>
    <h2>User Role: <u><?php echo $user_role; ?></u></h2>
    <h2>User Number: <u><?php echo $user_number; ?></u></h2>

    <button type="button" onclick="greetings()">Greet User</button>
    <button type="button" onclick="welcomeUser()">GREETINGS</button>

    <script>
        //variables
        var username = "<?php echo $username; ?>";
        var user_id = "<?php echo $user_id; ?>";
        //Function
        function greetings() {
            alert("Hello " + username + "Your UserID is: "+user_id);
        }

        function welcomeUser() {
            alert("Welcome, " + username + "!");
        }
    </script>
</body>
</html>