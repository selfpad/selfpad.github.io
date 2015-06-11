<?php
/**
 * Created by PhpStorm.
 * User: selfp
 * Date: 08.06.2015
 * Time: 15:56
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}