<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Tests\Netherlands;

use DateTime;
use DateTimeZone;

/**
 * Class for testing Prince's Day in the Netherlands.
 */
class PrincesDayTest extends NetherlandsBaseTestCase
{
    /**
     * Tests Prince's Day.
     */
    public function testPrincesDay()
    {
        $year = $this->generateRandomYear();
        $this->assertHoliday(self::COUNTRY, 'princesDay', $year,
            new DateTime("third tuesday of september $year", new DateTimeZone(self::TIMEZONE)));
    }
}
