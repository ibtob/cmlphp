<?php
/* * *********************************************************
 * [cml] (C)2012 - 3000 cml http://cmlphp.com
 * @Author  linhecheng<linhechengbush@live.com>
 * @Date: 16-9-6 下午3:07
 * @version  2.7
 * cml框架 Lock 抽象接口 参考 https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
 * *********************************************************** */
namespace Cml\Interfaces;

/**
 * Lock 抽象接口
 *
 * @package Cml\Interfaces
 */
interface Lock
{
    /**
     * 设置锁的过期时间
     *
     * @param int $expire
     *
     * @return \Cml\Lock\Redis | \Cml\Lock\Memcache | \Cml\Lock\File
     */
    public function setExpire($expire = 100);

    /**
     * 上锁
     *
     * @param string $key 要解锁的锁的key
     * @param bool $wouldBlock 是否堵塞
     *
     * @return mixed
     */
    public function lock($key, $wouldBlock = false);

    /**
     * 解锁
     *
     * @param string $key
     *
     * @return void
     */
    public function unlock($key);
}
