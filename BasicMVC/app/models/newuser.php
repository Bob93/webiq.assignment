<?php

class ContactModel extends Model
{
    private $_name;
    private $_email;
     
    public function setName($name)
    {
        $this->_name = $name;
    }
     
    public function setEmail($email)
    {
        $this->_email = $email;
    }
     
    public function store()
    {
        $sql = "INSERT INTO mvccontacts (name, email) VALUES (?, ?)";
         
        $data = array(
            $this->_name,
            $this->_email
        );
         
        $sth = $this->_db->prepare($sql);
        return $sth->execute($data);
    }
}

?>