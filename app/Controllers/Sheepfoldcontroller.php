<?php

namespace App\Controllers;


class Sheepfoldcontroller extends Objectcontroller{
    
    public $model;
    public string $title;
    public string $table;

    public function __construct()
    {
        $this->title = "Bergerie";
        $this->model = model("SheepfoldModel");
        $this->tableElement = $this->model->table;
    }

    public function index()
    {
        //Traitement des données
        $dataSent = $this->request->getPost();
        if (!empty($dataSent)) {
            if ($this->validateFormData() && $this->updateFromFormData($dataSent)) {
                session()->setFlashdata('success', "La bergerie a bien été ajoutée à la base.");
            } else {
                session()->setFlashdata('error', "La bergerie n'a pas pu être ajoutée à la base.");
            }
        }

        //Affichage
        echo $this->getListHtml();
    }


}