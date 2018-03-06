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
     * Retrieves the entity associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable|null The entity, if any.
     */
    public function getEntity();
}
