<?php
declare(strict_types=1);

namespace RLTSquare\Unit3\Model\Config;

use Magento\Framework\Data\OptionSourceInterface;

class Options implements OptionSourceInterface
{
    public function toOptionArray()
    {

        $options = [];
        $options[] = [
            'value' => 'Staging',
            'label' => 'Staging',
        ];
        $options[] = [
            'value' => 'Development',
            'label' => 'Development',
        ];

        $options[] = [
            'value' => 'Production',
            'label' => 'Production',
        ];

        return $options;
    }
}
