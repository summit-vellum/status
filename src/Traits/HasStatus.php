<?php

namespace Quill\Status\Traits;

trait HasStatus
{

    /**
     * Eloquent Builder for models with meta values.
     *
     * @return void
     */
    public function status()
	{
		return $this->hasOne('Quill\Status\Models\Status', 'id', 'status');
	}
}
