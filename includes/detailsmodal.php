<!-- Details Modal -->
<?php ob_start(); ?>
<div class="modal" id="details-modal" tabindex="-1" role="dialog" aria-labelled-by="details-1" aria-hidden="true">
    <div class="modal-dialogue modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Levi's Jeans</h4>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="images/products/men4.png" alt="levi's jeans" class="details img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officiis ratione doloremque deserunt, fugit esse mollitia sit quis! Sequi explicabo nesciunt sint ratione unde sit eos placeat debitis maxime minima!</p>
                            <hr>
                            <p>Price: $34.99</p>
                            <p>Brand: Levi's</p>
                            <form action="add_cart.php" method="post" class="form ml-2">
                                <div class="form-group row">
                                    <div class="col-xs-1">
                                        <label for="quantity">Quantity: </label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">                                                        
                                    </div>
                                    <p>Available: 3</p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="size">Size: </label>
                                        <select name="size" id="size" class="form-control">
                                            <option value=""></option>
                                            <option value="28">28</option>
                                            <option value="32">32</option>
                                            <option value="38">38</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<?php echo ob_get_clean(); ?>