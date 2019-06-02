<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/php-ecommerce/core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';

    $sql ="SELECT * FROM categories WHERE parent = 0";
    $result =$db->query($sql);
?>
<h2 class="text-center">Categories</h2><hr>
<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">
        <table class="table table-bordered">
            <thead>
                <th>Category</th>
                <th>Parent</th>
                <th></th>

            </thead>
            <tbody>
                <?php while($parent = mysqli_fetch_assoc($result)): 
                    $parent_id = (int)$parent['parent'];
                    $sql2="SELECT * FROM categories WHERE parent = $parent_id ";
                    $cresult=$db->query($sql2);

                ?>
                <tr class="bg-primary">
                    <td class="text-light"><?=$parent['category'];?></td>
                    <td class="text-light">Parent</td>
                    <td>
                        <button type="button" class="btn btn-xs btn-light btn-outline-light">
                            <a href="categories.php?edit=<?=$parent['id'];?>">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </button>
                        <button type="button" class="btn btn-xs btn-light btn-outline-light">
                            <a href="categories.php?delete=<?=$parent['id'];?>">
                                <i class="fas fa-eraser"></i>
                            </a>
                        </button>
                    </td>
                </tr>
                    <?php while($child = mysqli_fetch_assoc($cresult)): ?>
                    <tr class="bg-info">
                        <td class="text-light"><?=$child['category']; ?></td>
                        <td class="text-light"><?=$parent['category']; ?></td>
                        <td>
                            <button type="button" class="btn btn-xs btn-light btn-outline-light">
                                <a href="categories.php?edit=<?=$child['id'];?>">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </button>
                            <button type="button" class="btn btn-xs btn-light btn-outline-light">
                                <a href="categories.php?delete=<?=$child['id'];?>">
                                    <i class="fas fa-eraser"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</div>
<?php
    include 'includes/footer.php'; 
?>


