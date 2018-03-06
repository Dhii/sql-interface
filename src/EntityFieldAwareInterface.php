<?php

namespace Dhii\Storage\Resource\Sql;

/**
 * Something that is aware of, and can provide, an entity field.
 *
 * @since [*next-version*]
 */
interface EntityFieldAwareInterface
{
    /**
     * Retrieves the entity field associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return EntityFieldInterface|null The entity field instance, if any.
     */
    public function getEntityField();
}
