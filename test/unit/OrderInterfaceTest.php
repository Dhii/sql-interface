<?php

namespace Dhii\Storage\Resource\Sql\UnitTest;

use Xpmock\TestCase;
use Dhii\Storage\Resource\Sql\OrderInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class OrderInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Storage\Resource\Sql\OrderInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getEntityField()
                     ->isAscending();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'Dhii\Storage\Resource\Sql\EntityAwareInterface',
            $subject,
            'Test subject does not extend expected interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Storage\Resource\Sql\FieldAwareInterface',
            $subject,
            'Test subject does not extend expected interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Storage\Resource\Sql\IsAscendingCapableInterface',
            $subject,
            'Test subject does not extend expected interface.'
        );
    }
}
