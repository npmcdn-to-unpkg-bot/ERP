<?php

namespace Nixzen\Http\Requests;

use Nixzen\Http\Requests\Request;

class VendorRequest extends Request
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
            'name' => 'required',
						'email' => 'required',
						'phone' => 'required',
						'tin' =>  'required',
						'branch_id' => 'required',
						'taxcode_id' => 'required',
						'term_id' => 'required'
        ];
    }
}
