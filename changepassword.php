<?php

if (isset($_POST['newpassword'])) {

    $id = $_SESSION['id'];
    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
    $query1 = "select Password from Forum where ForumId='$id'";
    $result1 = mysqli_query($link, $query1);
    if (!$result1) {
        echo "not found";
    } else {
        $row = mysqli_fetch_row($result1);
        $currentpassword = $_POST['currentpassword'];
        $newpassword = $_POST['changepassword'];
        $conformpassword = $_POST['retypepassword'];

        if ($currentpassword == $row[0]) {

            $query2 = "update Forum set Password='$newpassword' where ForumId='$id'";

            $result2 = mysqli_query($link, $query2);

            if (!$result2) {
                echo "There is an error  ";
            } else {
                $message = "successfully password changed Please";
            }
        } else {
            $error = "Invalid password for email Please try again";
        }
    }
}
?>