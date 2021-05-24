<?php 
require 'functions/functions.php';
session_start();
ob_start();
// Check whether user is logged on or not
if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
}
// Establish Database Connection
$conn = connect();
?>

<?php
if(isset($_GET['id']) && $_GET['id'] != $_SESSION['user_id']) {
    $current_id = $_GET['id'];
    $flag = 1;
} else {
    $current_id = $_SESSION['user_id'];
    $flag = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Social Network</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <style>
  
    .profile{
        margin-left: 50px;
        background-color: white;
        box-shadow: 0 0 5px #4267b2;
        width:auto;
        padding: 20px;
    }
  
    </style>
</head>
<body class="container-fluid"> <?php include 'includes/usernavbar.php'; ?>
    <div class="container">
       
        <h1>Profile</h1>
        <?php
        $postsql;
        if($flag == 0) { // Your Own Profile       
            $postsql = "SELECT posts.post_caption, posts.post_time, users.user_firstname, users.user_lastname,
                                posts.post_public, users.user_id, users.user_gender, users.user_nickname,
                                users.user_birthdate, users.user_hometown, users.user_status, users.user_about, 
                                posts.post_id
                        FROM posts
                        JOIN users
                        ON users.user_id = posts.post_by
                        WHERE posts.post_by = $current_id
                        ORDER BY posts.post_time DESC";
            $profilesql = "SELECT users.user_id, users.user_gender, users.user_hometown, users.user_status, users.user_birthdate,
                                 users.user_firstname, users.user_lastname
                          FROM users
                          WHERE users.user_id = $current_id";
            $profilequery = mysqli_query($conn, $profilesql);
        } else { // Another Profile ---> Retrieve User data and friendship status
            $profilesql = "SELECT users.user_id, users.user_gender, users.user_hometown, users.user_status, users.user_birthdate,
                                    users.user_firstname, users.user_lastname, userfriends.friendship_status
                            FROM users
                            LEFT JOIN (
                                SELECT friendship.user1_id AS user_id, friendship.friendship_status
                                FROM friendship
                                WHERE friendship.user1_id = $current_id AND friendship.user2_id = {$_SESSION['user_id']}
                                UNION
                                SELECT friendship.user2_id AS user_id, friendship.friendship_status
                                FROM friendship
                                WHERE friendship.user1_id = {$_SESSION['user_id']} AND friendship.user2_id = $current_id
                            ) userfriends
                            ON userfriends.user_id = users.user_id
                            WHERE users.user_id = $current_id";
            $profilequery = mysqli_query($conn, $profilesql);
            $row = mysqli_fetch_assoc($profilequery);
            mysqli_data_seek($profilequery,0);
            
        }
        $postquery = mysqli_query($conn, $postsql);    
        if($postquery)
        {
           
                // Profile Info
                include 'includes/profile.php';
                ?>
                <br>
               
               
               
                <?php } ?>
               
    </div>
    
</body>

</html>
