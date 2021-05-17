<?php

namespace app\controllers;

use Yii;
use yii\base\BaseObject;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\listeningtest;
use app\models\listeningTestSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new listeningtest();
       /* if (isset($_GET['show']) || isset($_POST['show'])){
            echo "set";
        } else {
            echo "not set";
        }*/




        return $this->render('index',[
            'model'=> $model,
        ]);
    }
    public function actionGetValues()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $values = Listeningtest::find()->one();
        return $values;
    }

    public function actionTesst()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            $post = Yii::$app->request->post();
          /*   $total_visits =  $_POST['total_visits'];
            $best_thing =  $_POST['best_thing'];
            $fav_attraction =  $_POST['fav_attraction'];
            $destination_dining =  $_POST['destination_dining'];
            $age_group =  $_POST['age_group'];
            $income_level =  $_POST['income_level'];
            $visit_purpose =  $_POST['visit_purpose'];
            $occupation =  $_POST['occupation'];
            $accomodation_cost =  $_POST['accomodation_cost'];*/
         $values = Listeningtest::find()->one();
            return $values;
    }


    public function actionCreate()
    {
        $model = new listeningtest();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    protected function findModel($id)
    {
        if (($model = listeningtest::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
