<?php

/**
 * This is the model class for table "pelaksanaan_bimbingan_ta".
 *
 * The followings are the available columns in table 'pelaksanaan_bimbingan_ta':
 * @property integer $id_pelaksanaan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $rata_mhs_perdosen
 * @property string $rata_jum_pertemuan
 * @property string $ketersediaan_panduan
 * @property string $sosialisasi_pelaksanaan
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PelaksanaanBimbinganTa extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PelaksanaanBimbinganTa the static model class
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
		return 'pelaksanaan_bimbingan_ta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('rata_mhs_perdosen, rata_jum_pertemuan, sumber_data, lampiran', 'length', 'max'=>50),
			array('ketersediaan_panduan,waktu_penyelesaian,waktu_direncanakan', 'length', 'max'=>5),
			array('sosialisasi_pelaksanaan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('waktu_penyelesaian,waktu_direncanakan,th_akademik_search, nama_prodi_search,id_pelaksanaan, id_prodi, id_administrasi, rata_mhs_perdosen, rata_jum_pertemuan, ketersediaan_panduan, sosialisasi_pelaksanaan, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_pelaksanaan' => 'Id Pelaksanaan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'rata_mhs_perdosen' => 'Rata Mahasiswa Perdosen',
			'rata_jum_pertemuan' => 'Rata Jumlah Pertemuan',
			'ketersediaan_panduan' => 'Ketersediaan Panduan',
			'sosialisasi_pelaksanaan' => 'Sosialisasi Pelaksanaan',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
			'th_akademik_search'=>'Th akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'waktu_penyelesaian' => 'Rata - rata penyelesaian tugas akhir/skripsi (bulan)',
			'waktu_direncanakan' => 'Menurut kurikulum tugas akhir direncanakan (semester)',
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
		
		$criteria->compare('id_pelaksanaan',$this->id_pelaksanaan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('rata_mhs_perdosen',$this->rata_mhs_perdosen,true);
		$criteria->compare('rata_jum_pertemuan',$this->rata_jum_pertemuan,true);
		$criteria->compare('ketersediaan_panduan',$this->ketersediaan_panduan,true);
		$criteria->compare('sosialisasi_pelaksanaan',$this->sosialisasi_pelaksanaan,true);
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