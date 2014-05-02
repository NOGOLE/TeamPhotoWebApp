<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $name
 * @property integer $phone
 * @property integer $pin
 */
class User extends CActiveRecord
{

	public $initial_pin;
	public $repeat_pin;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, pin, repeat_pin', 'required', 'on' =>'register'),
			array('phone, pin', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			//Want PIN to be between 4 and 10 digits long`
			array('pin, repeat_pin', 'length', 'min'=>4, 'max'=>10),
			array('pin', 'compare', 'compareAttribute' => 'repeat_pin'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, phone', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
	/*User has many albumns, and many shared albumns*/
		return array(
		'albums' =>array(self::HAS_MANY, 'UserAlbum','user_id'),
		'sharedAlbums' =>array(self::HAS_MANY, 'SharedAlbum','user_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'phone' => 'Phone',
			'pin' => 'PIN',
			'repeat_pin' => 'Repeat PIN',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
