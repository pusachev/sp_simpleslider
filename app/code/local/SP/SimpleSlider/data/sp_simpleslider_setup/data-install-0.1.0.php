<?php

$model = Mage::getModel('sp_simpleslider/slider');

$model->setData([
    'title' => 'Test',
    'alt'   => 'test',
    'image' => 'test.jpg',
    'text'  => 'test test'
]);

try {
    $model->save();
} catch (\Exception $e) {
    Mage::logException($e);
}