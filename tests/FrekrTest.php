<?php

namespace Test\PabloVeintimilla\Frekr;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use PabloVeintimilla\Frekr\Frekr;

/**
 * Class FrekrTest.
 *
 * @author Pablo Veintimilla <pabloveintimilla@gmail.com>.
 * @copyright 2019 John Doe <pabloveintimilla@gmail.com>.
 * @license https://opensource.org/licenses/GPL The GPL license.
 * @link https://github.com/pabloveintimilla/frekr
 * @since File available since Release 1.0.0
 *
 * @covers \PabloVeintimilla\Frekr\Frekr
 */
class FrekrTest extends TestCase
{
    /**
     * @var Frekr $frekr An instance of "Frekr" to test.
     */
    private $frekr;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Get apikey from config file */
        $this->frekr = new Frekr("fake api");
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::__construct
     */
    public function testConstruct(): void
    {
        $response = $this->frekr->request('employees');
        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getEmployees
     */
    public function testGetEmployees(): void
    {
        $this->assertIsArray($this->frekr->getEmployees());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getEmployee
     */
    public function testGetEmployee(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getEvents
     */
    public function testGetEvents(): void
    {
        $this->assertIsArray($this->frekr->getEvents());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getEvent
     */
    public function testGetEvent(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getEventsByEmployee
     */
    public function testGetEventsByEmployee(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getTerminals
     */
    public function testGetTerminals(): void
    {
        $this->assertIsArray($this->frekr->getTerminals());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getTerminal
     */
    public function testGetTerminal(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::getEventsByTerminal
     */
    public function testGetEventsByTerminal(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::deserializeEvent
     */
    public function testDeserializeEvent(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::deserializeEmployee
     */
    public function testDeserializeEmployee(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::deserializeTerminal
     */
    public function testDeserializeTerminal(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Frekr::request
     */
    public function testRequest(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}