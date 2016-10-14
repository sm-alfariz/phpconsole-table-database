<?php
namespace Cli\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psy\Shell;
use Psy\Configuration;
class InteractiveCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('interaktif')
            ->setDescription('Menjalankan PHP interaktif mode dengan psysh shell kaya tinker laravel');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<comment>Interaktif mode php kaya tinker laravel </comment>');
        $config = new Configuration;
        $shell = new Shell($config);
        $shell->run();
    }
}
