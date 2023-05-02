<?php

namespace MageMastery\Blog\Block\Adminhtml\Post\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton implements ButtonProviderInterface
{
    public function getButtonData(): array
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'sort_order' => 20,
            'data_attribute' => [
                'mage-init' => ['button' => ['evet' => 'save']],
                'form-role' => 'save'
            ]
        ];
    }
}
