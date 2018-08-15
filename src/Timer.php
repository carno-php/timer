<?php
/**
 * Timer default
 * User: moyo
 * Date: 06/08/2017
 * Time: 9:43 PM
 */

namespace Carno\Timer;

use Carno\Timer\Powered\Swoole;

class Timer
{
    /**
     * @var Contract
     */
    private static $ins = null;

    /**
     * @return Contract
     */
    private static function default() : Contract
    {
        return self::$ins ?? self::$ins = new Swoole;
    }

    /**
     * @param int $ms
     * @param callable $fn
     * @return string
     */
    public static function after(int $ms, callable $fn) : string
    {
        return self::default()->after($ms, $fn);
    }

    /**
     * @param int $ms
     * @param callable $fn
     * @return string
     */
    public static function loop(int $ms, callable $fn) : string
    {
        return self::default()->loop($ms, $fn);
    }

    /**
     * @param string $id
     * @return bool
     */
    public static function clear(string $id) : bool
    {
        return self::default()->clear($id);
    }
}
