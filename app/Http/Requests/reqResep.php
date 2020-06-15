<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqResep extends FormRequest
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
            'judul_resep' => 'required|min:3|max:200',
            'author' => 'required',
            'deskripsi_resep' => 'required|min:20|max:10000',
            'image_resep' => 'required|mimes:jpg,jpeg,png|max:4000',
        ];
    }

    public function messages(){
        return [
            'judul_resep.min' => 'Judul Resep minimal 3 karakter',
            'judul_resep.max' => 'Judul Resep maksimal 200 karakter',
            'judul_resep.required' => 'Judul Resep harus diisi',
            'author.required' => 'Author harus diisi',
            'deskripsi_resep.required' => 'Deskripsi harus diisi ',
            'deskripsi_resep.min' => 'Deskripsi minimal 20 karakter',
            'deskripsi_resep.max' => 'Deskripsi maksimal 1000 karakter',
            'image_resep.required' => 'Gambar harus dipilih',
            'image_resep.mimes:jpg,jpeg,png' => 'Gambar yang diizinkan hanya dalam format jpg, jpeg, dan png',
            'image_resep.max:4000' => 'Ukuran Maskimal Gambar adalah 4 MB',
        ];
    }
}
