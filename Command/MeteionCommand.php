<?php

namespace MeteionBundle\Command;

use MeteionBundle\Service\MeteionManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MeteionCommand extends Command
{
    protected static $defaultName = 'meteion:run';

    /**
     * @var MeteionManager
     */
    private $manager;

    public function __construct(string $name = null, MeteionManager $manager)
    {
        parent::__construct($name);

        $this->manager = $manager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $this->manager->run();
        } catch (\Exception $e) {
            $output->writeln('<error>Something went wrong.</error>');
            $output->writeln($e->getMessage());

            return Command::FAILURE;
        }

        $output->writeln('<info>Data successfully imported!</info>');

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this
            ->setName(self::$defaultName)
            ->setDescription('Imports data using Meteion.');
    }
}
