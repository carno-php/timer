<?php
/**
 * Timer by swoole
 * User: moyo
 * Date: 08/08/2017
 * Time: 10:35 AM
 */

namespace Carno\Timer\Powered;

use Carno\Timer\Contract;

class Swoole implements Contract
{
    /**
     * @param $ms
     * @param callable $fn
     * @return int
     */
    public function after(int $ms, callable $fn) : int
    {
        return swoole_timer_after($ms, $fn);
    }

    /**
     * @param $ms
     * @param callable $fn
     * @return int
     */
    public function loop(int $ms, callable $fn) : int
    {
        return swoole_timer_tick($ms, $fn);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function clear(int $id) : bool
    {
        return swoole_timer_exists($id) ? swoole_timer_clear($id) : false;
    }
}
