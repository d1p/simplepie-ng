<?php
/**
 * Copyright (c) 2017–2018 Ryan Parman <http://ryanparman.com>.
 * Copyright (c) 2017–2018 Contributors.
 *
 * http://opensource.org/licenses/Apache2.0
 */

declare(strict_types=1);

namespace SimplePie\Test\Unit\Type;

use SimplePie\Test\Unit\AbstractTestCase;
use SimplePie\Type\Feed;

class FeedTest extends AbstractTestCase
{
    public function testFailMe(): void
    {
        new Feed();
    }
}
