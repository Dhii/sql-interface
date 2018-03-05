<?php

namespace Dhii\Storage\Resource\Sql;

/**
 * Something that can provide an indication of whether or not it is ascending.
 *
 * @since [*next-version*]
 */
interface IsAscendingCapableInterface
{
    /**
     * Checks if this instance is marked as ascending.
     *
     * @since [*next-version*]
     *
     * @return bool True if this instance is marked as ascending, false otherwise.
     */
    public function isAscending();
}
