<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class InvitationMainRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'catalog_id' => 'required',
            'nickname_groom' => 'required|max:225',
            'nickname_bride' => 'required|max:225',
            'marriage_date' => 'required',
            'background_color' => 'required|max:225',
            'quote' => 'required|max:2000',
            'quote_reference' => 'required|max:225',
            'full_name_groom' => 'required|max:225',
            'ig_groom' => 'required|max:225',
            'full_name_bride' => 'required|max:225',
            'ig_bride' => 'required|max:225',
            'groom_father' => 'required|max:225',
            'groom_mother' => 'required|max:225',
            'bride_father' => 'required|max:225',
            'bride_mother' => 'required|max:225'
        ];
    }
}
