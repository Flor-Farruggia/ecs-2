<?php
/**Declarar una clase “Usuario” con las siguientes propiedades: 
Id
NombreUsuario
Clave
Email
Nombre
Apellido
FechaNacimiento
NroDocumento
FechaAlta
 */
class dataUser {
    public $id;
    public $userName;
    public $key;
    public $email;
    public $name;
    public $lastName;
    public $birthDate;
    public $document;
    public $discharge;

    public function showDataUser (){
        echo 'Id: '.$this->id;
        echo '<br> User name: '.$this->userName;
        echo '<br> Key: '.$this->key;
        echo '<br> Email: '.$this->email;
        echo '<br> Name: '.$this->name; 
        echo '<br> Last Name: '.$this->lastName;
        echo '<br> Birthdate: '.$this->birthDate;
        echo '<br> Document: '.$this->document;
        echo '<br> Discharge date: '.$this->discharge;
    }
}