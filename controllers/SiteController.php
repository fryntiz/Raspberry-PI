<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
     * Muestra el index, la página de inicio.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Muestra el menú de selección para gestionar pines GPIO.
     * @return string
     */
    public function actionGpio()
    {
        return $this->render('gpio');
    }

    /**
     * Información sobre el sistema y el hardware.
     * @return string
     */
    public function actionMonitorizar()
    {
        return $this->render('monitorizar');
    }

    /**
     * Información sobre el proyecto e instrucciones de uso.
     * @return string
     */
    public function actionInformacion()
    {
        return $this->render('informacion');
    }

    /**
     * Lleva a la página de actualizar el sistema y el firmware.
     * En el caso de recibir petición mediante POST recarga la página enviando
     * las variables "firmware" y "software" con su valor booleano recibido.
     *
     * @return string
     */
    public function actionActualizar()
    {
        if ($checkbox = Yii::$app->request->post()) {
            return $this->render('actualizar', [
                'software' => isset($checkbox['software']) ? 1 : 0,
                'firmware' => isset($checkbox['firmware']) ? 1 : 0,
            ]);
        }
        return $this->render('actualizar');
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
}
