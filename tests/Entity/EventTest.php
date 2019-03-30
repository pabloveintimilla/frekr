<?php

namespace Test\PabloVeintimilla\Frekr\Entity;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use PabloVeintimilla\Frekr\Entity\Event;
use PabloVeintimilla\Frekr\Entity\Employee;
use PabloVeintimilla\Frekr\Entity\Terminal;
use DateTime;

/**
 * Class EventTest.
 *
 * @author Pablo Veintimilla <pabloveintimilla@gmail.com>.
 * @copyright 2019 John Doe <pabloveintimilla@gmail.com>.
 * @license https://opensource.org/licenses/GPL The GPL license.
 * @link https://github.com/pabloveintimilla/frekr
 * @since File available since Release 1.0.0
 *
 * @covers \PabloVeintimilla\Frekr\Entity\Event
 */
class EventTest extends TestCase
{
    /**
     * @var Event $event An instance of "Event" to test.
     */
    private $event;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->event = new Event();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getId
     */
    public function testGetId(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getId());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getWhat
     */
    public function testGetWhat(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('what');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getWhat());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getType
     */
    public function testGetType(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('type');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getType());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getEmployee
     */
    public function testGetEmployee(): void
    {
        $expected = $this->createMock(Employee::class);

        $property = (new \ReflectionClass($this->event))
            ->getProperty('employee');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getEmployee());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getTerminal
     */
    public function testGetTerminal(): void
    {
        $expected = $this->createMock(Terminal::class);

        $property = (new \ReflectionClass($this->event))
            ->getProperty('terminal');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getTerminal());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getCreatedAt
     */
    public function testGetCreatedAt(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getComment
     */
    public function testGetComment(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('comment');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getComment());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::isModified
     */
    public function testIsModified(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getLatitude
     */
    public function testGetLatitude(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('latitude');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getLatitude());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::getLongitude
     */
    public function testGetLongitude(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('longitude');
        $property->setAccessible(true);
        $property->setValue($this->event, $expected);

        $this->assertSame($expected, $this->event->getLongitude());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setId
     */
    public function testSetId(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('id');
        $property->setAccessible(true);
        $this->event->setId($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setWhat
     */
    public function testSetWhat(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('what');
        $property->setAccessible(true);
        $this->event->setWhat($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setType
     */
    public function testSetType(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('type');
        $property->setAccessible(true);
        $this->event->setType($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setEmployee
     */
    public function testSetEmployee(): void
    {
        $expected = $this->createMock(Employee::class);

        $property = (new \ReflectionClass($this->event))
            ->getProperty('employee');
        $property->setAccessible(true);
        $this->event->setEmployee($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setTerminal
     */
    public function testSetTerminal(): void
    {
        $expected = $this->createMock(Terminal::class);

        $property = (new \ReflectionClass($this->event))
            ->getProperty('terminal');
        $property->setAccessible(true);
        $this->event->setTerminal($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setCreatedAt
     */
    public function testSetCreatedAt(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setComment
     */
    public function testSetComment(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('comment');
        $property->setAccessible(true);
        $this->event->setComment($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::seModified
     */
    public function testSeModified(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setLatitude
     */
    public function testSetLatitude(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('latitude');
        $property->setAccessible(true);
        $this->event->setLatitude($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Event::setLongitude
     */
    public function testSetLongitude(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->event))
            ->getProperty('longitude');
        $property->setAccessible(true);
        $this->event->setLongitude($expected);

        $this->assertSame($expected, $property->getValue($this->event));
    }
}
