<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{

    public $username;
    public $password;
    public $mail;
    public $pass;
    public function rules() {
        return [
            [['username', 'password', 'mail', 'pass'], 'required', 'message' => 'Заполните поле!'],
            [['pass'],'compare', 'compareAttribute' => 'password' , 'message' => 'Пароли не совпадают!'],
            [['mail'], 'email', 'message' => 'Введите верный @mail адрес!'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Этот логин уже занят!'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'mail' => '@mail адрес',
            'pass' => 'Подтвердите пароль',
        ];
    }
}