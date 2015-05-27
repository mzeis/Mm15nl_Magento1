<?php

class Mzeis_Mm15nl_Block_Talks extends Mage_Core_Block_Template
{
    /**
     * @var Mage_Catalog_Model_Product
     */
    protected $_talkProduct = null;

    /**
     * @return Mage_Catalog_Model_Product|null
     */
    public function getProduct()
    {
        if ($this->_talkProduct === null) {
            try {
                $product = Mage::getModel('catalog/product');
                $product->load($product->getIdBySku($this->getTalkProductSku()));
                $this->_talkProduct = $product;
            } catch (Exception $e) {
                Mage::logException($e);
            }

        }
        return $this->_talkProduct;
    }

    /**
     * @return string
     */
    public function getTalkProductSku()
    {
        return Mage::getStoreConfig('mzeis_mm15nl/talks/sku');
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return Mage::getStoreConfig('mzeis_mm15nl/talks/title');
    }
}
