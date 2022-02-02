<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.content' => 'required|string|max:4000',
            'post.meeting_place' => 'required|string|max:100',
             'post.meeting_time' => 'required|string|max:4000',
        ];
    }
}


