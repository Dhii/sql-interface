<?php

namespace Dhii\Storage\Resource\Sql\Expression;

use Dhii\Expression\Type\RelationalTypeInterface;

/**
 * Something that represents an SQL boolean term type.
 *
 * @since [*next-version*]
 */
interface SqlRelationalTypeInterface extends RelationalTypeInterface
{
    /**
     * Type constant for expressions and terms that represent an SQL LIKE relational operator.
     *
     * @since [*next-version*]
     */
    const T_LIKE = 'sql_like';

    /**
     * Type constant for expressions and terms that represent an SQL IN relational operator.
     *
     * @since [*next-version*]
     */
    const T_IN = 'sql_in';

    /**
     * Type constant for expressions and terms that represent an SQL BETWEEN relational operator.
     *
     * @since [*next-version*]
     */
    const T_BETWEEN = 'sql_between';

    /**
     * Type constant for expressions and terms that represent an SQL EXISTS relational operator.
     *
     * @since [*next-version*]
     */
    const T_EXISTS = 'exists';
}
