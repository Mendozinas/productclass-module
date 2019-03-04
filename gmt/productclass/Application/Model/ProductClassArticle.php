<?php
/**
 
 *
 * @category      module
 * @package       productclass
 * @author        Giedrius
 * @link          
 * @copyright (C) 2019
 */

namespace OxidEsales\ProductClassModule\Application\Model;

use \OxidEsales\Eshop\Core\Registry;

/**
 * Class Gmt\ProductClassModule\Application\Model\ProductClassArticle.
 * Extends OxidEsales\Eshop\Application\Model\Article.
 *
 * @see OxidEsales\Eshop\Application\Model\Article
 */
class ProductClassArticle extends ProductClassArticle_parent
{

    /*
     * Enabled view in module settings
     */
    public function isViewEnabled()
    {

        $myconfig = Registry::getConfig();
        return (bool) $myconfig->getConfigParam("productclassActive");

    }

    /*
     * Enabled colors in module settings
     */
    public function isColorEnabled()
    {

        $myconfig = Registry::getConfig();
        return (bool) $myconfig->getConfigParam("productclassColor");

    }

    /*
     * ProductClass value
     */
    public function getProductClassValue()
    {

        $valueProductClass = 0;

        if ($this->isViewEnabled()) {
            $valueProductClass = $this->oxarticles__oxproductclass->value;
        };

        return $valueProductClass;
    }

    /*
     * ProductClass traslated text
     */
    public function getProductClassText()
    {

        $valueProductClass = $this->getProductClassValue();

        $sProductClassText = '';
        if ($valueProductClass > 0) {
            $oLang = Registry::getLang();
            $sProductClassText = $oLang->translateString('GMT_PRODUCTCLASS_VALUE' . $valueProductClass);
        };

        return $sProductClassText;
    }

    /*
     * ProductClass formating color
     */
    public function getProductClassColor()
    {

        $sProductClassColor = 'productclassnocolor';

        if ($this->isColorEnabled()) {
            $valueProductClass = $this->getProductClassValue();

            if ($valueProductClass > 0) {

                $sProductClassColor = 'productclasscolor' . $valueProductClass;

            };
        }

        return $sProductClassColor;
    }

}
