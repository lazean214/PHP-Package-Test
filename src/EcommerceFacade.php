<?php

namespace Lazean214\Ecommerce;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lazean214\Ecommerce\Skeleton\SkeletonClass
 */
class EcommerceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ecommerce';
    }
}
