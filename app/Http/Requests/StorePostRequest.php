<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
     public function authorize()
        {
            return true;
        }
        
        public function rules()
        {
            return [
                'title' => 'required|max:255',
                'content' => 'required|min:10',
                'image' => 'nullable|image|max:2048',
                'user_id' => 'required'
            ];
        }
        
        public function messages()
        {
            return [
                'title.required' => 'Title is required.',
                'content.min' => 'Content too short (min 10 chars).',
                'image.max' => 'Image size too large (max 2mb).' 
            ];
        }
}
