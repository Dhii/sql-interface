<?php

namespace Dhii\Storage\Resource\Sql\Expression;

use Dhii\Util\String\StringableInterface;

/**
 * Something that represents an SQL operator.
 *
 * Also provides the constants for the standard SQL operator strings.
 *
 * @since [*next-version*]
 */
interface SqlOperatorInterface extends StringableInterface
{
    /**
     * Operator string for the "AND" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_AND = 'AND';

    /**
     * Operator string for the "OR" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_OR = 'OR';

    /**
     * Operator string for the "NOT" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_NOT = 'NOT';

    /**
     * Operator string for the "IN" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_IN = 'IN';

    /**
     * Operator string for the "BETWEEN" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_BETWEEN = 'BETWEEN';

    /**
     * Operator string for the "equal to" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_EQUAL_TO = '=';

    /**
     * Operator string for the "greater than" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_GREATER_THAN = '>';

    /**
     * Operator string for the "greater than or equal to" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_GREATER_EQUAL_TO = '>=';

    /**
     * Operator string for the "smaller than" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_SMALLER = '<';

    /**
     * Operator string for the "smaller than or equal to" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_SMALLER_EQUAL_TO = '<=';

    /**
     * Operator string for the "LIKE" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_LIKE = 'LIKE';

    /**
     * Operator string for the "EXISTS" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_EXISTS = 'EXISTS';

    /**
     * Operator string for the "ANY" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_ANY = 'ANY';

    /**
     * Operator string for the "ALL" SQL operator.
     *
     * @since [*next-version*]
     */
    const OP_ALL = 'ALL';
}
