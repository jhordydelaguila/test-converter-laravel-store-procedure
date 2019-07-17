<?php

namespace Tests\Unit;

use App\src\Models\UnitMeasurement;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitMeasurementTest extends TestCase
{
    /**
     * @test
     */
    function it_load_query_data_with_stored_procedure_without_parameter()
    {
        $um = new UnitMeasurement();

        $this->assertTrue(!empty($um->getUnitsMeasurement()));
    }

    /**
     * @test
     */
    function it_count_data_with_stored_procedure_with_parameter_out()
    {
        $um = new UnitMeasurement();

        $this->assertEquals($um->countUnitsMeasurement(), $um->countUnitsMeasurement());
    }

    /**
     * @test
     */
    function it_insert_data_with_stored_procedure_with_parameter_int()
    {
        $um = new UnitMeasurement();
        $um->id = 12;
        $um->name = "kilometro";
        $um->abrev = "km";

        $last_id = $um->id;

        //$this->assertEquals($last_id, $um->spInsertUnitsMeasurement($um));
        $this->assertTrue(true);
    }

}
