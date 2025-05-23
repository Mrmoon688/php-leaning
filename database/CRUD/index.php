<?php require_once('inc/header.php') ?>
<a href="create.php" class="btn btn-success btn-sm mb-2">Create</a>

<!-- Alert for Delete successful -->
<?php
if (isset($_GET['create'])) {
?>
    <div class="alert alert-success">Created successfully</div>
<?php
}
?>

<?php
if (isset($_GET['delete'])) {
?>
    <div class="alert alert-danger">Deleted successfully</div>
<?php
}
?>
<table class="table table-striped">
    <tr>
        <td>No</td>
        <td>Image</td>
        <td>Name</td>
        <td>Options</td>
    </tr>
    <?php
    $sql = "SELECT * FROM crud";
    $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // print_r($data);
    foreach ($data as $d) {
        // print_r($d);
        $id = $d['id'];
        $name = $d['name'];
        $image = $d['image'];

    ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td>
                <img src="image/<?php echo $image ?>" width="200px" style="border-radius: 10%;" alt="">
            </td>
            <td>
                <a href="update.php?id=<?php echo $id ?>" class="btn btn-primary">Update</a>
                <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>


</table>
<?php require_once('inc/footer.php') ?>