<?php

/**
 * Order Adjustments Renderer.
 */
class SixBySix_RealTimeDespatch_Block_Adminhtml_Renderer_Inventory_Adjustments_Order extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * {@inheritdoc}
     */
    public function render(Varien_Object $row)
    {
        $data = json_decode($row->getData('additional_data'), true);

        if ( ! isset($data['units_unsent_orders'])) {
            return '0';
        }

        return (string) $data['units_unsent_orders'];
    }
}