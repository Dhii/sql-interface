<?php

namespace Dhii\Storage\Resource\Sql;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that represents an entity field.
 *
 * @since [*next-version*]
 */
interface EntityFieldInterface
{
    /**
     * Retrieves the name of the entity.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The name of the entity.
     */
    public function getEntity();

    /**
     * Retrieves the name of the field.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The name of the field.
     */
    public function getField();
}
