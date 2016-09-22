<?php

namespace Dhii\Set\FuncTest;

/**
 * Tests {@see \Dhii\Set\SetInterface}
 *
 * @since [*next-version*]
 */
class SetInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Set\SetInterface
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Set\\SetInterface')
                ->add()
                ->remove()
                ->has()
                ->items()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of an implementing class can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Set\\SetInterface', $subject, 'Subject is not a valid set');
    }
}
