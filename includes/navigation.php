<?php
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row justify-content-flex-start">
            <a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
            <ul class="nav navbar-nav list-inline">
                <?php while($parent = mysqli_fetch_assoc($pquery)) : ?>
                    <?php 
                        $parent_id = $parent['id']; 
                        $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id' ";
                        $cquery = $db->query($sql2);
                    ?>
                    <!-- Menu Items -->
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $parent['category']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
                                <li class="nav-item"><a href="#"><?php echo $child['category']; ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</nav>