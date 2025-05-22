<form action="" method="post">
    <!-- name input -->
    <p>
        <label for="">Name</label>
        <input type="text" name="name">
    </p>

    <p>
        <label for="">Age</label>

        <input type="text" name="age">
    </p>


    <p>
        <label for="">Location</label>
        <input type="text" name="location">
    </p>
    <p>
        <input type="submit" name="submit" value="Create">
    </p>
</form>

<?php
$opd= new PDO('mysql:dbname=php_project;host=localhost', 'root', '');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // print_r($_POST);
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];

    $sql = "insert into users(name,age,location) value(?,?,?)";
    $reslut= $opd->prepare($sql);
    $reslut->execute([$name, $age, $location]);
}
