<?php
namespace Evdokymova\Blog\Setup;

use Evdokymova\Blog\Api\Data\PostInterface;
use Evdokymova\Blog\Model\ResourceModel\Post as PostResource;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Security\Setup\InstallSchema as SecurityInstallSchema;

/**
 * Class InstallSchema
 * @package Evdokymova\Blog\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable(
                $setup->getTable(PostResource::TABLE_NAME)
            )
            ->addColumn(
                PostInterface::ID,
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Space ID'
            )
            ->addColumn(
                PostInterface::NAME,
                Table::TYPE_TEXT,
                255,
                [],
                'Name'
            )
            ->addColumn(
                PostInterface::COUNTRY,
                Table::TYPE_TEXT,
                255,
                [],
                'Country'
            )
            ->addColumn(
                PostInterface::STAGES,
                Table::TYPE_TEXT,
                255,
                [],
                'Stages'
            )
                      ->addForeignKey(
                $setup->getFkName(
                    PostResource::TABLE_NAME,
                    PostInterface::ID,
                    SecurityInstallSchema::ADMIN_USER_DB_TABLE_NAME,
                    'user_id'
                ),
                PostInterface::ID,
                $setup->getTable(SecurityInstallSchema::ADMIN_USER_DB_TABLE_NAME),
                'user_id',
                Table::ACTION_SET_NULL
            )
            ->addIndex(
                $setup->getIdxName(
                    PostResource::TABLE_NAME,
                    [PostInterface::ID],
                    AdapterInterface::INDEX_TYPE_INDEX
                ),
                [PostInterface::ID],
                ['type' => AdapterInterface::INDEX_TYPE_INDEX]
            )
            ->setComment('Space')
        ;

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
