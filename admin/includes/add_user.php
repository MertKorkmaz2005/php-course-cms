<?php
if(isset($_POST['create_user'])){
    echo $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role =   $_POST['user_role'];   



    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];



    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    // $post_date = date('d-m-y');

    //    move_uploaded_file( $post_image_temp, "../images/$post_image");
    $query = "INSERT INTO users (user_firstname, user_lastname, user_role, username, user_email, user_password)";
    $query .= " VALUES ('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$username}', '{$user_email}', '{$user_password}')";

    // Fatal error: Uncaught mysqli_sql_exception: Field 'user_image' doesn't have a default value in /Applications/XAMPP/xamppfiles/htdocs/
    //cms/admin/includes/add_user.php:23 Stack trace: #0 /
    //Applications/XAMPP/xamppfiles/htdocs/cms/admin/includes/add_user.php(23): 
    //mysqli_query(Object(mysqli), 'INSERT INTO use...') #1 /Applications/XAMPP/xamppfiles/htdocs/cms/admin/users.php(44):
    // include('/Applications/X...') #2 {main} thrown in /Applications/XAMPP/xamppfiles/htdocs/cms/admin/includes/add_user.php on line 23

    // user_image verwijdert vanwege deze error en randSalt ook verwijdert van de database VRAAG HULP 


    $create_user_query = mysqli_query($connection, $query);
    confirmQuery($create_user_query);

    echo "User Created: " . " " . "<a href='users.php'>View Users</a>";

   


} 

?>


<form action="" method="post" enctype="multipart/form-data">






<div class="form-group">
    <label for="title">Firstname</label>
    <input type="text" class="form-control" name="user_firstname">
</div>

<div class="form-group">
    <label for="post_status">Lastname</label>
    <input type="text" class="form-control" name="user_lastname">
</div>







<div class="form-group">

    <select name="user_role" id="">
        <option value="subscriber">Select Options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>

    








    </select>
</div>




<div class="form-group">
    <label for="post_tags">Username</label>
    <input type="text" class="form-control"  name="username">
</div>

<div class="form-group">
    <label for="post_tags">Email</label>
    <input type="email" class="form-control"  name="user_email">
</div>

<div class="form-group">
    <label for="post_tags">password</label>
    <input type="password" class="form-control"  name="user_password">
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit"  name="create_user" value="Add User" >
</div>


</form>