<?php

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class GTMDefinition extends EntityDefinition
{
    final public const ENTITY_NAME = 'gtm_configs';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return GTMCollection::class;
    }

    public function getEntityClass(): string
    {
        return GTMEntity::class;
    }

    protected function defineFields(): FieldCollection
    {

    }
}