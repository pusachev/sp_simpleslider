<?php

/** @var Mage_Core_Model_Resource_Setup $this */
$installer = $this;

$installer->startSetup();

$table= $installer->getConnection()
    ->newTable($installer->getTable('sp_simpleslider/slider'))
    ->addColumn(
        'slider_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        10,
        [
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
            'identity' => true,
        ],
        'Slider ID'
    )
    ->addColumn(
        'title',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        128,
        [
            'nullable' => false,
        ],
        'Slide title'
    )
    ->addColumn(
        'alt',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        64,
        [
            'nullable' => false,
        ],
        'Slide alt'
    )
    ->addColumn(
        'image',
        Varien_Db_Ddl_Table::TYPE_TEXT,
        null,
        [
            'nullable' => false,
        ],
        'Image path'
    )
    ->addColumn(
        'text',
        Varien_Db_Ddl_Table::TYPE_TEXT,
        null,
        [
            'nullable' => true,
        ],
        'Slide text'
    )
    ->addColumn(
        'display_from',
        Varien_Db_Ddl_Table::TYPE_DATE,
        null,
        [
            'nullable' => true,
        ]
    )
    ->addColumn(
        'display_to',
        Varien_Db_Ddl_Table::TYPE_DATE,
        null,
        [
            'nullable' => true,
        ]
    )
    ->addColumn(
        'is_active',
        Varien_Db_Ddl_Table::TYPE_SMALLINT,
        1,
        [
            'nullable' => false,
            'default'  => 1
        ]
    )
    ->setComment('SP Slider table');
$installer->getConnection()->createTable($table);


$installer->endSetup();