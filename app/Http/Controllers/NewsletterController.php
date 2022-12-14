<?php

namespace App\Http\Controllers;

use App\Services\MailChimpNewsletter;
use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => ['required', 'email'],
        ]);
        try {
            $newsletter->subscribe(request('email'));

        }catch (Exception $exception) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }
        return redirect('/')->with('success', 'You are now signed up for our newsletter');
    }
}
