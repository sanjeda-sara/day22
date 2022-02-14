<?php


namespace App\Classes;


class Products
{
    protected $allProducts;
    protected $result = [];

    public function index()
    {
        return[
          0 => [
              'id'              => 1,
              'category_id'     => 1,
              'name'            => 'Black Hoodie',
              'price'           => 700,
              'description'     => 'Hoodie',
              'image'           => 'h1.jpg'
          ],
           1 =>[
                'id'            => 2,
               'category_id'    => 1,
                'name'          => 'Light Hoodie',
                'price'         => 900,
                'description'   => 'Light Shade Hoodie',
                'image'         => 'h3.webp'
           ],
           2 =>[
                'id'            => 3,
               'category_id'    => 2,
                'name'          => 'Sharee',
                'price'         => 9990,
                'description'   => 'Traditional Sharee Dark',
                'image' => 'sharee2.jpg'
           ],
            3 =>[
                'id'            => 4,
                'category_id'   => 2,
                'name'          => 'Sharee',
                'price'         => 9990,
                'description'   => 'Traditional Sharee: Festive',
                'image'         => 'sharee1.jpg'
            ],
            4 =>[
                'id'            => 5,
                'category_id'   => 3,
                'name'          => 'Kids',
                'price'         => 9990,
                'description'   => 'product details',
                'image'         => 'kids.jpg'
            ],
            5 =>[
                'id' => 6,
                'category_id'   => 3,
                'name'          => 'Kids Fashion',
                'price'         => 10000,
                'description'   => 'product details',
                'image'         => 'kids1.jpg'
            ],
        ];
    }

    public function shortProducts($categoryId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->result, $product);
//                                                ^value
            }
        }
        return $this->result;
    }

    public function getProductDetails ($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}