<?php

class ContactController extends Controller
{
    public function index()
    {
        $this->_view->set('title', 'Hier kan je een gebruiker toevoegen aan de database.');
        return $this->_view->output();
    }
	
	public function save()
{
    if (!isset($_POST['contactFormSubmit']))
    {
        header('Location: /contact/index');
    }
     
    $errors = array();
    $check = true;
         
    $firstName = isset($_POST['_name']) ? trim($_POST['_name']) : NULL;
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
         
    if (empty($email))
    {
        $check = false;
        array_push($errors, "E-mail is required!");
    }
    else if (!filter_var( $email, FILTER_VALIDATE_EMAIL ))
    {
        $check = false;
        array_push($errors, "Invalid E-mail!");
    }
 
    if (!$check)
    {
        $this->_setView('index');
        $this->_view->set('title', 'Invalid form data!');
        $this->_view->set('errors', $errors);
        $this->_view->set('formData', $_POST);
        return $this->_view->output();
    }
         
    try {
                 
        $contact = new ContactModel();
        $contact->setName($name);
        $contact->setEmail($email);
        $contact->store();
                 
        $this->_setView('success');
        $this->_view->set('title', 'Store success!');
                 
        $data = array(
            'name' => $name,
            'email' => $email
        );
                 
        $this->_view->set('userData', $data);
                 
    } catch (Exception $e) {
        $this->_setView('index');
        $this->_view->set('title', 'There was an error saving the data!');
        $this->_view->set('formData', $_POST);
        $this->_view->set('saveError', $e->getMessage());
    }
 
    return $this->_view->output();
}
}

?>