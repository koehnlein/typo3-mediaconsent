<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product',
        'label' => 'name',
        'iconfile' => 'EXT:store_inventory/Resources/Public/Icons/Product.svg'
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.item_label',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim'
            ]
        ],
        'description' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.item_description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'quantity' => [
            'label' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf:tx_storeinventory_domain_model_product.stock_quantity',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, quantity']
    ]
];
