<?php 

namespace app\components;

use yii\base\Component;
use frontend\models\Statistic;
use Yii;

class MyComponent extends Component
{
    const EVENT_STATISTIC = 'statistic';
    public static function myHandler() {
        $statistic = new Statistic();
        $statistic->user_ip = Yii::$app->request->userIP;
        $statistic->user_host= Yii::$app->request->userHost;
        $statistic->path_info = Yii::$app->request->pathinfo;
        $statistic->query_string = Yii::$app->request->queryString;

        $statistic->save();
    }
}

?>