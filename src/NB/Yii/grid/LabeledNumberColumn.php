<?php

namespace NB\Yii\grid;

use \yii\grid\DataColumn;
use \yii\helpers\ArrayHelper;

/**
 * A data column to show a human readable representation of number values.
 *
 * @author Thilo Ratnaweera <thilo.ratnaweera@netbrothers.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPLv3
 */
class LabeledNumberColumn extends DataColumn
{
    /**
     * @var array Mapping of numbers (keys) to readable values (strings).
     */
    public $valueMapping;

    /**
     * @inheritdoc
     */
    public function getDataCellValue($model, $key, $index)
    {
        if ($this->value !== null) {
            return parent::getDataCellValue($model, $key, $index);
        }

        $attributeSet = ($this->attribute !== null);
        $mappingSet = is_array($this->valueMapping);
        $vKey = ArrayHelper::getValue($model, $this->attribute);

        if ($attributeSet && $mappingSet && isset($this->valueMapping[$vKey])) {
            return $this->valueMapping[$vKey];
        }

        return parent::getDataCellValue($model, $key, $index);
    }
}
