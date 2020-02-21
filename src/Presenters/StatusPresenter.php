<?php

namespace Quill\Status\Presenters;

use App\Http\Models\Status;
use Vellum\Presenters\Presenter;
use McCool\LaravelAutoPresenter\BasePresenter;

class StatusPresenter extends BasePresenter
{

    public function status()
    {
        $statusId = $this->wrappedObject->status;

        return status_icon(
                $this->wrappedObject->status, 
                $this->wrappedObject->published_at
            ) . Status::all()[$statusId] ;
    }

}
