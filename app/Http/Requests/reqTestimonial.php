<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqTestimonial extends FormRequest
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
            'nama_testi' => 'required|min:3|max:200',
            'deskripsi_testi' => 'required|min:20|max:10000',
            'image_testi' => 'required|mimes:jpg,jpeg,png|max:4000',
        ];
    }

    public function messages(){
        return [
            'nama_testi.min' => 'Judul Blog minimal 3 karakter',
            'nama_testi.max' => 'Judul Blog maksimal 200 karakter',
            'nama_testi.required' => 'Judul Blog harus diisi',
            'deskripsi_testi.required' => 'Deskripsi harus diisi ',
            'deskripsi_testi.min' => 'Deskripsi minimal 20 karakter',
            'deskripsi_testi.max' => 'Deskripsi maksimal 1000 karakter',
            'image_testi.required' => 'Gambar harus dipilih',
            'image_testi.mimes:jpg,jpeg,png' => 'Gambar yang diizinkan hanya dalam format jpg, jpeg, dan png',
            'image_testi.max:4000' => 'Ukuran Maskimal Gambar adalah 4 MB',
        ];
    }
}
