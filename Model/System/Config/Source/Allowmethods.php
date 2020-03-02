<?php
namespace HHsolution\Rlcarriers\Model\System\Config\Source;
    
class Allowmethods implements \Magento\Framework\Option\ArrayInterface
{
    public function __construct(
        \HHsolution\Rlcarriers\Helper\Data $dataHelper
    ) {
    
        $this->dataHelper = $dataHelper;
    }
    
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'STD', 'label' => __('Standard Service')],
            ['value' => 'GSDS', 'label' => __('Guaranteed Service')],
            ['value' => 'GSAM', 'label' => __('Guaranteed AM Service')],
            ['value' => 'GSHW', 'label' => __('Guaranteed HW Service')],
        ];
    }
}
