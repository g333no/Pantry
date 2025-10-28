<?php
namespace App\Command;

use App\Entity\Prodotto;
use App\Entity\StockEntry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:seed-sample',
    description: 'Crea alcuni dati di esempio (Prodotto + StockEntry) per testare il calendario.'
)]
class SeedSampleDataCommand extends Command
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $p = new Prodotto();
        $p->setNome('Pane Fresco');
        $p->setQuantita(5);
        $p->setCategoria('Forno');
        $p->setColore('#ffcc00');
        $p->setEmoji('🍞');

        $this->em->persist($p);

        $s = new StockEntry();
        $s->setProdotto($p);
        $s->setQuantita(2);
        $s->setPosizione('dispensa');
        // $s->setCreatedAt(new \DateTimeImmutable('2025-09-01 10:00:00'));
        $s->setScadenza(new \DateTime('+' . 7 . ' days')); // scade fra 7 giorni

        $this->em->persist($s);
        $this->em->flush();

        $output->writeln('Dati di esempio creati: Prodotto id='.$p->getId().' StockEntry id='.$s->getId());

        return Command::SUCCESS;
    }
}
