<?php

namespace Quill\Status\Traits;

trait HasState
{

    /**
     * Eloquent Builder for models with meta values.
     *
     * @return void
     */
    public function state()
	{
		return $this->hasOne('Quill\Status\Models\State', 'id', 'status');
	}
}
