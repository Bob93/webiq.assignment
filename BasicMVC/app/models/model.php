<?php
//Klas om alles vanaf de database op te halen naar het framework
class Model 
{
    protected $dbe;
    protected $_sql;
     
    public function __construct()
    {
        $this->dbe = Db::init();
    }
     
	// Set de sql query
    protected function _setSql($sql)
    {
        $this->_sql = $sql;
    }
     
	// Get all the rows of the database
    public function getAll($data = null)
    {
        if (!$this->_sql)
        {
            throw new Exception("No SQL query!");
        }
         
        $sth = $this->db->prepare($this->_sql);
        $sth->execute($data);
        return $sth->fetchAll();
    }
     
	// Get een row count van de database
    public function getRow($data = null)
    {
        if (!$this->_sql)
        {
            throw new Exception("No SQL query!");
        }
         
        $sth = $this->dbe->prepare($this->_sql);
        $sth->execute($data);
        return $sth->fetch();
    }
}

?>