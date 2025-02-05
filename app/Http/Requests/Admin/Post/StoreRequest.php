<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|image|mimes:jpg,jpeg,png',
            'main_image' => 'required|image|mimes:jpg,jpeg,png',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.string' => 'Данные должны соотвествовать строчному типу',
            'content.required' => 'Это поле обязательно для заполнения',
            'content.string' => 'Данные должны соотвествовать строчному типу',
            'preview_image.required' => 'Это поле обязательно для заполнения',
            'preview_image.image' => 'Необходимо выбрать изображение',
            'preview_image.mimes' => 'Допустимы форматы изображений .jpg, .jpeg, .png',
            'main_image.required' => 'Это поле обязательно для заполнения',
            'main_image.image' => 'Необходимо выбрать изображение',
            'main_image.mimes' => 'Допустимы форматы изображений .jpg, .jpeg, .png',
            'category_id.required' => 'Это поле обязательно для заполнения',
            'category_id.integer' => 'Id категории должен быть числом',
            'category_id.exists' => 'Id категории должен быть в базе данных',
            'tag_ids.array' => 'Необходимо отправить массив данных'
        ];
    }
}
