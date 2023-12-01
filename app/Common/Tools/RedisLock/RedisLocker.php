<?php

namespace App\Common\Tools\RedisLock;

use Illuminate\Cache\RedisLock;

class RedisLocker extends RedisLock
{
    public function ttl()
    {
        return $this->redis->ttl($this->name);
    }

    public function getCurrentOwner()
    {
        return parent::getCurrentOwner(); // TODO: Change the autogenerated stub
    }

    public function isOwnedByCurrentProcess()
    {
        return parent::isOwnedByCurrentProcess(); // TODO: Change the autogenerated stub
    }

    public function thanTtl(int $than = 3)
    {
        return $this->ttl() > $than;
    }
}
