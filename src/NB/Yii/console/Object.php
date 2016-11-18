<?php

namespace NB\Yii\console;

use NB\Yii\console\Traits\Debugging;
use NB\Yii\Traits\Measuring;
use yii\base\Object as YiiBaseObject;

/**
 * Abstract base class with convenience features for extenders.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Object extends YiiBaseObject
{
    use Debugging;
    use Measuring;
}
