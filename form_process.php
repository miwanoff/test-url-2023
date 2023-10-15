<?php
if (isset($_POST['submit'])) {
    $valid_form = true;
    if ($_POST['FName'] == "") {
        echo "Введіть своє ім'я! ";
        $valid_form = false;
    } else {
        $name = $_POST['FName'];
    }
    if ($_POST['LName'] == "") {
        echo "Введіть ім'я коритстувача! ";
        $valid_form = false;
    } else {
        $username = $_POST['LName'];
    }
    if ($valid_form === true) {
        echo "Your First Name is:" . $_POST["FName"] . "<br/>";
        echo "Your Last Name is:" . $_POST["LName"] . "<br/>";
    }
    // echo "Your City is:" . $_POST["City"] . "<br/>";
    // echo "Your State is:" . $_POST["State"] . "<br/>";
    // echo "<br/>";
    // echo "Your Message is:" . $_POST["Message"];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>A Web Page</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        First Name:<br />
        <input type="text" name="FName" /><br />
        Last Name:<br /> <input type="text" name="LName" /><br />
        <!-- City:<br /> <input type="text" name="City" /><br />
        State:<br /> <input type="text" name="State" /><br />
        Message:<br /> <textarea name="Message" cols="30" rows="5">
      </textarea><br /> -->
        <input type="submit" name="submit" value="Submit Data" />
    </form>
</body>

</html>