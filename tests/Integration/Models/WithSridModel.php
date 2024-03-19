<?php

use Cyberhawk\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithSridModel.
 *
 * @property int                                          id
 * @property \Cyberhawk\LaravelMysqlSpatial\Types\Point      location
 * @property \Cyberhawk\LaravelMysqlSpatial\Types\LineString line
 * @property \Cyberhawk\LaravelMysqlSpatial\Types\LineString shape
 */
class WithSridModel extends Model
{
    use SpatialTrait;

    protected $table = 'with_srid';

    protected $spatialFields = ['location', 'line'];

    public $timestamps = false;
}
