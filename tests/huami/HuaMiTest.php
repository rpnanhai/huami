<?php
namespace HuaMi\Tests;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use HuaMi\HuaMi;


class HuaMiTests extends \PHPUnit_Framework_TestCase
{
    public function testExecute() {
        $application = new Application();
        $application->add(new HuaMi("aaa"));
        $command = $application->find('test');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => 'aaa'));
        $this->assertRegExp('//', $commandTester->getDisplay());
    }
}