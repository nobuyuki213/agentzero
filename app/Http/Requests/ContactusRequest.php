<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactusRequest extends FormRequest
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
            //
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:191',
            'company' => 'max:50',
            'category' => 'required',
            'message' => 'required|string|max:1000',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'company' => '会社名、団体名',
            'category' => 'お問い合わせ項目',
            'message' => 'お問い合わせ内容',
        ];
    }

    /**
     * Get data to be validated from the request.
     * バリデート前処理で、リクエストからバリデートするデータを取得し、先頭と末尾の「半角スペース、全角スペース、tabを取り除く」
     * @return array
     */
    protected function validationData()
    {
        $input = $this->all();
        // name,email.companyのリクエストデータを取得し不要な各空白を取り除く
        if(isset($input['name'])) {
            $input['name'] = trim($input['name'], ' 　   ');
        }
        if(isset($input['email'])) {
            $input['email'] = trim($input['email'], ' 　   ');
        }
        if(isset($input['company'])) {
            $input['company'] = trim($input['company'], ' 　   ');
        }

        // リクエストの入力を置き換える処理
        $this->replace($input);

        return $input;
    }
}
