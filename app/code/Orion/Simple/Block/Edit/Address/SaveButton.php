<?php
declare(strict_types=1);
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Orion\Simple\Block\Adminhtml\Edit\Address;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Orion\Simple\Block\Adminhtml\Edit\GenericButton;

/**
 * Class SaveButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 10
        ];
    }
}
