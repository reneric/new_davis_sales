<?php
require 'app/Mage.php';
Mage::app();

$products = Mage::getModel('catalog/product')->getCollection();
foreach ($products as $product) {
    $product->setUrlKey($product->getSku())
            ->save();
}