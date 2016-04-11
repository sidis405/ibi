<?php

namespace Ibi\Repositories;

use Ibi\Models\Pages;
use Ibi\Models\Version;


/**
* Pagine Repo
*/
class ModificheRepo
{
    public function save(Pages $page)
    {
        $page->save();

        return $page;
    }

    public function ignore($id)
    {
        $version = Version::find($id);
        $version->hide = 1;

        $version->save();
    }

    public function activate($id)
    {
        $version = Version::find($id);

        $this->deactivateAllForType($version->versionable_id, $version->versionable_type);

        $version->active = 1;
        $version->hide = 1;
        // dd($version);

        $version->save();
    }

    public function deactivateAllForType($versionable_id, $versionable_type)
    {
        $all = Version::where('versionable_id', $versionable_id)->where('versionable_type', $versionable_type)->update(['active' => 0]);

    }

    public function getById($id)
    {

        $this->markAsSeen($id);


        return Version::with('baseContenutoTranslation.contenuto.pagina', 'user')->where('version_id', $id)->first();
    } 


    public function markAsSeen($id)
    {
        $version = Version::find($id);
        $version->seen = 1;

        $version->save();
        
    }

    public function getAll()
    {
        return Version::with('baseContenutoTranslation.contenuto.pagina', 'user')->where('hide', 0)->latest()->get();
    } 

}
