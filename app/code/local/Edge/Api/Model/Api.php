<?php

class Edge_Api_Model_Api extends Mage_Api_Model_Resource_Abstract
{
    public function sales()
    {
        try {
            return Mage::getResourceModel('reports/order_collection')->calculateSales()->load()->getFirstItem()->getLifetime();
        } catch (Exception $ex) {
            $this->_fault('failed', 'Could not fetch lifetime sales.');
        }
    }
}