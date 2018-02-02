<?php

namespace Dhii\Storage\Resource\Sql\Expression;

use Dhii\Expression\Renderer\ExpressionContextInterface;

/**
 * Something that represents an SQL expression render context.
 *
 * @since [*next-version*]
 */
interface SqlExpressionContextInterface extends ExpressionContextInterface
{
    /**
     * The key in the container from which the aliases map can be retrieved.
     *
     * @since [*next-version*]
     */
    const K_ALIASES_MAP = 'aliases_map';

    /**
     * The key in the container from which the value-hash map can be retrieved.
     *
     * @since [*next-version*]
     */
    const K_VALUE_HASH_MAP = 'value_hash_map';
}
