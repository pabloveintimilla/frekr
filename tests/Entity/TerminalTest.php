<?php

namespace Test\PabloVeintimilla\Frekr\Entity;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use PabloVeintimilla\Frekr\Entity\Terminal;

/**
 * Class TerminalTest.
 *
 * @author Pablo Veintimilla <pabloveintimilla@gmail.com>.
 * @copyright 2019 John Doe <pabloveintimilla@gmail.com>.
 * @license https://opensource.org/licenses/GPL The GPL license.
 * @link https://github.com/pabloveintimilla/frekr
 * @since File available since Release 1.0.0
 *
 * @covers \PabloVeintimilla\Frekr\Entity\Terminal
 */
class TerminalTest extends TestCase
{
    /**
     * @var Terminal $terminal An instance of "Terminal" to test.
     */
    private $terminal;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->terminal = new Terminal();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getId
     */
    public function testGetId(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->terminal))
            ->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->terminal, $expected);

        $this->assertSame($expected, $this->terminal->getId());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getName
     */
    public function testGetName(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->terminal))
            ->getProperty('name');
        $property->setAccessible(true);
        $property->setValue($this->terminal, $expected);

        $this->assertSame($expected, $this->terminal->getName());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getTerminalType
     */
    public function testGetTerminalType(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getEnabled
     */
    public function testGetEnabled(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->terminal))
            ->getProperty('enabled');
        $property->setAccessible(true);
        $property->setValue($this->terminal, $expected);

        $this->assertSame($expected, $this->terminal->getEnabled());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getLeaveReasons
     */
    public function testGetLeaveReasons(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getFirstLabel
     */
    public function testGetFirstLabel(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::getSecondLabel
     */
    public function testGetSecondLabel(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setId
     */
    public function testSetId(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->terminal))
            ->getProperty('id');
        $property->setAccessible(true);
        $this->terminal->setId($expected);

        $this->assertSame($expected, $property->getValue($this->terminal));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setName
     */
    public function testSetName(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->terminal))
            ->getProperty('name');
        $property->setAccessible(true);
        $this->terminal->setName($expected);

        $this->assertSame($expected, $property->getValue($this->terminal));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setTerminalType
     */
    public function testSetTerminalType(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setEnabled
     */
    public function testSetEnabled(): void
    {
        $expected = true;

        $property = (new \ReflectionClass($this->terminal))
            ->getProperty('enabled');
        $property->setAccessible(true);
        $this->terminal->setEnabled($expected);

        $this->assertSame($expected, $property->getValue($this->terminal));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setLeaveReasons
     */
    public function testSetLeaveReasons(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setFirstLabel
     */
    public function testSetFirstLabel(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Terminal::setSecondLabel
     */
    public function testSetSecondLabel(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
