<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:destinations,name',
            'thumbnail' => 'required|file|image|max:2000',
            'review' => 'required',
            'price' => 'required|integer',
            'time' => 'required',
            'location' => 'required',
            'description' => 'required',
            'images' => 'required',
        ];
    }
}
