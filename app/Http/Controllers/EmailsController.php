<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email()
    {
            Mail::to('yuneshshrestha24@gmail.com')->send(new AttachmentMail);
            return new AttachmentMail();
    }
}
