<?php
/**
 * Timer API
 * User: moyo
 * Date: 08/08/2017
 * Time: 10:38 AM
 */

namespace Carno\Timer;

interface Contract
{
    /**
     * @param int $ms
     * @param callable $fn
     * @return int
     */
    public function after(int $ms, callable $fn) : int;

    /**
     * @param int $ms
     * @param callable $fn
     * @return int
     */
    public function loop(int $ms, callable $fn) : int;

    /**
     * @param int $id
     * @return bool
     */
    public function clear(int $id) : bool;
}
