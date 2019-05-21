<?php
    require_once '../core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    //Get Brands from DB
    $sql = "SELECT * FROM brand ORDER BY brand";
    $results = $db->query($sql);

?>
    <h2 class="text-center">Brands</h2>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-4">
                <table class="table table-bordered table-striped">
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