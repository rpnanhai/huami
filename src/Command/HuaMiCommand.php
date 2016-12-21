<?php

/*
 * The file is part of the rpnanhai/huami
 *
 * (c) 2016 rpnanhai <rpnanhai@gamil.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace HuaMi\Command;

use HuaMi\HuaMi;
use HuaMi\Utils;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HuaMiCommand extends Command
{
    private $config = [];

    /**
     * [__construct]
     * @param array $config [配置文件config.ini]
     */
    public function __construct($config=[])
    {
        parent::__construct();
        $this->config = $config;
    }

    /**
     * [configure command配置]
     */
    protected function configure()
    {
        $this
            ->setName('huami')
            ->setDescription('a password generate tool')
            ->addArgument(
                'password',
                InputArgument::REQUIRED,
                'your unforget password'
            )
            ->addArgument(
                'key',
                InputArgument::REQUIRED,
                'the web sign'
            );
    }

    /**
     * [execute]
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $huami  = new HuaMi($this->config);
        $result = $huami->encode($input->getArgument('password'), $input->getArgument('key'));
        if ($result) {
            $output->writeln("\n{$result}\n");
            if (Utils::copyContent($result)) {
                $output->writeln("copy success\n");
            }
        } else {
            $output->writeln('<error>FAILURES!</error>');
        }
    }
}
