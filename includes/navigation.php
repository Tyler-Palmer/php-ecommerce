<?php
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>

<nav class="navbar navbar-expand-lg bg-light">
    <a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mr-auto">
            <?php while($parent = mysqli_fetch_assoc($pquery)) : ?>
                <?php 
                    $parent_id = $parent['id']; 
                    $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id' ";
                    $cquery = $db->query($sql2);
                ?>
                <!-- Menu Items -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $parent['category']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
                            <a href="#" class="dropdown-item"><?php echo $child['category']; ?></a>
                        <?php endwhile; ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</nav>

<!-- <nav class="navbar navbar-expand-lg bg-light">
  <a class="navbar-brand" href="#">Shaunta's Boutique Admin</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Brands</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav> -->