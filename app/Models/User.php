<?php

namespace App\Models;

use App\Helpers\Html;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    public static function check($email){

        /* проверка на уникальность логина */

        if(static::where('email', $email)->exists()){
            return false;
        }else{
            return true;
        }
    }

    public static function access($email = null, $password = null){

        /* проверка логина и пароля */

        if(!$email || !$password){
            $email = session('email');
            $password = session('password');
        }

        return static::where(['email'=>$email, 'password'=>$password])->exists();
    }


    public static function add($array){

        /* создание записи */

        static::create($array);
    }

    public static function getInfo($data_array){

        /* получение информации о пользователе */

        $email = session('email');
        $password = session('password');

        if(static::access($email, $password)){
            return static::where(['email'=>$email, 'password'=>$password])->first($data_array)->toArray();
        }else{
            Html::alert('Ошибка в данных сессии', 'danger');
        }
    }

    public static function id(){

        /* Получение id */

        return static::where('email', session('email'))->get('id')->toArray()[0]['id'];
    }

    public function role(){

        /* Получение роли */

        return $this->belongsTo(Role::class);
    }

    public static function getCurrent(){
        return static::where('email', session('email'))->first();
    }
}
