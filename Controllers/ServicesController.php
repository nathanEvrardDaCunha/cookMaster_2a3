<?php

namespace Controllers;

//Changer de Model en fonction du besoin 
use Models\UsersModel;
use Source\Renderer;

class ServicesController
{
    //Fonction qui doit toujours être présente peu importe le controlleur (ne jamais supprimer)
    public function index(): Renderer
    {
        //Requete
        $userModel = new UsersModel();
        $users = $userModel->all(); 

        //Traitement (appel de fonction dans le controlleur)

        //Affichage
        return Renderer::make('home/services', compact('users'));
    }

    //Fonction autres
}