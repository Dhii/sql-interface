<?php

namespace Dhii\Storage\Resource\Sql;

/**
 * Something that describes how SQL results should be ordered.
 *
 * @since [*next-version*]
 */
interface OrderInterface extends
    EntityAwareInterface,
    FieldAwareInterface,
    IsAscendingCapableInterface
{
}
