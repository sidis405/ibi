<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ComunicatiRepo;
use Ibi\Repositories\PagineRepo;
use Ibi\Repositories\NewsRepo;
use Ibi\Requests\SendSegnalazioneRequest;
use Illuminate\Http\Request;

class FarmacoVigilanzaController extends Controller
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsRepo $news_repo, ComunicatiRepo $comunicati_repo, PagineRepo $pagine_repo
        // ,  SchedeSegnalazioneRepo $schede_repo
        )
    {
        $comunicati = $comunicati_repo->getAllFront();
        $news = $news_repo->getAllFront();
        // $schede = $schede_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('farmaco-vigilanza');

        return view('farmaco-vigilanza.index', compact('comunicati', 'contenuti', 'news'));

    }

    public function comunicato($id, $slug, ComunicatiRepo $comunicati_repo)
    {
        $comunicato = $comunicati_repo->getById($id);

        return $comunicato;

    }

    public function create(ComunicatiRepo $comunicati_repo)
    {
        $comunicati = $comunicati_repo->getAllFront();

        return view('farmaco-vigilanza.segnalazione', compact('comunicati'));
    }

    public function store(SendSegnalazioneRequest $request)
    {

        $candidatura = $this->dispatchFrom('Ibi\Commands\FarmacoVigilanza\CreateSegnalazioneCommand', $request);
        
        flash()->success('Segnalazione inviata correttamente.');

        return redirect()->to('/farmaco-vigilanza/segnalazione');
    }

}
