<?php

/**
 * This is the model class for table "penggunaan_dana".
 *
 * The followings are the available columns in table 'penggunaan_dana':
 * @property integer $id_penggunaan_dana
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $jenis_penggunaan
 * @property string $persen_danaTS2
 * @property string $persen_danaTS1
 * @property string $persen_danaTS
 * @property string $F_pendapat_pimpinan_Fak
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PenggunaanDana extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PenggunaanDana the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penggunaan_dana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, jenis_penggunaan, persen_danaTS2, persen_danaTS1, persen_danaTS', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data,persen_danaTS2, persen_danaTS1, persen_danaTS', 'numerical', 'integerOnly'=>true),
			array('persen_danaTS2, persen_danaTS1, persen_danaTS', 'length', 'max'=>3,'message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh diisi lebih dari 3 karakter</span></i>'),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_penggunaan_dana, id_prodi, id_administrasi, jenis_penggunaan, persen_danaTS2, persen_danaTS1, persen_danaTS, F_pendapat_pimpinan_Fak, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		// tambahan
		return array(
			'relasi_administrasi'=>array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_prodi'=>array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_penggunaan_dana' => 'Id Penggunaan Dana',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'jenis_penggunaan' => 'Jenis Penggunaan',
			'persen_danaTS2' => 'Persen Dana TS 2 (%)',
			'persen_danaTS1' => 'Persen Dana TS 1 (%)',
			'persen_danaTS' => 'Persen Dana TS (%)',
			'F_pendapat_pimpinan_Fak' => 'Pendapat Pimpinan Fakultas',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_penggunaan_dana',$this->id_penggunaan_dana);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('jenis_penggunaan',$this->jenis_penggunaan,true);
		$criteria->compare('persen_danaTS2',$this->persen_danaTS2,true);
		$criteria->compare('persen_danaTS1',$this->persen_danaTS1,true);
		$criteria->compare('persen_danaTS',$this->persen_danaTS,true);
		$criteria->compare('F_pendapat_pimpinan_Fak',$this->F_pendapat_pimpinan_Fak,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);
		// tambahan
		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		// end tambahan
		// tambahan
		if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		// end tambahan
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}