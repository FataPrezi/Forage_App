<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateFactures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:factures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Commande artisan pour generer les factures';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Generation en cours....');
        $compteurs=\App\Compteur::get();
        $bar = $this->output->createProgressBar( $compteurs->count());
        $bar->start();
        foreach($compteurs as $compteur)
        {
            $this->info($compteur->numero_serie);
            $compteur->generateFacture();
            $bar->advance();
        }

        $bar->finish();

        $this->info('Operation effectuee avec succes....');


        /*
        $this->info('Generation en cours....');
        $compteurs=\App\Compteur::get();
        foreach( $compteurs as  $compteur)
        {
            $this->info($compteur->numero_serie);
        }

        $this->info('Operation effectuee avec succes....');

//PROGRESS BAR
        $bar = $this->output->createProgressBar(100000);

        $bar->start();

        for ($i=0;$i<100000;$i++) {

        $bar->advance();
         }

          $bar->finish();
        } */
    }
}



