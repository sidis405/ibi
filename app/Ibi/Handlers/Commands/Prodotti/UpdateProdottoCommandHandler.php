<?php

namespace Ibi\Handlers\Commands\Prodotti;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\Prodotti\UpdateProdottoCommand;
use Ibi\Events\Prodotti\ProdottoWasUpdated;
use Ibi\Models\Prodotti;
use Ibi\Repositories\ProdottiRepo;


class UpdateProdottoCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ProdottiRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateProdottoCommand  $command
     * @return void
     */
    public function handle(UpdateProdottoCommand $command)
    {


         $prodotto_object = Prodotti::edit(
            $command->prodotto_id,
            $nome, 
            $formulazione, 
            $principio_attivo_id, 
            $fascia_id, 
            $aic, 
            $atc, 
            $regime_dispensazione, 
            $unita, 
            $validita_mesi, 
            $categoria_terapeutica_id,
            $active
            );

        $prodotto = $this->repo->save($prodotto_object);

        $prodotto->sezioni()->sync($command->sezioni);
        $prodotto->paesi()->sync($command->paesi);

        $this->caricaFogliettoIllustrativo($prodotto->id, $command->foglietto_illustrativo);
        $this->caricaSchedaTecnica($prodotto->id, $command->scheda_tecnica);

        Event::fire(new ProdottoWasUpdated($prodotto));

        return $prodotto;
    }

    protected function caricaFogliettoIllustrativo($prodotto_id, $foglietto_illustrativo)
    {
        logger('carico figlietto illustrativo e aggiorno record');
    }

    protected function caricaSchedaTecnica($prodotto_id, $scheda_tecnica)
    {
        logger('carico scheda tecnica e aggiorno record');   
    }
}
