<?php/** * correlativos.class.php *  **/class correlativos {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'correlativos';	public $id ;	public $tabla ;	public $folio ;	public $folior ;	public $ordendia ;	function constructor($id,$tabla,$folio,$folior,$ordendia,){	$this->id=$id;	$this->tabla=$tabla;	$this->folio=$folio;	$this->folior=$folior;	$this->ordendia=$ordendia;	}function $consulta="insertar(){INSERT INTO(id,tabla,folio,folior,ordendia,)	}}values(".$this->id.",".$this->tabla.",".$this->folio.",".$this->folior.",".$this->ordendia.",	public static $FIELD_NAME = array('id'=>'id','tabla'=>'tabla','folio'=>'folio','folior'=>'folior','ordendia'=>'ordendia');	protected $FIELD_MODIFIED = array();	protected $RESULT = array();	protected static $FOREIGN_KEYS = array(	public function set_id($pArg='0') {		IF ( $this->id !== $pArg){			$this->id=$pArg; $this->FIELD_MODIFIED['id']=1;		}	}	public function set_tabla($pArg='0') {		IF ( $this->tabla !== $pArg){			$this->tabla=$pArg; $this->FIELD_MODIFIED['tabla']=1;		}	}	public function set_folio($pArg='0') {		IF ( $this->folio !== $pArg){			$this->folio=$pArg; $this->FIELD_MODIFIED['folio']=1;		}	}	public function set_folior($pArg='0') {		IF ( $this->folior !== $pArg){			$this->folior=$pArg; $this->FIELD_MODIFIED['folior']=1;		}	}	public function set_ordendia($pArg='0') {		IF ( $this->ordendia !== $pArg){			$this->ordendia=$pArg; $this->FIELD_MODIFIED['ordendia']=1;		}	}	public function get_id() { return (integer) $this->id; }	public function get_tabla() { return (string) $this->tabla; }	public function get_folio() { return (integer) $this->folio; }	public function get_folior() { return (integer) $this->folior; }	public function get_ordendia() { return (integer) $this->ordendia; }}