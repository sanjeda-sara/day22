<?php include "pages/includes/header.php"; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/<?php echo $productDetails['image']; ?>" class="img-fluid" style="" alt="">
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="card">
                            <div class="card card-body">
                                <h2 class="font-weight-bold"><?php echo $productDetails['name']; ?></h2>
                                <p>Price: BDT <?php echo $productDetails['price']; ?></p>
                                <p><?php echo $productDetails['description']; ?></p>
                                <a href="javascript:void(0)" class="btn btn-outline-success"> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php"; ?>
