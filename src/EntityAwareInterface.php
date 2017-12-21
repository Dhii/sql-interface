<?php

namespace Dhii\Storage\Resource\Sql;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, an entity.
 *
 * @since [*next-version*]
 */
interface EntityAwareInterface
{
    /**
     * Retrieves the entity.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The entity.
     */
    public function getEntity();
}
