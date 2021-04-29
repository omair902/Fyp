<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForumRequest extends FormRequest
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
                    'category'=>'required|string|max:255',
                    'title'=>'required|string|max:255',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1000,max_width=1000,min_height=400,max_height=400',
                    'description'=>'required|string',
        
                ];
            case 'PATCH':
                return [
                    'category'=>'required|string|max:255',
                    'title'=>'required|string|max:255',
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1000,max_width=1000,min_height=400,max_height=400',
                    'description'=>'required',
        
                ];
            case 'DELETE':
            case 'DEFAULT':
                return [];
        }
    }
}
