<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'POST':
                return [
                    'name'=>'required|string|max:255|unique:games',
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=362,max_width=362,min_height=270,max_height=270',
                    'description'=>'required|string',
        
                ];
            case 'PATCH':
                return [
                    'name'=>'required|string|max:255',
                    'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=362,max_width=362,min_height=270,max_height=270',
                    'description'=>'required|string',
        
                ];
            case 'DELETE':
            case 'DEFAULT':
                return [];
        }
       
    }
}
