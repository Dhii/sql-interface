<?php

namespace Dhii\Storage\Resource\Sql;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, an entity name.
 *
 * @since [*next-version*]
 */
interface EntityNameAwareInterface
{
    /**
     * Retrieves the name of the entity.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The name of the entity.
     */
    public function getEntityName();
}
