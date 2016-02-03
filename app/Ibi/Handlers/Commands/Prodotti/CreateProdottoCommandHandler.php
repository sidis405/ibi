<?php

namespace Ibi\Handlers\Commands\Prodotti;

use Ibi\Commands\Prodotti\CreateProdottoCommand;
use Ibi\Models\Prodotti;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\ProdottiRepo;
use Ibi\Events\Prodotti\ProdottoWasCreated;
use Event;
use Ibi\Utils\FileUtility;


class CreateProdottoCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ProdottiRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  CreateaCategoriaTerapeuticaCommand  $command
     * @return void
     */
    public function handle(CreateProdottoCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $prodotto_object = Prodotti::make(
            $command->nome, 
            $command->formulazioni, 
            $command->principio_attivo_id, 
            $command->fascia_id, 
            // $command->aic, 
            // $command->atc, 
            $command->regime_dispensazione, 
            $command->unita, 
            $command->validita_mesi, 
            $command->categoria_terapeutica_id,
            $active
            );


        $prodotto = $this->repo->save($prodotto_object);

        $prodotto->sezioni()->sync($command->sezioni);
        // $prodotto->paesi()->sync($command->paesi);

        $this->caricaFogliettoIllustrativo($prodotto, $command->foglietto_illustrativo);
        $this->caricaSchedaTecnica($prodotto, $command->scheda_tecnica);

        Event::fire(new ProdottoWasCreated($prodotto));

        return $prodotto;

    }

    protected function caricaFogliettoIllustrativo($prodotto, $foglietto_illustrativo)
    {

        if($foglietto_illustrativo)
        {
            $foglietto_path = $this->file_utility->putFile($prodotto->id, 'foglietto', $foglietto_illustrativo, ['nome' => $prodotto->nome, 'formulazione' => 'formulazione']);

            $prodotto->update(['foglietto_illustrativo' => $foglietto_path]);
            
        }

    }

    protected function caricaSchedaTecnica($prodotto, $scheda_tecnica)
    {

        if($scheda_tecnica)
        {
            $scheda_path = $this->file_utility->putFile($prodotto->id, 'scheda', $scheda_tecnica, ['nome' => $prodotto->nome, 'formulazione' => 'formulazione']);

            $prodotto->update(['scheda_tecnica' => $scheda_path]);
            
        }
    }
}
