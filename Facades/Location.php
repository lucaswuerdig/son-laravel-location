<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 14/03/19
 * Time: 19:31
 */

namespace Modules\Location\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Location
 * @package Modules\Location\Facades
 */
class Location extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Location.location';
    }
}