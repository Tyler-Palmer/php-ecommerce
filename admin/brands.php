<?php
    require_once '../core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    
    //Get Brands from DB
    $sql_get = "SELECT * FROM brand ORDER BY brand";
    $results = $db->query($sql_get);
    $errors = array();

    //Edit Brand

    if(isset($_GET['edit']) && !empty($_GET['edit'])){
        $edit_id = (int)$_GET['edit'];
        $edit_id = sanitize($edit_id);
        $sql_edit = "SELECT * FROM brand WHERE id = '$edit_id'";
        $edit_result = $db->query($sql_edit);
        $eBrand = mysqli_fetch_assoc($edit_result);
    };

    //Delete Brand
    if(isset($_GET['delete']) && !empty($_GET['delete'])){
        $delete_id = (int)$_GET['delete'];
        $delete_id = sanitize($delete_id);
        $sql_delete = "DELETE FROM brand WHERE id = '$delete_id'";
        $db->query($sql_delete);
        header('Location: brands.php');
    };

    //If Add Form is Submitted
    if(isset($_POST['add_submit'])){
        $brand = sanitize($_POST['brand']);
        //Check if brand is empty
        if($_POST['brand'] == ''){
            $errors[] .= 'You must enter a brand';
        }
        //Check if brand already exists in db
        $sql_check = "SELECT * FROM brand WHERE brand = '$brand'";
        if(isset($_GET['edit'])){
            $sql = "SELECT * FROM brand WHERE brand = '$brand' AND id != '$edit_id'";
        }
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
            if(isset($_GET['edit'])){
                $sql_add = "UPDATE brand SET brand = '$brand' WHERE id = '$edit_id'";
            }
            $db->query($sql_add);
            header('Location: brands.php');
        }
    }
?>
    <h2 class="text-center">Brands</h2><hr>
    <!-- Brand Form -->
    <div class="container">
        <div class="row justify-content-md-center">
            <form class="form-inline" action="brands.php<?=((isset($_GET['edit']))? '?edit='.$edit_id : ''); ?>" method="post">
                <div class="form-group mb-2">
                    <?php 
                        $brand_value = '';
                        if(isset($_GET['edit'])){
                        $brand_value = $eBrand['brand'];
                        }else{
                            if(isset($_POST['brand'])){
                                $brand_value = sanitize($_POST['brand']);
                            }
                        } 
                    ?>
                    <label for="brand"><?= ((isset($_GET['edit']))? 'Edit':'Add A'); ?> Brand: </label>
                    <input type="text" class="form-control" name="brand" id="brand" value="<?=$brand_value; ?>">
                    <?php if(isset($_GET['edit'])): ?>
                        <a href="brands.php" class="btn btn-primary">Cancel</a>
                   <?php endif; ?>
                    <input type="submit" class="btn btn-md btn-success ml-1" name="add_submit" value="<?=((isset($_GET['edit']))? 'Edit' : 'Add') ; ?>">
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