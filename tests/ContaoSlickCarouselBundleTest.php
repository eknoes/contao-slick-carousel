<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Eknoes\ContaoSlickCarousel\Tests;

use Eknoes\ContaoSlickCarousel\ContaoSlickCarouselBundle;
use PHPUnit\Framework\TestCase;

class ContaoSlickCarouselBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoSlickCarouselBundle();

        $this->assertInstanceOf('Eknoes\ContaoSlickCarousel\ContaoSlickCarouselBundle', $bundle);
    }
}
