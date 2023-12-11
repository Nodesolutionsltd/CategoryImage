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
 * Class ListMode
 * @package NodeSolutions\CategoryImage\Model\Source
 */
class ListMode implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Default')],
            ['value' => '3', 'label' => __('3')],
            ['value' => '4', 'label' => __('4')],
            ['value' => '5', 'label' => __('5')],
            ['value' => '6', 'label' => __('6')]
        ];
    }
}
