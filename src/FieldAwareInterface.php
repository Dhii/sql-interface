<?php

namespace Dhii\Storage\Resource\Sql;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a field .
 *
 * @since [*next-version*]
 */
interface FieldAwareInterface
{
    /**
     * Retrieves the field.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The field.
     */
    public function getField();
}
