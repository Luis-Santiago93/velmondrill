<?php

error_reporting(E_ALL);
error_reporting(0);
function Connection(){
    $obj= new DBObject("localhost","velmond1_2018","velmond1_user","");
    $obj->execute("set names utf8",array());
    return($obj);
}

class DBObject {

    private $conn;
    private $rs;
    private $mode;
    private $debug=false;

 public $lastException;

    function GetConn(){

        return $this->conn;
    }

    function __construct($host,$database,$usuario,$password=""){
        try{
            $this->conn = new PDO("mysql:host={$host};dbname={$database}", $usuario, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->fetchObject();
        }
        catch(PDOException $e){
            echo "ERROR: " . $e->getMessage();
        }
    }

    function debug($d=true){
        $this->debug=$d;
    }
    function showDebug($sql,$e){


$this->lastException=  $e->getCode()."-".$e->getMessage();

        switch($e->getCode()){
            case 23000:
                $_SESSION["msg"]="Lo sentimos la información está duplicada o no existe.";
                break;
            default:
                $_SESSION["msg"]= "";
        }
        if($this->debug) echo "<p>$sql<br><font color=red>" . $e->getMessage() . "</font><p>";
    }

    function fetchObject(){
        $this->mode = PDO::FETCH_OBJ;
    }

    function fetchArray(){
        $this->mode = PDO::FETCH_BOTH;
    }

    //function beginTransaction(){
    // $conn->beginTransaction();
    //}
    // function Commit(){
    //    $this->mode = PDO::commit();
    //}

    // function rollBack (){
    //  $this->mode = PDO::rollBack();
    //}
	function query($sql,$params= array(),$mode="OBJECT")
	{
        //if($mode=="ARRAY") $this->fetchObject(); else $this->fetchObject();
	    try {
            $this->rs = $this->conn->prepare($sql);
            $this->rs->execute($params);
            $this->rs->setFetchMode($this->mode);
            return($this->rs);
        }
        catch(Exception $e) {
            $this->showDebug($sql,$e);

            return null;
        }
	}

    function count() {
        return($this->rs->rowCount());
    }
	function record($sql,$params= array())
	{
	    $this->fetchObject();
	    $this->query($sql,$params);
    	return ($this->next());
	}
	function recordSet($sql,$params)
	{
	    return ($this->query($sql,$params));
	}
	function recordArray($sql,$params)
	{
	    $this->fetchArray();
	    $this->query($sql,$params);
    	return ($this->next());
	}
	function field($sql,$params)
	{
    	$row = $this->recordArray($sql,$params);
    	return ($row[0]);
	}
	function execute($sql,$params)
	{
	    try {
            $this->rs = $this->conn->prepare($sql);
            $this->rs->execute($params);

            return true;
           
        }
        catch(Exception $e) {
            $this->showDebug($sql,$e);

            return false;
        }
	}

    public function last_row_count() {
        return $this->query("SELECT FOUND_ROWS()")->fetchColumn();
    }
    function ExecuteNonQuery($sql,$params)
	{
	    try {
            $this->query($sql,$params);

            $x= ($this->rs->rowCount());
            
            return $x;
        }
        catch(Exception $e) {
            $this->showDebug($sql,$e);

            return -1;
        }
	}

	function next()
	{
		return($this->rs->fetch());
	}

    function saveRecord($table,$keyfield) {
        $id = DecryptID($_POST["fldid"]);
        if($id) $sql = "UPDATE {$table} SET "; else $sql = "INSERT INTO {$table} SET ";

        $fields="";
        foreach($_POST as $key=>$value){
            $key = substr($key,3); // quitar las letras fld
            if($key<>"id") {
                // quitar comillas y apostrofos
                $value = str_replace("'","",$value);
                $value = str_replace('"',"",$value);
                $fields .= ", " . $key . "='" . $value . "'";
            }
        }
        $fields = substr($fields,2); // quitar la primera coma
        $sql .= $fields;
        if($id) $sql .= " WHERE {$keyfield}='{$id}'";
        $this->execute($sql,array());
    }

    function deleteRecord($table,$filter) {
        $sql = "DELETE FROM {$table} WHERE {$filter} ";
        $this->execute($sql,array());
    }

}

?>