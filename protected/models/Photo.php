<?php

/**
 * This is the model class for table "photo".
 *
 * The followings are the available columns in table 'photo':
 * @property integer $id
 * @property integer $album_id
 * @property integer $user_id
 * @property string $name
 * @property integer $upload_time
 * @property string $uri
 */
class Photo extends CActiveRecord
{

	private $_image;

	public function setImage($image)
	{
	$this->_image = $image;
	}

	public function saveImage($image_path,$photo_path)
	{
	$file = $image_path .'/'.$photo_path;
	$this->_image->saveAs($file);
	$this->uri =$file;
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array( 'uri', 'required'),
			array('album_id, user_id, upload_time', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('uri', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, album_id, user_id, name, upload_time, uri', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
		//photos belong to album and belong to user
		return array(
		'album'=>array(self::BELONGS_TO, 'UserAlbum', 'album_id'),	
		'user'=>array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'album_id' => 'Album',
			'user_id' => 'User',
			'name' => 'Name',
			'upload_time' => 'Upload Time',
			'uri' => 'Uploaded File',
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
		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('upload_time',$this->upload_time);
		$criteria->compare('uri',$this->uri,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Photo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->user_id = Yii::app()->user->getId();
		

}}
