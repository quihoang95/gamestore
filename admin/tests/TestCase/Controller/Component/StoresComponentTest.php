<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\StoresComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\StoresComponent Test Case
 */
class StoresComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\StoresComponent
     */
    protected $Stores;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Stores = new StoresComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Stores);

        parent::tearDown();
    }
}
