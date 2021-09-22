<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\CartComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\CartComponent Test Case
 */
class CartComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\CartComponent
     */
    protected $Cart;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Cart = new CartComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cart);

        parent::tearDown();
    }
}
