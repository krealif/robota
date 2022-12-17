<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

class ValidHCaptcha implements Rule
{

    const VERIFY_URL = 'https://hcaptcha.com/siteverify';
    protected $client;

    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $response = $this->getClient()->request('POST', self::VERIFY_URL, [
            'form_params' => [
                'secret' => config('services.h-captcha.secret'),
                'response' => $value
            ],
            ]);

            $data = json_decode($response->getBody());
            if (isset($data->success) && $data->success === true)
            {
                return true;
            } else {
                return false;
            }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid CAPTCHA. You need to prove you are human.';
    }

    public function getClient()
    {
        if (! $this->client) {
            $this->client = new Client();
        }

        return $this->client;
    }
}
