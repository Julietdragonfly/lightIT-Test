<?php

class model_main extends model {

    public function get_data(){
        $data = array();

        $data['menu']= 3126;
        $data['seo']['title']= "Главная";

        return ($data);

    }

}