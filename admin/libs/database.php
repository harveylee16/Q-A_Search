<?php
require_once('config.php');
class database
{
    protected $pdo = NULL;
    protected $sql = '';
    protected $sta = NULL;

    public function database()
    {
        try
        {
            $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
            $this->pdo->query('set names utf8');
        }
        catch(PDOEXception $e)
        {
            die($e->getMessage());
        }
    }

    public function setQuery($sql)
    {
        $this->sql = $sql;
    }  

    public function execute($option=array())
    {
        $this->sta = $this->pdo->prepare($this->sql);
        if($option)
        {
            for($i=0;$i<count($option);$i++)
            {
                $this->sta->bindParam($i+1,$option[$i]);
            }
        }
        $this->sta->execute();
        return $this->sta;
		
    }

    public function loadAllRows($option = array())
    {
        if(!$option)
        {
            if(!$result = $this->execute())
            return false;
        }
        else
        {
            if(!$result = $this->execute($option))
            return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function loadRow($option = array())
    {
        if(!$option)
        {
            if(!$result = $this->execute())
            return false;
        }
        else
        {
            if(!$result = $this->execute($option))
            return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }

    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    
    public function getLastId() {
        return $this->pdo->lastInsertId();
    }
    
    public function disconnect() {
        $this->sta=NULL;
		$this->pdo = NULL;
    }
}
?>