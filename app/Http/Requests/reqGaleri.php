<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqGaleri extends FormRequest
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
            'judul_galeri' => 'required|min:3|max:200',
            'deskripsi_galeri' => 'required|min:20|max:10000',
            'image_galeri' => 'required|mimes:jpg,jpeg,png|max:4000',
        ];
    }

    public function messages(){
        return [
            'judul_galeri.min' => 'Judul Galeri minimal 3 karakter',
            'judul_galeri.max' => 'Judul Galeri maksimal 200 karakter',
            'judul_galeri.required' => 'Judul Galeri harus diisi',
            'deskripsi_galeri.required' => 'Deskripsi Galeri harus diisi ',
            'deskripsi_galeri.min' => 'Deskripsi Galeri maksimal 20 karakter',
            'deskripsi_galeri.max' => 'Deskripsi Galeri minimal 1000 karakter',
            'image_galeri.required' => 'Gambar harus dipilih',
            'image_galeri.mimes:jpg,jpeg,png' => 'Gambar yang diizinkan hanya dalam format jpg, jpeg, dan png',
            'image_galeri.max:4000' => 'Ukuran Maskimal Gambar adalah 4 MB',
        ];
    }
}
