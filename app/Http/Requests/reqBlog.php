<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqBlog extends FormRequest
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
        return [
            'judul_blog' => 'required|min:3|max:200',
            'author' => 'required',
            'created_by' => 'required',
            'deskripsi_blog' => 'required|min:20|max:10000',
            'image_blog' => 'required|mimes:jpg,jpeg,png|max:4000',
        ];
    }

    public function messages(){
        return [
            'judul_blog.min' => 'Judul Blog minimal 3 karakter',
            'judul_blog.max' => 'Judul Blog maksimal 200 karakter',
            'judul_blog.required' => 'Judul Blog harus diisi',
            'author.required' => 'Author harus diisi',
            'created_by.required' => 'Dibuat Oleh harus diisi',
            'deskripsi_blog.required' => 'Deskripsi harus diisi ',
            'deskripsi_blog.min' => 'Deskripsi minimal 20 karakter',
            'deskripsi_blog.max' => 'Deskripsi maksimal 1000 karakter',
            'image_blog.required' => 'Gambar harus dipilih',
            'image_blog.mimes:jpg,jpeg,png' => 'Gambar yang diizinkan hanya dalam format jpg, jpeg, dan png',
            'image_blog.max:4000' => 'Ukuran Maskimal Gambar adalah 4 MB',
        ];
    }
}
