<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
   public function testInsertCars()
    {

        $record = new Cars();
        $record->user_id='5';
        $record->model='taurus';
        $record->make='ford';
        $record->year='2006';

        $this->assertTrue($record->save());

    }

    public function testUpdateCar() {

    $car = Cars::find(1);

    $car->year = '2000';

    $this->assertTrue($car->save());
    }

    public function testDeleteCar()
    {
        $record = Cars::inRandomOrder()->first();

        $this->assertTrue($record->delete());

    }
    public function testCarCount() {
        $cars = Cars::All();
        $count = $cars->count();

        $this->assertCount($count>=50, ['foo']);
    }

    public function testCarYear() {

        $record = Cars::inRandomOrder()->first();

        $this->assertInternalType("int", $record->year);
    }

    public function testCarMakeEqualsValue() {

        $record = Cars::inRandomOrder()->first();

        $this->assertThat(
            $record->make,
            $this->logicalOr(
                $this->equalTo('ford'),
                $this->equalTo('honda'),
                $this->equalTo('toyota')));
   }

    public function testModelIsString()
    {

        $this->assertInternalType("string",Cars::class);
        }
}
