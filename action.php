<?php

require_once 'vendor/autoload.php';
use App\Classes\Category;
use App\Classes\Products;


if(isset($_GET['pages']))
{
    if ($_GET['pages']=='all-products')
    {
        $category   = new Category;
        $categories = $category->category();
        $product    = new Products();
        $products   = $product->index();
        include 'pages/allProducts.php';
    }
    elseif ($_GET['pages'] == 'category-products')
    {
        $category   = new Category;
        $categories = $category->category();
        $product    = new Products();
        $products    = $product->shortProducts($_GET['category_id']);
        include 'pages/allProducts.php';
    }
    elseif ($_GET['pages'] == 'productDetails')
    {
        $category           = new Category;
        $categories         = $category->category();
        $product            = new Products();
        $productDetails     = $product->getProductDetails($_GET['product_id']);
        //                              this is my parameter, product er id dhore niye ashbo
        include 'pages/productDetails.php';
    }
}


