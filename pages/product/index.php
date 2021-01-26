<?php 
    $subBreadcrumb = "Product";
    include_once('../templates/header-cart.php');
?>
    <div class="container mt-5">
        <a href="detail-product.php">Detail Product</a>
        <div class="row">
            <?php 
                $a = 1;
                while($a < 5) {
                    echo "<div class='col md 3'>";
                        echo "<div class='card' style='width: 18rem;'>";
                            echo "<div class = 'text-center'>";
                                echo "<img style='width: 100px; height: 100px;' src='../../assets/images/produk-1.jpg' class='card-img-top' alt='...'>";
                            echo "</div>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>Card title</h5>";
                                echo "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
                                echo "<div class = 'text-center'>";
                                    echo "<a href='#' class='btn btn-primary'>More Details</a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    $a ++;
                }
            ?>
        </div>
    </div>
<?php include_once('../templates/footer.php') ;?>