<?php
    require_once 'core/init.php';
    include 'includes/head.php'; 
    include 'includes/navigation.php';
    include 'includes/headerfull.php';
    include 'includes/leftbar.php';

    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured = $db->query($sql);
?>
                <!-- Main Content -->
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <h2 class="text center">Featured Products</h2>
                    </div>
                    <div class="row justify-content-center">
                        <?php while($product = mysqli_fetch_assoc($featured)) : ?>
                            <div class="col-sm-3 text-center">
                                <h4><?= $product['title']; ?></h4>
                                <img class="img-thumbnail product" src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" />
                                <p class="list-price text-danger">List Price: <s>$<?= $product['list_price']; ?></s></p>
                                <p class="price">Our Price: $<?=$product['price']; ?></p>
                                <button type="button" class="btn btn-sm btn-success" onClick="detailsmodal(<?= $product['id']; ?>)">Details</button>
                            </div>
                        <?php endwhile ; ?>
                    </div>
                </div>
<?php
    include 'includes/rightbar.php';
    include 'includes/footer.php';
   
?>
                