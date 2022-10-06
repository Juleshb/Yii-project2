<?php

namespace app\models;
use yii\db\ActiveRecord;

class post extends ActiveRecord{
    private $Title;
    private $Date;
    private $Contrnt;

    public function rules(){
        return[
            [['Title','Date','Contrnt'],'required']
        ];
    }

}
?>