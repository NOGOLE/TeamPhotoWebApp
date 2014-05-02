<?php

/**
 * This is the model class for table "userAlbum".
 *
 * The followings are the available columns in table 'userAlbum':
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $description
 * @property integer $create_time
 * @property string $directory_path
 */
class UserAlbum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'userAlbum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description', 'required'),
			array('user_id, create_time', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('description', 'length', 'max'=>5000),
			array('directory_path', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, name, description, create_time, directory_path', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		/*An album belongs to one user and has many photos*/

		return array(
			'user' => array(self::BELONGS_TO,
			'User', 'user_id'),
			'photos' => array(self::HAS_MANY,
			'Photo', 'album_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'name' => 'Name',
			'description' => 'Description',
			'create_time' => 'Create Time',
			'directory_path' => 'Directory Path',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('directory_path',$this->directory_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserAlbum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	* Returns true if directory is created, false otherwise
	* @param User $model, model that needs directory created
	* @return Boolean to determine success.
	*/
	public function createDirectory($model)
	{
		$sucess = false; //initialize variable
		$name = $model->name;
	$basePath = Yii::getPathOfAlias('webroot');

	mkdir($basePath.'/albums'.'/'.$name);
	$model->directory_path = $basePath.'/albums/'.$name;
//	var_dump($basePath.'/albums/'.$name);
//	exit();	

	}

	protected function beforeSave()
	{
	
	$this->user_id = Yii::app()->user->getId();
	$this->create_time = time();	
	$this->createDirectory($this);
	
return parent::beforeSave();	
	
	}


	protected function afterSave()
{
	if(parent::afterSave()) {
	var_dump($this->id);
	exit();
}
}

	}
