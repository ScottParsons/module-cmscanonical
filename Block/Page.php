<?php
/*
 * @package    ScottParsons_CmsCanonical
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-cmscanonical/blob/master/LICENSE.md
 * @version    1.0.1
 */
namespace ScottParsons\CmsCanonical\Block;

/**
 * Cms page content block
 */
class Page extends \Magento\Cms\Block\Page
{
    /**
     * Prepare global layout
     *
     * @return $this
     */
    protected function _prepareLayout()
    {
        $page = $this->getPage();

        if ($page->getCanonical()) {
            $this->pageConfig->addRemotePageAsset(
                $page->getCanonical(),
                'canonical',
                ['attributes' => ['rel' => 'canonical']]
            );
        }

        return parent::_prepareLayout();
    }
}
