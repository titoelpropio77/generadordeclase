<?php/** * empleados_mysql.class.php * EMPLEADOS **/class empleados_mysql {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'empleados_mysql';	/**	 * @var COD_EMPL	 */	public $COD_EMPL ;	/**	 * @var NOM_EMPL	 */	public $NOM_EMPL ;	/**	 * @var DIR_EMPL	 */	public $DIR_EMPL ;	/**	 * @var CI_EMPL	 */	public $CI_EMPL ;	/**	 * @var CARGO	 */	public $CARGO ;	/**	 * @var SUELD_EMPL	 */	public $SUELD_EMPL ;	/**	 * @var ESTADO	 */	public $ESTADO ;	/**	 * @var PORCENTAJE	 */	public $PORCENTAJE ;	public $ID ;	function constructor($COD_EMPL,$NOM_EMPL,$DIR_EMPL,$CI_EMPL,$CARGO,$SUELD_EMPL,$ESTADO,$PORCENTAJE,$ID,){	$this->COD_EMPL=$COD_EMPL;	$this->NOM_EMPL=$NOM_EMPL;	$this->DIR_EMPL=$DIR_EMPL;	$this->CI_EMPL=$CI_EMPL;	$this->CARGO=$CARGO;	$this->SUELD_EMPL=$SUELD_EMPL;	$this->ESTADO=$ESTADO;	$this->PORCENTAJE=$PORCENTAJE;	$this->ID=$ID;	}function $consulta="insertar(){INSERT INTO(COD_EMPL,NOM_EMPL,DIR_EMPL,CI_EMPL,CARGO,SUELD_EMPL,ESTADO,PORCENTAJE,ID,)	}}values(".$this->COD_EMPL.",".$this->NOM_EMPL.",".$this->DIR_EMPL.",".$this->CI_EMPL.",".$this->CARGO.",".$this->SUELD_EMPL.",".$this->ESTADO.",".$this->PORCENTAJE.",".$this->ID.",	public static $FIELD_NAME = array('COD_EMPL'=>'COD_EMPL','NOM_EMPL'=>'NOM_EMPL','DIR_EMPL'=>'DIR_EMPL','CI_EMPL'=>'CI_EMPL','CARGO'=>'CARGO','SUELD_EMPL'=>'SUELD_EMPL','ESTADO'=>'ESTADO','PORCENTAJE'=>'PORCENTAJE','ID'=>'ID');	protected $FIELD_MODIFIED = array();	protected $RESULT = array();	protected static $FOREIGN_KEYS = array(	public function set_COD_EMPL($pArg='0') {		IF ( $this->COD_EMPL !== $pArg){			$this->COD_EMPL=$pArg; $this->FIELD_MODIFIED['COD_EMPL']=1;		}	}	public function set_NOM_EMPL($pArg='0') {		IF ( $this->NOM_EMPL !== $pArg){			$this->NOM_EMPL=$pArg; $this->FIELD_MODIFIED['NOM_EMPL']=1;		}	}	public function set_DIR_EMPL($pArg='0') {		IF ( $this->DIR_EMPL !== $pArg){			$this->DIR_EMPL=$pArg; $this->FIELD_MODIFIED['DIR_EMPL']=1;		}	}	public function set_CI_EMPL($pArg='0') {		IF ( $this->CI_EMPL !== $pArg){			$this->CI_EMPL=$pArg; $this->FIELD_MODIFIED['CI_EMPL']=1;		}	}	public function set_CARGO($pArg='0') {		IF ( $this->CARGO !== $pArg){			$this->CARGO=$pArg; $this->FIELD_MODIFIED['CARGO']=1;		}	}	public function set_SUELD_EMPL($pArg='0') {		IF ( $this->SUELD_EMPL !== $pArg){			$this->SUELD_EMPL=$pArg; $this->FIELD_MODIFIED['SUELD_EMPL']=1;		}	}	public function set_ESTADO($pArg='0') {		IF ( $this->ESTADO !== $pArg){			$this->ESTADO=$pArg; $this->FIELD_MODIFIED['ESTADO']=1;		}	}	public function set_PORCENTAJE($pArg='0') {		IF ( $this->PORCENTAJE !== $pArg){			$this->PORCENTAJE=$pArg; $this->FIELD_MODIFIED['PORCENTAJE']=1;		}	}	public function set_ID($pArg='0') {		IF ( $this->ID !== $pArg){			$this->ID=$pArg; $this->FIELD_MODIFIED['ID']=1;		}	}	public function get_COD_EMPL() { return (string) $this->COD_EMPL; }	public function get_NOM_EMPL() { return (string) $this->NOM_EMPL; }	public function get_DIR_EMPL() { return (string) $this->DIR_EMPL; }	public function get_CI_EMPL() { return (string) $this->CI_EMPL; }	public function get_CARGO() { return (string) $this->CARGO; }	public function get_SUELD_EMPL() { return (string) $this->SUELD_EMPL; }	public function get_ESTADO() { return (string) $this->ESTADO; }	public function get_PORCENTAJE() { return (integer) $this->PORCENTAJE; }	public function get_ID() { return (integer) $this->ID; }}