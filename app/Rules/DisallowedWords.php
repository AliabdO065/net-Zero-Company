<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;

class DisallowedWords implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
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
        $disallowedWords = ['#x#', '#xt#','=#=','x#','#x','=#','#=']; 
        foreach ($disallowedWords as $word) {
            if (stripos($value, $word) !== false) {
                return false; 
            }
        }
        return true; 
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute contains #xt# or #x# or =#= words .
             and that is not allow';
    }
}