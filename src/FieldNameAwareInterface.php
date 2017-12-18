<?php

namespace Dhii\Storage\Resource\Sql;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a field name,.
 *
 * @since [*next-version*]
 */
interface FieldNameAwareInterface
{
    /**
     * Retrieves the field name.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The field name.
     */
    public function getFieldName();
}
