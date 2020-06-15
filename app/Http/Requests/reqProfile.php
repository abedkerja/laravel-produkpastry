<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reqProfile extends FormRequest
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
            'nama_usaha' => 'required|min:3|max:200',
            'logo_usaha' => 'required',
            'alamat' => 'required',
            'deskripsi_profile' => 'required|min:20|max:10000',
            'nomor_hp' => 'required|numeric|digits_between:3,12',
        ];
    }

    public function messages(){
        return [
            'nama_usaha.min' => 'Judul Blog minimal 3 karakter',
            'nama_usaha.max' => 'Judul Blog maksimal 200 karakter',
            'nama_usaha.required' => 'Judul Blog harus diisi',
            'logo_usaha.required' => 'logo_usaha harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'deskripsi_profile.required' => 'Deskripsi harus diisi ',
            'deskripsi_profile.min' => 'Deskripsi minimal 20 karakter',
            'deskripsi_profile.max' => 'Deskripsi maksimal 1000 karakter',
            'nomor_hp.required' => 'Nomor HP harus diisi',
            'nomor_hp.numeric' => 'Nomor HP harus dalam bentuk angka',
            'nomor_hp.digits_between' => 'Digit Nomor HP antara 3 sampai dengan 12',
        ];
    }
}
