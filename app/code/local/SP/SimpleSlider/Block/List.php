<?php

class SP_SimpleSLider_Block_List extends Mage_Core_Block_Template
{
    /**
     * @return Varien_Data_Collection
     */
    public function getSliderImages()
    {
        return Mage::getModel('sp_simpleslider/slider')
                    ->getCollection()
                    ->addFieldToFilter('is_active', 1);

    }
}
