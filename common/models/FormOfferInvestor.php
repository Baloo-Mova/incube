<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_offer_investor".
 *
 * @property integer $id
 * @property integer $id_author
 * @property integer $id_publisher
 * @property string $investor_name
 * @property string $investor_contacts
 * @property string $stage_project
 * @property integer $economic_activities
 * @property string $region
 * @property integer $investor_cost
 * @property integer $duration_project
 * @property integer $term_refund
 * @property string $plan_rent
 * @property string $other
 * @property string $logo
 * @property string $date_create
 * @property string $date_publish
 * @property integer $status
 *
 * @property EconomicActivities $economicActivities
 * @property User $idAuthor
 */
class FormOfferInvestor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_offer_investor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_author', 'id_publisher', 'economic_activities', 'investor_cost', 'duration_project', 'term_refund', 'status'], 'integer'],
            [['investor_contacts', 'stage_project'], 'string'],
            [['date_create', 'date_publish'], 'safe'],
            [['investor_name', 'region', 'plan_rent', 'other', 'logo'], 'string', 'max' => 255],
            [['economic_activities'], 'exist', 'skipOnError' => true, 'targetClass' => EconomicActivities::className(), 'targetAttribute' => ['economic_activities' => 'id']],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_author' => 'Id автора',
            'id_publisher' => 'Id редактора',
            'investor_name' => 'Інвестор',
            'investor_contacts' => 'Контактні дані',
            'stage_project' => 'Етап проекту',
            'economic_activities' => 'Галузь',
            'region' => 'Регіон інвестування',
            'investor_cost' => 'Сума, яку готові інвестувати',
            'duration_project' => 'Період реалізації інвестиційного проекту',
            'term_refund' => 'Термін повернення вкладених коштів',
            'plan_rent' => 'Планована рентабельність проекту',
            'other' => 'Інше',
            'logo' => 'Логотип',
            'date_create' => 'Дата створеня',
            'date_publish' => 'Дата публікації',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEconomicActivities()
    {
        return $this->hasOne(EconomicActivities::className(), ['id' => 'economic_activities']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'id_author']);
    }
}
