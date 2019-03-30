<?php

namespace Test\PabloVeintimilla\Frekr\Entity;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use PabloVeintimilla\Frekr\Entity\Employee;

/**
 * Class EmployeeTest.
 *
 * @author Pablo Veintimilla <pabloveintimilla@gmail.com>.
 * @copyright 2019 John Doe <pabloveintimilla@gmail.com>.
 * @license https://opensource.org/licenses/GPL The GPL license.
 * @link https://github.com/pabloveintimilla/frekr
 * @since File available since Release 1.0.0
 *
 * @covers \PabloVeintimilla\Frekr\Entity\Employee
 */
class EmployeeTest extends TestCase
{
    /**
     * @var Employee $employee An instance of "Employee" to test.
     */
    private $employee;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->employee = new Employee();
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getId
     */
    public function testGetId(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getId());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getFirstname
     */
    public function testGetFirstname(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('firstname');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getFirstname());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getLastname
     */
    public function testGetLastname(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('lastname');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getLastname());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getRole
     */
    public function testGetRole(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('role');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getRole());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getAuthmethod
     */
    public function testGetAuthmethod(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('authmethod');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getAuthmethod());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getLanguage
     */
    public function testGetLanguage(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('language');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getLanguage());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getPhone_number
     */
    public function testGetPhonenumber(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('phone_number');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getPhone_number());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::getEmail
     */
    public function testGetEmail(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('email');
        $property->setAccessible(true);
        $property->setValue($this->employee, $expected);

        $this->assertSame($expected, $this->employee->getEmail());
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setId
     */
    public function testSetId(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('id');
        $property->setAccessible(true);
        $this->employee->setId($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setFirstname
     */
    public function testSetFirstname(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('firstname');
        $property->setAccessible(true);
        $this->employee->setFirstname($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setLastname
     */
    public function testSetLastname(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('lastname');
        $property->setAccessible(true);
        $this->employee->setLastname($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setRole
     */
    public function testSetRole(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('role');
        $property->setAccessible(true);
        $this->employee->setRole($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setAuthmethod
     */
    public function testSetAuthmethod(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('authmethod');
        $property->setAccessible(true);
        $this->employee->setAuthmethod($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setLanguage
     */
    public function testSetLanguage(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('language');
        $property->setAccessible(true);
        $this->employee->setLanguage($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setPhone_number
     */
    public function testSetPhonenumber(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('phone_number');
        $property->setAccessible(true);
        $this->employee->setPhone_number($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }

    /**
     * @covers \PabloVeintimilla\Frekr\Entity\Employee::setEmail
     */
    public function testSetEmail(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->employee))
            ->getProperty('email');
        $property->setAccessible(true);
        $this->employee->setEmail($expected);

        $this->assertSame($expected, $property->getValue($this->employee));
    }
}
