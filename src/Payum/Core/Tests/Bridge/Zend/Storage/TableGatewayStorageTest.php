<?php
namespace Payum\Core\Tests\Bridge\Zend\Storage;

use Payum\Core\Bridge\Zend\Storage\TableGatewayStorage;
use Zend\Db\TableGateway\TableGateway;

class TableGatewayStorageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfAbstractStorage()
    {
        $rc = new \ReflectionClass('Payum\Core\Bridge\Zend\Storage\TableGatewayStorage');

        $this->assertTrue($rc->isSubclassOf('Payum\Core\Storage\AbstractStorage'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithTableGatewayAndModelClassAsArguments()
    {
        new TableGatewayStorage($this->createTableGatewayMock(), 'stdClass');
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|TableGateway
     */
    protected function createTableGatewayMock()
    {
        return $this->getMock('Zend\Db\TableGateway\TableGateway', array(), array(), '', false);
    }
}
