<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Основи PHP</title>
    <style>
    * {
        font-family: Calibri;
    }

    fieldset {
        margin-bottom: 15px;
        padding: 10px;
    }

    legend {
        padding: 0px 3px;
        font-weight: bold;
    }

    label {
        width: 80px;
        display: inline-block;
        vertical-align: top;
        margin: 6px
    }

    input,
    textarea {
        width: 249px;
    }

    button {
        width: 250px;
        padding: 10px;
        background: #fff;
    }

    .error {
        border: 1px solid red;
    }

    .error_massage {
        color: red;
    }
    </style>
</head>

<body>
    <?php
   $class_name = $error_name = '';
   $class_email = $error_email = '';
   if (!isset($_POST ['submit'])) {
     $_POST['name'] = '';
     $_POST['email'] = '';
   } else {
     $name = test_input($_POST ['name']);
     $email = test_input($_POST ['email']);
     $class_name = !empty($name)? '' : 'error';
     $error_name = !empty($name)? '' : 'Некоректне ім\'я!';

     if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL )) {
       $class_email = 'error';
       $error_email = 'Некоректний email!';
     }
   }
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>Контактна інформація</legend>
            <label for="name">Ім'я</label>
            <input id="name" name="name" value="<?php echo $_POST['name']; ?>"><span> *
                <?php echo $error_name; ?></span><br>
            <label for="email">Email</label>
            <input id="email" name="email" value="<?php echo $_POST['email']; ?>">
            <span class="<?php echo $class_name ; ?>">*
                <?php echo $error_email; ?></span><br>
        </fieldset>
        <button name="submit">Надіслати інформацію</button>
    </form>
</body>

</html>