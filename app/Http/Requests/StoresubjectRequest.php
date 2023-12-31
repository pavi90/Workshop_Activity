<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoresubjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2',
            'description' => 'required',
            'course_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is Must',
            'course_id.required' => 'Course id required',
            'title.min' => 'Name Must be 2 Chr.',
            'description.required' => 'Description is Must',
        ];
    }
}
