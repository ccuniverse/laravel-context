<?php
/**
 * @link       http://www.51talk.com
 * @copyright  copyright(2020) 51talk.com all rights reserved
 */

namespace Talk\Context;

use Hhxsv5\LaravelS\Illuminate\Cleaners\BaseCleaner;
use Illuminate\Support\Facades\Facade;

/**
 * only for hhxsv5/laravel-s
 *
 * @package Talk\Context
 */
class Cleaner extends BaseCleaner
{
    public function clean()
    {
        Manager::release();
        $this->currentApp->forgetInstance('context');
        Facade::clearResolvedInstance('context');
    }
}