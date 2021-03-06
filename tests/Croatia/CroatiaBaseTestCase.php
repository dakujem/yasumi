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

namespace Yasumi\tests\Croatia;

use PHPUnit_Framework_TestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the Croatia holiday provider.
 *
 * @author Karlo Mikus <contact@karlomikus.com>
 */
abstract class CroatiaBaseTestCase extends PHPUnit_Framework_TestCase
{
    use YasumiBase;

    /**
     * Country (name) to be tested
     */
    const REGION = 'Croatia';

    /**
     * Timezone in which this provider has holidays defined
     */
    const TIMEZONE = 'Europe/Zagreb';

    /**
     * Locale that is considered common for this provider
     */
    const LOCALE = 'hr_HR';
}
