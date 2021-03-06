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

namespace Yasumi\Provider\Spain;

use DateTime;
use DateTimeZone;
use Yasumi\Holiday;
use Yasumi\Provider\ChristianHolidays;
use Yasumi\Provider\Spain;

/**
 * Provider for all holidays in Andalusia (Spain).
 *
 * Andalusia is the most populated and the second largest in area of the autonomous communities in Spain. The Andalusian
 * autonomous community is officially recognized as a nationality of Spain. The territory is divided into eight
 * provinces: Almería, Cádiz, Córdoba, Granada, Huelva, Jaén, Málaga and Seville. Its capital is the city of Seville.
 *
 * @link http://en.wikipedia.org/wiki/Andalusia
 */
class Andalusia extends Spain
{
    use ChristianHolidays;

    /**
     * Code to identify this Holiday Provider. Typically this is the ISO3166 code corresponding to the respective
     * country or subregion.
     */
    const ID = 'ES-AN';

    /**
     * Initialize holidays for Andalusia (Spain).
     */
    public function initialize()
    {
        parent::initialize();

        // Add custom Christian holidays
        $this->addHoliday($this->maundyThursday($this->year, $this->timezone, $this->locale, Holiday::TYPE_OBSERVANCE));

        // Calculate other holidays
        $this->calculateAndalusiaDay();
    }

    /**
     * Calculates the Day of Andalusia.
     *
     * The Día de Andalucia ("Day of Andalusia" or "Andalusia Day") is celebrated February 28 and commemorates the
     * February 28, 1980 referendum on the Statute of Autonomy of Andalusia, in which the Andalusian electorate voted
     * for the statute that made Andalusia an autonomous community of Andalusia (Spain). The Day of Andalucía is not a
     * public holiday in the rest of Spain on February 28.
     *
     * @link http://en.wikipedia.org/wiki/D%C3%ADa_de_Andaluc%C3%ADa
     */
    public function calculateAndalusiaDay()
    {
        if ($this->year >= 1980) {
            $this->addHoliday(new Holiday('andalusiaDay', ['es_ES' => 'Día de Andalucía'],
                new DateTime("$this->year-2-28", new DateTimeZone($this->timezone)), $this->locale));
        }
    }
}
