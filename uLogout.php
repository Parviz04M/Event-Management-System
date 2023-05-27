<?php
// Assuming you have a variable with the user ID, you can assign it to the $userId variable
$userId = "123456";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="uLogout.css">
    <title>Profile</title>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="uHome.php">Home</a></li>
                <li><a href="uEvents.php">Events</a></li>
                <li><a href="uNews.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="nav-profile-icon" id="active">
                    <a href="uLogout.php"><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </nav>
    </header>

    <?php
    session_start();
    ?>

    <main>
        <h1>Profile Page</h1>

        <p>User ID: <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $username = $GLOBALS['username'];
                        echo $username;
                    }
                    ?></p>

        <input type="button" name="logout" value="Logout" onclick="logout()">

        <!-- Add any additional content or functionality here -->
    </main>

    <footer>
        <!-- Include your footer code here -->
    </footer>

    <script>
        function logout() {
            <?php session_destroy(); // destroy the session 
            ?>
            window.location.href = "uLogin.php";
        }
    </script>
</body>


<!--

session_start(); // start the session
session_destroy(); // destroy the session
header("Location: login.php"); // redirect to the login page
exit(); // ensure script termination
?>-->

</html>