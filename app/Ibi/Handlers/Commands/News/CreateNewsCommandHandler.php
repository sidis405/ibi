<?php

namespace Ibi\Handlers\Commands\News;

use Event;
use Ibi\Commands\News\CreateNewsCommand;
use Ibi\Events\News\NewsWasCreated;
use Ibi\Models\News;
use Ibi\Repositories\NewsRepo;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Utils\FileUtility;

class CreateNewsCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(NewsRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  CreateNewsCommand  $command
     * @return void
     */
    public function handle(CreateNewsCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;


        $news_object = News::make($command->titolo , $command->descrizione, $command->testo, $active, $command->created_at);

        $news = $this->repo->save($news_object);

        $this->caricaImmagine($news, $command->immagine_path);

        Event::fire(new NewsWasCreated($news));

        return $news;

    }

    protected function caricaImmagine($news, $immagine)
    {

        if($immagine)
        {
            $immagine_path = $this->file_utility->putFile($news->id, 'news_immagine', $immagine);

            $news->update(['immagine_path' => $immagine_path]);
            
        }

    }
}
