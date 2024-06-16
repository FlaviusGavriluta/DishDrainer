<?php declare(strict_types = 1);

use KitchenCounter\DishDrainer;
use KitchenCounter\Pot;
use PHPUnit\Framework\TestCase;

final class TestDishDrainer extends TestCase
{
    private $dishDrainer;

    protected function setUp() : void
    {
        $this->dishDrainer = new DishDrainer();
    }

    protected function tearDown() : void
    {
        $this->dishDrainer = null;
    }

    public function testNewDishDrainerInstance_Create() : void
    {
        $this->assertInstanceOf(DishDrainer::class, $this->dishDrainer);
    }

    public function testNewDishDrainerInstance_IsEmpty() : void
    {
        $this->assertTrue($this->dishDrainer->isEmpty());
    }

    public function testIfPopReturnsNull_WhenDishDrainerIsEmpty() : void
    {
        $this->assertEquals(null, $this->dishDrainer->pop());
    }

    public function testAfterOnePush_DishDrainerIsNotEmpty() : void
    {
        $this->dishDrainer->push(new Pot());
        $this->assertFalse($this->dishDrainer->isEmpty());
    }

    public function testAfterOnePushAndOnePop_DishDrainerIsEmpty() : void
    {
        $this->dishDrainer->push(new Pot());
        $this->dishDrainer->pop();
        $this->assertTrue($this->dishDrainer->isEmpty());
    }

    public function testAfterTwoPushesAndOnePop_DishDrainerIsNotEmpty() : void
    {
        $this->dishDrainer->push(new Pot());
        $this->dishDrainer->push(new Pot());
        $this->dishDrainer->pop();
        $this->assertFalse($this->dishDrainer->isEmpty());
    }

    public function testAfterOnePush_PopReturnsPot() : void
    {
        $this->dishDrainer->push(new Pot());
        $this->assertInstanceOf(Pot::class, $this->dishDrainer->pop());
    }

    public function testAfterPushingX_PopReturnsX() : void
    {
        for ($x = 95; $x < 100; $x++) {
            $this->dishDrainer->push(new Pot($x));
            $this->assertEquals($x, $this->dishDrainer->pop()->getSize());
        }
    }

    public function testAfterPushingXThenY_PopReturnsYThenX() : void
    {
        $x = 99;
        $y = 88;

        $this->dishDrainer->push(new Pot($x));
        $this->dishDrainer->push(new Pot($y));

        $this->assertEquals($y, $this->dishDrainer->pop()->getSize());
        $this->assertEquals($x, $this->dishDrainer->pop()->getSize());
    }
}
