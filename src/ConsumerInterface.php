<?php

/**
 * This file is part of graze/queue.
 *
 * Copyright (c) 2015 Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/queue/blob/master/LICENSE MIT
 * @link https://github.com/graze/queue
 */

namespace Graze\Queue;

use Graze\Queue\Message\MessageInterface;

interface ConsumerInterface
{
    /**
     * @param callable $worker
     * @param integer  $limit
     */
    public function receive(callable $worker, $limit = 1);
}
