<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = [];
$title = '';
$description = '';
$price = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $created_at = date('Y-m-d H:i:s');

    if (!$title) {
        $errors[] = 'Title field is required';
    }

    if (!$description) {
        $errors[] = 'Description field is required';
    }

    if (!$price) {
        $errors[] = 'Price field is required';
    }

   if (empty($errors)) {
    $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, created_at) 
    VALUES(:title, :image, :description, :price, :created_at)");
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':created_at', $created_at);
    $statement->execute();
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body style="background-color:#F5F5F5;">
   <div style="margin-top:50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <h5 class="text-center">Create new product</h5>
                <?php if(!empty($errors)):?>
                    <div class="alert alert-danger">
                    <?php foreach($errors as $error):?>
                        <?php echo '<li>' .$error . '</li>' ?>
                    <?php endforeach; ?>    
                </div>
                <?php endif;?>
                 <form method = "POST" action="create.php">
                     <div class="form-group mb-2">
                         <label for="image">Image</label><br>
                         <input type="file" name="image">
                     </div>

                     <div class="form-group mb-2">
                         <label for="title">Title</label><br>
                         <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
                     </div>

                     <div class="form-group mb-2">
                         <label for="description">Description</label><br>
                         <input type="text" name="description" class="form-control" value="<?php echo $description ?>">
                     </div>

                     <div class="form-group mb-2">
                         <label for="price">Price</label><br>
                         <input type="text" name="price" class="form-control" value="<?php echo $price ?>">
                     </div>

                     <div class="form-group mb-2">
                         <button class="btn btn-success">Create</button>
                     </div>
                 </form>
                </div>
            </div>
        </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>    
</body>
</html>