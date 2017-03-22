<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Naux\Mail\SendCloudTemplate;
use Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)  //重写sendPasswordResetNotification方法
    {
        $data = ['url' => url('password/reset', $token)];  //url toMail方法里面
//        dd($data);
        $template = new SendCloudTemplate('password_reset', $data);

        Mail::raw($template, function ($message) {
            $message->from('wploey@163.com', 'wploey');
            $message->to($this->email);
        });
    }
}
