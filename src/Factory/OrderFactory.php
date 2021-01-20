<?php

namespace App\Factory;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;

class OrderFactory
{
    /**
     * Creates an Order
     * @return Order
     */
    public function create(): Order
    {
        $order = new Order();
        $order
            ->setStatus(Order::STATUS_CART)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());

        return $order;
    }

    /**
     * Creates an item for a product
     * 
     * @param Product $product
     * @param int $quantity
     * 
     * @return OrderItem
     */
    public function createItem(Product $product, int $quantity = 1): OrderItem
    {
        $item = new OrderItem();
        $item->setProduct($product);
        $item->setQuantity($quantity);

        return $item;
    }
}