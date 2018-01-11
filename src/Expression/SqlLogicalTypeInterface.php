<?php

namespace Dhii\Storage\Resource\Sql\Expression;

use Dhii\Expression\Type\LogicalTypeInterface;

/**
 * Something that represents an SQL logical term type.
 *
 * @since [*next-version*]
 */
interface SqlLogicalTypeInterface extends
    LogicalTypeInterface,
    SqlRelationalTypeInterface
{
    /**
     * Type constant for expressions and terms that represent an SQL ANY logical operator.
     *
     * @since [*next-version*]
     */
    const T_ANY = 'sql_any';

    /**
     * Type constant for expressions and terms that represent an SQL ALL logical operator.
     *
     * @since [*next-version*]
     */
    const T_ALL = 'sql_all';
}
