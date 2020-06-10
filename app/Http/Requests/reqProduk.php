<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqProduk extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'nama_produk' => 'required|min:3|max:25',
            'harga' => 'required|numeric|digits_between:3,12',
            'description' => 'required|min:20|max:10000',
            'image' => 'required|mimes:jpg,jpeg,png|max:4000',
            
        ];
    }

    public function messages(){
        return [
            'nama_produk.min' => 'Nama Produk minimal mengandung 3 karakter',
            'nama_produk.max' => 'Nama Produk maksimal mengandung 25 karakter',
            'nama_produk.required' => 'Nama Produk harus diisi',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus dalam bentuk angka',
            'harga.digits_between' => 'Digit Harga antara 3 sampai dengan 12',
            'description.required' => 'Deskripsi harus diisi ',
            'description.min' => 'Deskripsi maksimal mengandung 20 karakter',
            'description.max' => 'Deskripsi minimal mengandung 1000 karakter',
            'image.required' => 'Gambar harus dipilih',
            'image.mimes:jpg,jpeg,png' => 'Gambar yang diizinkan hanya dalam format jpg, jpeg, dan png',
            'image.max:4000' => 'Ukuran Maskimal Gambar adalah 4 MB',
        ];
    }
}
