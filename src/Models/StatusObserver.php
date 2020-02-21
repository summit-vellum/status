<?php

namespace Quill\Status\Models;

use Illuminate\Support\Str;
use Quill\Status\Models\Status;

/**
 * Sample event trigger
 * 
 * event(new StatusCreated($status));
 * 
 */

class StatusObserver
{

    public function creating(Status $status)
    {
        // creating logic...
    }

    public function created(Status $status)
    {
        // created logic...
    }

    public function saving(Status $status)
    {
        // saving logic...
    }

    public function saved(Status $status)
    {
        // saved logic...
    }

    public function updating(Status $status)
    {
        // updating logic...
    }

    public function updated(Status $status)
    {
        // updated logic...
    }

}