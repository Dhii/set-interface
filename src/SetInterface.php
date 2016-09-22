<?php

namespace Dhii\Set;

/**
 * Something that can act as a set.
 *
 * @since [*next-version*]
 */
interface SetInterface
{
    /**
     * Adds an item to this set.
     *
     * @since [*next-version*]
     *
     * @param mixed $value The value to add.
     */
    public function add($value);

    /**
     * Removes the value from this set.
     *
     * @since [*next-version*]
     *
     * @param mixed $value The value to remove.
     */
    public function remove($value);

    /**
     * Determines whether this set contains the given value.
     *
     * @since [*next-version*]
     *
     * @param mixed $value The value to check for.
     */
    public function has($value);

    /**
     * Retrieves a list of all items in this set.
     *
     * @since [*next-version*]
     *
     * @return mixed[]|\Traversable
     */
    public function items();
}
