<?php
declare(strict_types=1);

namespace RLTSquare\Unit3\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use RLTSquare\Unit3\Helper\Data;

class User extends Template
{
    /**
     * @var Data
     */
    protected Data $helperData;

    public function __construct(Context $context, Data $helperData)
    {
        $this->helperData = $helperData;
        parent::__construct($context);
    }

    public function unit3Data(): array
    {
        $userName = $this->helperData->getUnit3Config('user_name');
        $password = $this->helperData->getUnit3Config('password');
        $environmentType = $this->helperData->getUnit3Config('environment_type');

        if ($environmentType == 'Staging' || $environmentType == 'Development'){
            $data[0] = $userName;
            $data[1] = substr($password,0,3);
            $data[2] = $environmentType;
            return $data;
        } else {
            $data[0] = $userName;
            $data[1] = '';
            $data[2] = $environmentType;
            return $data;
        }
    }
}
