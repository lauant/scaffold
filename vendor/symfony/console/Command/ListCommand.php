<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Lauant\Forge\Symfony\Component\Console\Command;

use Lauant\Forge\Symfony\Component\Console\Helper\DescriptorHelper;
use Lauant\Forge\Symfony\Component\Console\Input\InputArgument;
use Lauant\Forge\Symfony\Component\Console\Input\InputDefinition;
use Lauant\Forge\Symfony\Component\Console\Input\InputInterface;
use Lauant\Forge\Symfony\Component\Console\Input\InputOption;
use Lauant\Forge\Symfony\Component\Console\Output\OutputInterface;
/**
 * ListCommand displays the list of all available commands for the application.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ListCommand extends \Lauant\Forge\Symfony\Component\Console\Command\Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('list')->setDefinition($this->createDefinition())->setDescription('Lists commands')->setHelp(<<<'EOF'
The <info>%command.name%</info> command lists all commands:

  <info>php %command.full_name%</info>

You can also display the commands for a specific namespace:

  <info>php %command.full_name% test</info>

You can also output the information in other formats by using the <comment>--format</comment> option:

  <info>php %command.full_name% --format=xml</info>

It's also possible to get raw list of commands (useful for embedding command runner):

  <info>php %command.full_name% --raw</info>
EOF
);
    }
    /**
     * {@inheritdoc}
     */
    public function getNativeDefinition()
    {
        return $this->createDefinition();
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(\Lauant\Forge\Symfony\Component\Console\Input\InputInterface $input, \Lauant\Forge\Symfony\Component\Console\Output\OutputInterface $output)
    {
        if ($input->getOption('xml')) {
            @\trigger_error('The --xml option was deprecated in version 2.7 and will be removed in version 3.0. Use the --format option instead.', \E_USER_DEPRECATED);
            $input->setOption('format', 'xml');
        }
        $helper = new \Lauant\Forge\Symfony\Component\Console\Helper\DescriptorHelper();
        $helper->describe($output, $this->getApplication(), array('format' => $input->getOption('format'), 'raw_text' => $input->getOption('raw'), 'namespace' => $input->getArgument('namespace')));
    }
    /**
     * {@inheritdoc}
     */
    private function createDefinition()
    {
        return new \Lauant\Forge\Symfony\Component\Console\Input\InputDefinition(array(new \Lauant\Forge\Symfony\Component\Console\Input\InputArgument('namespace', \Lauant\Forge\Symfony\Component\Console\Input\InputArgument::OPTIONAL, 'The namespace name'), new \Lauant\Forge\Symfony\Component\Console\Input\InputOption('xml', null, \Lauant\Forge\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'To output list as XML'), new \Lauant\Forge\Symfony\Component\Console\Input\InputOption('raw', null, \Lauant\Forge\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'To output raw command list'), new \Lauant\Forge\Symfony\Component\Console\Input\InputOption('format', null, \Lauant\Forge\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'The output format (txt, xml, json, or md)', 'txt')));
    }
}
