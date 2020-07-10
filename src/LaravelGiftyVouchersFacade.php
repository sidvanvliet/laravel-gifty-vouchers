<?php

namespace Sidvanvliet\LaravelGiftyVouchers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sidvanvliet\LaravelGiftyVouchers\Skeleton\SkeletonClass
 */
class LaravelGiftyVouchersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-gifty-vouchers';
    }
}
