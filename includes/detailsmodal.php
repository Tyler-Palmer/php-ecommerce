<?php
    require_once '../core/init.php';
    $id =$_POST['id'];
    $id = (int)$id;
    $sql = "SELECT * FROM products WHERE id ='$id'";
    $result = $db->query($sql);
    $product = mysqli_fetch_assoc($result);
    $brand_id = $product['brand'];
    $sql2 = "SELECT brand FROM brand WHERE id='$brand_id'";
    $brand_query = $db->query($sql2);
    $brand = mysqli_fetch_assoc($brand_query);
    $size_string = $product['sizes'];
    $size_array = explode(',',$size_string);
?>

<!-- Details Modal -->
<?php ob_start(); ?>
<div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelled-by="details-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialogue modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"><?= $product['title']; ?></h4>
                <button class="close" onclick="closeModal()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="details img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p>Price: $<?= $product['price']; ?></p>
                            <hr>
                            <p><?= $product['description'] ?></p>
                            <p>Brand: <?= $brand['brand']; ?></p>
                            <form action="add_cart.php" method="post" class="form ml-2">
                                <div class="form-group row">
                                    <div class="col-xs-1">
                                        <label for="quantity">Quantity: </label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">                                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="size">Size: </label>
                                        <select name="size" id="size" class="form-control">
                                            <option value=""></option>
                                            <?php foreach($size_array as $string) {
                                                $string_array = explode(':', $string);
                                                $size = $string_array[0];
                                                $quantity = $string_array[1];
                                                echo '<option value="'.$size.'">'.$size.' ('.$quantity.' Available)</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<script>
    function closeModal(){
        jQuery('#details-modal').modal('hide');
        setTimeout(function(){
            jQuery('#details-modal').remove();
            jQuery('.modal-backdrop').remove();
        },500);
    }
</script>
<?php echo ob_get_clean(); ?>