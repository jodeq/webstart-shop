<?php

namespace App\Storage;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartSessionStorage
{
    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * @var OrderRepository
     */
    private $cartRepository;

    /**
     * @var string
     */
    const CART_KEY_NAME = 'cart_id';

    /**
     * CartSessionStorage constructor
     *
     * @param SessionInterface $session
     * @param OrderRepository $cartRepository
     */
    public function __construct(SessionInterface $session, OrderRepository $cartRepository)
    {
        $this->session = $session;
        $this->cartRepository = $cartRepository;
    }
    
    /**
     * Gets the cart in session
     * 
     * @return Order|null
     */
    public function getCart(): ?Order
    {
        return $this->cartRepository->findOneBy([
            'id' => $this->getCartId(),
            'status' => Order::STATUS_CART
        ]);
    }

    /**
     * Sets the cart in session
     *
     * @param Order $cart
     * @return void
     */
    public function setCart(Order $cart): void
    {
        $this->session->set(self::CART_KEY_NAME, $cart->getId());
    }

    /**
     * Returns the cart id
     *
     * @return integer|null
     */
    private function getCartId(): ?int
    {
        return $this->session->get(self::CART_KEY_NAME);
    }

}