<?php

use Cyberhawk\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeometryModel.
 *
 * @property int                                          id
 * @property \Cyberhawk\LaravelMysqlSpatial\Types\Point      location
 * @property \Cyberhawk\LaravelMysqlSpatial\Types\LineString line
 * @property \Cyberhawk\LaravelMysqlSpatial\Types\LineString shape
 */
class GeometryModel extends Model
{
    use SpatialTrait;

    protected $table = 'geometry';

    protected $spatialFields = ['location', 'line', 'multi_geometries'];
}
