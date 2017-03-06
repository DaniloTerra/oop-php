<?php

interface Author
{
    public function setAuthorPrivileges($array);

    public function getAuthorPrivileges();
}

interface Editor
{
    public function setEditorPrivileges($array);

    public function getEditorPrivileges();
}

class User
{
    protected $username;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

class AuthorEditor extends User implements Author, Editor
{
    private $authorPrivilegesArray ;
    private $editorPrivilegesArray;

    public function setAuthorPrivileges($array)
    {
        $this->authorPrivilegesArray = $array;
    }

    public function getAuthorPrivileges()
    {
        return $this->authorPrivilegesArray;
    }

    public function setEditorPrivileges($array)
    {
        $this->editorPrivilegesArray= $array;
    }

    public function getEditorPrivileges()
    {
        return $this->editorPrivilegesArray;
    }
}

$user1 = new AuthorEditor();
$user1->setUsername('Danilo Terra');
$user1->setAuthorPrivileges(['Write book', 'Add punctuation']);
$user1->setEditorPrivileges(['Edit book', 'Edit punctuation']);

$privilegies = array_merge(
    $user1->getAuthorPrivileges(),
    $user1->getEditorPrivileges()
);

echo 'My name is ' . $user1->getUsername() .
' And I have the following privilegies: ';

foreach ($privilegies as $key => $value) {
    echo "{$value}, ";
}



// interface Car
// {
//     public function setModel($model);
//     public function getModel();
// }

// interface Vehicle
// {
//     public function setHasWheels($bool);
//     public function getHasWheels();
// }

// class SportCar implements Car, Vehicle
// {
//     private $model;
//     private $hasWheels;

//     public function setModel($model)
//     {
//         $this->model = $model;
//     }

//     public function getModel()
//     {
//         return $this->model;
//     }

//     public function setHasWheels($bool)
//     {
//         $this->hasWheels = $bool;
//     }

//     public function getHasWheels()
//     {
//         return $this->hasWheels;
//     }
// }


// $ferrari = new SportCar();
// $ferrari->setModel('Ferrari Enzo');
// $ferrari->setHasWheels(true);

// echo
// 'The car model is ' . $ferrari->getModel() . 
// 'It has wheels? ' . $ferrari->getHasWheels();