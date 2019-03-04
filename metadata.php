<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'gmtproductclass',
    'title'       => array(
        'en' => 'GMT Product Class',
    ),
    'description' => array(
        'en' => 'Additional field in article "Product Class"',
    ),
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '1.2.0',
    'author'      => 'Giedrius',
    'url'         => '',
    'email'       => '',

    'extend'      => array(
        \OxidEsales\Eshop\Application\Model\Article::class => OxidEsales\ProductClassModule\Application\Model\ProductClassArticle::class,
     ),

    'blocks'      => array(
        array(
            'template'  => 'page/details/inc/productmain.tpl',
            'block'  => 'details_productmain_title',
            'file' => 'Application/views/blocks/details_productmain_title.tpl',
        ),
		array(
            'template'  => 'article_main.tpl',
            'block'  => 'admin_article_main_extended',
            'file' => 'Application/views/blocks/admin_article_main_extended.tpl',
        ),
    ),

    'settings'    => array(
        array(
            'group' => 'gmtProductClassConfiguration',
            'name'  => 'productclassActive',
            'type'  => 'bool',
            'value' => '1'
        ),
        array(
            'group' => 'gmtProductClassConfiguration',
            'name'  => 'productclassColor',
            'type'  => 'bool',
            'value' => '1'
        ),
    ),

    'events'      => array(
        'onActivate'   => '\OxidEsales\ProductClassModule\Core\ProductClassModule::onActivate',
        'onDeactivate' => '\OxidEsales\ProductClassModule\Core\ProductClassModule::onDeactivate',
    ),
);
