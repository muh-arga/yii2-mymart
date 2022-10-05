<?php

namespace frontend\controllers;

use frontend\models\Item;
use frontend\models\ItemCategory;
use frontend\models\ItemSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemController implements the CRUD actions for Item model.
 */
class ItemController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Item models.
     * @return mixed
     */
    public function actionIndex()
    {
        Yii::$app->myComponent->trigger(\app\components\MyComponent::EVENT_STATISTIC);

        $searchModel = new ItemSearch();

        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Item model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        Yii::$app->myComponent->trigger(\app\components\MyComponent::EVENT_STATISTIC);
        
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionFilter()
    {
        $category_id = Yii::$app->request->get('category_id');
        $model = Item::find()->where(['category_id' => $category_id])->all();
        $itemCategory = ItemCategory::find()->all();

        return $this->render('filter', [
            'model' => $model,
            'itemCategory' => $itemCategory
        ]);
    }
}
