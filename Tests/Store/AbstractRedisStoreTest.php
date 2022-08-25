<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Semaphore\Tests\Store;

use Symfony\Component\Semaphore\PersistingStoreInterface;
use Symfony\Component\Semaphore\Store\RedisStore;

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
abstract class AbstractRedisStoreTest extends AbstractStoreTest
{
    abstract protected function getRedisConnection(): \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface;

    public function getStore(): PersistingStoreInterface
    {
        return new RedisStore($this->getRedisConnection());
    }
}
