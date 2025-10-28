<?php

namespace App\Command;

use App\Repository\StockEntryRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:check-expirations',
    description: 'Controlla le stock entry in scadenza nelle prossime N giornate (default 7).'
)]
class CheckExpirationsCommand extends Command
{
    private StockEntryRepository $repo;

    public function __construct(StockEntryRepository $repo)
    {
        parent::__construct();
        $this->repo = $repo;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $days = 7;
        $entries = $this->repo->findExpiringWithinDays($days);

        if (count($entries) === 0) {
            $output->writeln("Nessuna scadenza nei prossimi {$days} giorni.");
            return Command::SUCCESS;
        }

        $output->writeln(sprintf("Scadenze entro %d giorni:", $days));
        foreach ($entries as $e) {
            $output->writeln(sprintf(
                "- %s (Prodotto: %s) - scadenza: %s - qta: %d - pos: %s",
                $e->getId(),
                $e->getProdotto()?->getNome() ?? '—',
                $e->getScadenza()?->format('Y-m-d') ?? '—',
                $e->getQuantita(),
                $e->getPosizione() ?? '-'
            ));
        }


        return Command::SUCCESS;
    }
}
