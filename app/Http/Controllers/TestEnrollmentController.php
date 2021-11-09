<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class TestEnrollmentController extends Controller
{
    public function sendTestNotification(){
        // $user = Auth::user();
        $user = User::first();
        // Here 1st is my email
        $enrollmentData = [
            'body'=>'You received an new test otification',
            'enrollmentText'=>'You are allowed to enroll',
            'url'=>url('/'),
            'thankyou'=>'You have 14 days to enroll'
        ];
        // Sending via notifiable trait
        $user->notify(new TestEnrollment($enrollmentData));
        // Sending via notification facade
        // Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
