<?php
namespace App\controller\pages;

use \App\Utils\View;
use \App\Model\entity\Organization;

class Home extends Page {

        //@return string
    public static function getHome(){
        $obOrganization = new Organization;

        $content = View::render('pages/home',[

            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        return parent::getPage('WDEV - Canal - HOME',$content);
    }
}

