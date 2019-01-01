<?php
/*
 * @package    ScottParsons_CmsCanonical
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-cmscanonical/blob/master/LICENSE.md
 * @version    1.0.1
 */
namespace ScottParsons\CmsCanonical\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ){
        $setup->startSetup();
        $tableName = $setup->getTable('cms_page');

        $setup->getConnection()->addColumn(
            $tableName,
            'canonical',
            [
                'type' => Table::TYPE_TEXT,
                'length' => 255,
                'nullable' => true,
                'comment' => 'Canonical URL'
            ]
        );

        $setup->endSetup();
    }
}
