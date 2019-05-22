<?php
    require_once '../core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    
    //Get Brands from DB
    $sql = "SELECT * FROM brand ORDER BY brand";
    $results = $db->query($sql);
    $errors = array();
    //If Add Form is Submitted
    if(isset($_POST['add_submit'])){
        $brand = sanitize($_POST['brand']);
        //Check if brand is empty
        if($_POST['brand'] == ''){
            $errors[] .= 'You must enter a brand';
        }
        //Check if brand already exists in db
        $sql_check = "SELECT * FROM brand WHERE brand = '$brand'";
        $result = $db->query($sql_check);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $errors[] .= $brand.' already exists in the db, please choose another brand.';
        };
        //Display errors
        if(!empty($errors)){
            echo display_errors($errors);
        }else{
            //Add brand to db
            $sql_add = "INSERT INTO brand (brand) VALUES ('$brand')";
            $db->query($sql_add);
            header('Location: brands.php');
        }
    }
?>
    <h2 class="text-center">Brands</h2><hr>
    <!-- Brand Form -->
    <div class="container">
        <div class="row justify-content-md-center">
            <form class="form-inline" action="brands.php" method="post">
                <div class="form-group mb-2">
                    <label for="brand">Add A Brand: </label>
                    <input type="text" class="form-control" name="brand" id="brand" value="<?=((isset($_POST['brand']))?$_POST['brand']:''); ?>">
                    <input type="submit" class="btn btn-md btn-success ml-1" name="add_submit" value="Add Brand">
                </div>
            </form>
        </div><hr>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-4">
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <th></th>
                        <th>Brand</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php while($brand = mysqli_fetch_assoc($results)): ?>
                        <tr>
                            <td>
                                <a href="brands.php?edit=<?=$brand['id']; ?>" class="btn btn-xs btn-outline-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                            <td><?=$brand['brand'];?></td>
                            <td>
                                <a href="brands.php?delete=<?=$brand['id']; ?>" class="btn btn-xs btn-outline-primary">
                                    <i class="fas fa-eraser"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
    include 'includes/footer.php';
?>