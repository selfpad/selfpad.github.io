<?php
/**
 * Created by PhpStorm.
 * User: selfp
 * Date: 08.06.2015
 * Time: 17:10
 */

use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>