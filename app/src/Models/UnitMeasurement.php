<?php

namespace App\src\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UnitMeasurement extends Model
{
    protected $table = "units_measurement";

    protected $fillable = [
        'name',
        'abrev',
    ];

    public function getUnitsMeasurement()
    {
        $data = DB::select('call sp_units_measurement()');
        return $data;
    }

    public function countUnitsMeasurement(): int
    {
        $data = DB::select('call sp_count_units(@units)');
        $results = DB::select('select @units as units');
        return $results[0]->units;
    }

    public function spInsertUnitsMeasurement(UnitMeasurement $measurement)
    {
        $result = DB::select('call sp_insert_unit_measurement(?,?,?,@last_id)', [
            $measurement->id,
            $measurement->name,
            $measurement->abrev
        ]);

        $result = DB::select('select @last_id as last_id');

        return $result[0]->last_id;
    }

}
