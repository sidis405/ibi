<?php

namespace Ibi\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function niceName()
    {
         return $this->first_name . ' ' . $this->last_name;
    }
}
