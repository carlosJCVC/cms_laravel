<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required|between:3,32',
            'code' => 'required|between:3,32',
            'price_compra' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'price_venta' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'status' => 'required|boolean',
            // 'status' => 'required|in:ACTIVE,INACTIVE',
            'stock' => 'required|integer',
            'image' => 'image|dimensions:min_width=100,min_height=200',
            'category_id' => 'integer'
        ];

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return $rules;
            }
            case 'PUT':
            case 'PATCH': {
                return $rules;
            }
            default:
                break;
        }

        return [
        
        ];
    }
}
