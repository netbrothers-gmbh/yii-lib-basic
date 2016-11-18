<?php

namespace NB\Yii\web;

use NB\Yii\web\Traits\Debugging;
use NB\Yii\Traits\Measuring;
use yii\base\Component as YiiBaseComponent;

/**
 * Abstract web component with some convenience features.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
abstract class Component extends YiiBaseComponent
{
    use Debugging;
    use Measuring;
}
