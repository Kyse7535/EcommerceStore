<?php
namespace App\Tests;

use App\Entity\Product;
use phpDocumentor\Reflection\Types\True_;

class ProductsTest extends DatabaseDependantTestCase {

        /** @test */
     public function a_product_can_be_created()
     {
        //SETUP
         $name = 'my product name';
         $description = 'my product description';
         $product = new Product();
         $product->setName($name);
         $product->setDescription($description);
         $product->setPrice(94400);

         //DO SOMETHING
         $this->entityManager->persist($product);
         $this->entityManager->flush();


         //MAKE ASSERTIONS
         $this->assertDatabaseHas(Product::class, ['name' => $name, 'description' => $description]);
     }
}