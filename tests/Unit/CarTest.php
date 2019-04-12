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
        $record->model='ford';
        $record->make='taurus';
        $record->year='2006';

        $this->assertTrue($record->save());

    }

    public function testUpdateCar() {

    $car = Cars::find(1);

    $car->year = '2000';

    $this->assertTrue($car->save());
    }
}
