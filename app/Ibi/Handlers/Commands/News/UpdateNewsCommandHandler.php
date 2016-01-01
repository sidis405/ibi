<?php

namespace Ibi\Handlers\Commands\News;

use Event;
use Ibi\Commands\News\UpdateNewsCommand;
use Ibi\Events\News\NewsWasUpdated;
use Ibi\Models\News;
use Ibi\Repositories\NewsRepo;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Utils\FileUtility;

class UpdateNewsCommandHandler
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
     * @param  UpdateNewsCommand  $command
     * @return void
     */
    public function handle(UpdateNewsCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $news_object = News::edit($command->news_id, $command->titolo , $command->descrizione, $command->testo, $active);

        $news = $this->repo->save($news_object);

        $this->caricaImmagine($news, $command->immagine_path);

        Event::fire(new NewsWasUpdated($news));

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
