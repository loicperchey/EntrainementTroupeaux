<?php

namespace App\Controllers;

use App\Models\SheepfoldModel;
use CodeIgniter\Model;
use Config\View;

class Objectcontroller extends BaseController{

    //fonction d'affichage 
    public function getListHtml(): string
    {
        $table = $this->tableElement;
        $list = $this->model->findAll();
        $pageTitle = $this->title;
        $fields = $this->model->allowedFields;
        $primaryKey = $this->model->primaryKey; 
        $data = compact('list', 'pageTitle', 'fields', 'table', 'primaryKey');
        return view('object/listview', $data);
    }

    public function validateFormData(): bool
    {   
        return true;
    }

    public function updateFromFormData($data) : bool 
    {
        return $this->model->save($data);
    }

    //update the data (based on allowedFields) by the id
    public function getUpdateFormHtml($id){
        $fields = $this->model->allowedFields;
        $data = compact('fields');
        return $this->model->update($id, $data);
    }

    /**
     * Shows creation (if id < 0) or update form (if id > 0), createItem and updateItem shows this modification and get a type (for the id, it's a number for escape some problems, like a drop database by some pranksters)
     *
     * @param integer $id
     * @return string
     */
    public function showForm(int $id = 0) : string{
        $itemData = array();
        if($id > 0){
            $itemData = $this->model->find($id);
        }
        $primaryKey = $this->model->primaryKey;
        $fieldsFullName = $this->model->fieldsFullNames;
        $fieldsTypes = $this->model->fieldsTypes;

        $table = $this->tableElement;
        $data = compact('fieldsFullName', 'itemData', 'id', 'table', 'primaryKey', 'fieldsTypes');
        return view('object/formview', $data);
    }

    public function createItem(){
        echo $this->showForm(0);
    }

    public function updateItem(int $id){
        echo $this->showForm($id);
    }

//The function delete comes from the Model, we use this here for a generical delete (selection by the id)
    public function deleteItem(int $id){
        if($this->model->delete($id)){
            session()->setFlashdata('success', "L'enregistrement a bien été supprimé.");
        } else {            
            session()->setFlashdata('error', "L'enregistrement n'a pas pu être supprimé. Merci de contacter votre administrateur");
        }
        return redirect()->to($this->tableElement.'controller');
    }

}