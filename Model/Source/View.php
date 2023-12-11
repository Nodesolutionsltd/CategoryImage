<?php

/**
 * NodeSolutions
 *
 * NOTICE OF LICENSE
 * 
 * @category    NodeSolutions
 * @package     NodeSolutions_CategoryImage
 * @license     NodeSolutions
 */
namespace NodeSolutions\CategoryImage\Model\Source;

/**
 * Class View
 * @package NodeSolutions\CategoryImage\Model\Source
 */
class View implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Grid view')],
            ['value' => '2', 'label' => __('Slider')]
        ];
    }
}
