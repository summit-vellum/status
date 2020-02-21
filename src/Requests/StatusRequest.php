<?php

namespace Quill\Status\Http\Requests;

use Vellum\Contracts\FormRequestContract;
use Vellum\Contracts\Formable;
use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest implements FormRequestContract
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Formable $form)
    {
        $fields = $form->fields();
        $rules = collect($fields)->filter(function($field){
                return $field->getAttribute('rules');
            })->keyBy(function($item){
                return $item->getAttribute('id');
            })->map(function($value, $field){
                return $value->getAttribute('rules');
            })->toArray();
    
        return $rules;
    }
}
