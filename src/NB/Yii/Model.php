<?php

namespace NB\Yii;

use NB\Yii\Traits\Debugging;
use NB\Yii\Traits\Measuring;

/**
 * Abstract base model with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Model
{
    use Debugging;
    use Measuring;
}
