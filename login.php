<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .error {
            color: red;
            font-size: smaller;
        }
    </style>
</head>
<body>
<?php
$name = $password = "";
$nameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }

    if (empty($_POST["p"])) {
        $passwordErr = "masukkan password";
    } else {
        $password = bersihkan_input($_POST["p"]);
    }
}

// Fungsi untuk membersihkan dan mengamankan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="u">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Password : <input type="password" name="p">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>
