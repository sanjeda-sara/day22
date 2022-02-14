<?php include "pages/includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image'] ?>" alt="img" class="card-img-top" style="height: 350px; width: 300px">
                        <div class="card-body">
                            <h3 class="card-title"> <?php echo $product['name'] ?></h3>
                            <p class="">Product Price: BDT <?php echo $product['price'] ?></p>
                            <p class="text-justify"><?php echo $product['description'] ?></p>
                            <a href="action.php?pages=productDetails&&product_id=<?php echo $product['id'] ?>" class="btn btn-outline-warning float-right">View</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php"; ?><?php
