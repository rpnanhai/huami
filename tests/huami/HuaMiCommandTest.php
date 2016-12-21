<?php

/*
 * The file is part of the rpnanhai/huami
 *
 * (c) 2016 rpnanhai <rpnanhai@gamil.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace HuaMi\Tests;

use HuaMi\Command\HuaMiCommand;
use HuaMi\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class HuaMiCommandTests extends \PHPUnit_Framework_TestCase
{
    /**
     * [testExecute HuaMiCommand测试]
     */
    public function testExecute()
    {
        $application = new Application();
        $application->add(new HuaMiCommand);
        $command       = $application->find('huami');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['key' => 'aaa','password' => '123']);
        $this->assertRegExp('//', $commandTester->getDisplay());
    }
}
