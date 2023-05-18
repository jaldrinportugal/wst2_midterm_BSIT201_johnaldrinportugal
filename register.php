<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <H1>Registration</H1>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <button>Submit</button>
    </form>
    <?php
$pdo = new PDO('mysql:host=localhost;dbname=bsit201_portugal_chatroom','root','');

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

$query = 'INSERT INTO accounts(email,password,name) VALUES(:email,:password,:name)';

$stmt = $pdo->prepare($query);

$stmt->bindValue ('email');
$stmt->bindValue ('password');
$stmt->bindValue ('name');
$stmt->execute();
?>
</body>
</html>