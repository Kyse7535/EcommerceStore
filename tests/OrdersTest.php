<?php
namespace App\Tests;

use App\Entity\Order;
use phpDocumentor\Reflection\Types\True_;

class OrdersTest extends DatabaseDependantTestCase {

    /** @test */
    public function an_order_can_be_created()
    {
        //SETUP
        $deliveryName = 'Ringo starr';
        $deliveryAddress = '44 Penny Lane, Liverpool';
        $order = new Order();
        $order->setDeliveryName($deliveryName);
        $order->setDeliveryAddress($deliveryAddress);

        //DO SOMETHING
        $this->entityManager->persist($order);
        $this->entityManager->flush();


        //MAKE ASSERTIONS
        $this->assertDatabaseHas(Order::class,
            ['deliveryName' => $deliveryName,
                'deliveryAddress' => $deliveryAddress]);
    }
}