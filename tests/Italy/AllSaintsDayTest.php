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

namespace Yasumi\tests\Italy;

use DateTime;
use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class for testing All Saints' Day in Italy.
 */
class AllSaintsDayTest extends ItalyBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'allSaintsDay';

    /**
     * Tests All Saints' Day.
     *
     * @dataProvider AllSaintsDayDataProvider
     *
     * @param int      $year     the year for which All Saints' Day needs to be tested
     * @param DateTime $expected the expected date
     */
    public function testAssumptionOfMary($year, $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year, $expected);
    }

    /**
     * Returns a list of random test dates used for assertion of All Saints' Day.
     *
     * @return array list of test dates for All Saints' Day
     */
    public function AllSaintsDayDataProvider()
    {
        return $this->generateRandomDates(11, 1, self::TIMEZONE);
    }

    /**
     * Tests translated name of All Saints' Day.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY, $this->generateRandomYear(),
            [self::LOCALE => 'Festa di Tutti i Santi']);
    }

    /**
     * Tests type of the holiday defined in this test.
     */
    public function testHolidayType()
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_NATIONAL);
    }
}
