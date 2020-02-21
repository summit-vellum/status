<?php

namespace Quill\Status\Resource;

use Quill\Html\Fields\ID;
use Quill\Html\Fields\Text;
use Quill\Html\Fields\Textarea;
use Quill\Status\Models\Status;
use Quill\Status\Presenters\StatusPresenter;
use Vellum\Contracts\Formable;

class StatusResource extends Status implements Formable
{
    public function fields()
    {
        return [
            ID::make()->sortable()->searchable(),
            Text::make('Name')->sortable()->searchable(),
            Textarea::make('Description')->searchable()
        ];
    }

    public function filters()
    {
        return [
            //
        ];
    }

    public function actions()
    {
        return [
            new \Vellum\Actions\EditAction,
            new \Vellum\Actions\ViewAction,
            new \Vellum\Actions\DeleteAction,
        ];
    }

}
