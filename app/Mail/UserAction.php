<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Auth;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $prod;
    public $action;

    public function __construct($user, $prod, $action)
    {
        $this -> user = $user;
        $this -> prod = $prod;
        $this -> action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $email = Auth::user() -> email;
      return $this  -> from($email)
                    -> view('mail.product');
    }
}
