<?php

namespace App\Models;

use CodeIgniter\Model;

class Sheepfoldmodel extends Model{
//initialisation for the table and her informations
protected $table = "sheepfold";

protected $primaryKey ="id";
//Fields form the table
protected $allowedFields = array("id", "name", "adress", "postCode", "town", "phoneNumber", "siret", "rcs", "numTVA", "capital", "isActive", "propertyOwnerName", "propertyOwnerFirstName");

//We give some french names for the fields 
protected $fieldsFullNames = array( "id" => "id",
                                 "name" => "Nom Bergerie",
                                 "adress" => "Adresse",
                                 "postCode" => "Code Postal",
                                 "town" => "Ville",
                                 "phoneNumber" => "Numéro de téléphone",
                                 "siret" => "Siret",
                                 "rcs" => "RCS",
                                 "numTVA" => "Numéro de TVA intracommunautaire",
                                 "capital" => "Capital",
                                 "isActive" => "Actif",
                                 "propertyOwnerName" => "Nom du propriétaire",
                                 "propertyOwnerFirstName" => "Prénom du propriétaire"
                                );

//The fields's types 
protected $fieldsTypes = array("id" => "number",
                                "name" => "text",
                                "adress" => "text",
                                "postCode" => "text",
                                "town" => "text",
                                "phoneNumber" => "text",
                                "siret" => "text",
                                "rcs" => "text",
                                "numTVA" => "text",
                                "capital" => "number",
                                "isActive" => "radio",
                                "propertyOwnerName" => "text",
                                "propertyOwnerFirstName" => "text");

}
