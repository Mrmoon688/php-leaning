<?php require_once('inc/header.php') ?>
<a href="index.php" class="btn btn-success btn-sm mb-2">Back</a>
<form action="" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="">Enter Your Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Choose Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <input type="submit" name="submit" value="Create" class="btn btn-primary">
        </div>
    </div>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // print_r($_FILES);
    $name = $_POST['name'];
    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = 'image/' . $image_name;
    //upload file to img folder
    move_uploaded_file($tmp_name, $path);

    //insert into database ထဲထည့်မယ်
    $sql = "insert into crud(name,image) values(?,?)";
    $result = $pdo->prepare($sql);
    $result->execute([$name, $image_name]);

    //redirect to index.php page
    header('location:index.php?create=success');
}
?>
<?php require_once('inc/footer.php') ?>