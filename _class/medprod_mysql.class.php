<?php/** * medprod_mysql.class.php *  **/class medprod_mysql {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'medprod_mysql';	public $id ;	public $cod_prod ;	public $nom_prod ;	public $presentacion ;	function constructor($id,$cod_prod,$nom_prod,$presentacion,){	$this->id=$id;	$this->cod_prod=$cod_prod;	$this->nom_prod=$nom_prod;	$this->presentacion=$presentacion;	}function $consulta="insertar(){INSERT INTO(id,cod_prod,nom_prod,presentacion,)	}}values(".$this->id.",".$this->cod_prod.",".$this->nom_prod.",".$this->presentacion.",	public static $FIELD_NAME = array('id'=>'id','cod_prod'=>'cod_prod','nom_prod'=>'nom_prod','presentacion'=>'presentacion');	protected $FIELD_MODIFIED = array();	protected $RESULT = array();	protected static $FOREIGN_KEYS = array(	public function set_id($pArg='0') {		IF ( $this->id !== $pArg){			$this->id=$pArg; $this->FIELD_MODIFIED['id']=1;		}	}	public function set_cod_prod($pArg='0') {		IF ( $this->cod_prod !== $pArg){			$this->cod_prod=$pArg; $this->FIELD_MODIFIED['cod_prod']=1;		}	}	public function set_nom_prod($pArg='0') {		IF ( $this->nom_prod !== $pArg){			$this->nom_prod=$pArg; $this->FIELD_MODIFIED['nom_prod']=1;		}	}	public function set_presentacion($pArg='0') {		IF ( $this->presentacion !== $pArg){			$this->presentacion=$pArg; $this->FIELD_MODIFIED['presentacion']=1;		}	}	public function get_id() { return (integer) $this->id; }	public function get_cod_prod() { return (integer) $this->cod_prod; }	public function get_nom_prod() { return (string) $this->nom_prod; }	public function get_presentacion() { return (string) $this->presentacion; }}