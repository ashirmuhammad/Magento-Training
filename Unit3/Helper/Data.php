<?php

namespace RLTSquare\Unit3\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    const XML_PATH_UNIT3_CONF = 'unit3/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getUnit3Config($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_UNIT3_CONF .'settings/'. $code, $storeId);
    }

}
