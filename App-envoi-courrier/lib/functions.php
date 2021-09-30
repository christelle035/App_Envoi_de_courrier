<?php 


    function check(){
        $i=0;
        if(!empty($_REQUEST)) {
             /*test donnée expéditeur*/
            if (empty(trim($_REQUEST["inputEmailExpediteur"]))) {
                // Variable inputEmailExpediteur est vide
                $GLOBALS['errorExp'] = "Veuillez renseigner le champ Expéditeur";
            }else {
                // le cas contraire
                $GLOBALS['valueExp'] = trim($_REQUEST["inputEmailExpediteur"]);
                $i++;
            }

            /*test donnée destinataire*/
            if (empty(trim($_REQUEST["inputEmailDestinataire"]))) {
                // Variable inputEmailExpediteur est vide
                $GLOBALS['errorDes'] = "Veuillez renseigner le champ Destinataire";
            }else {
                // le cas contraire
                $GLOBALS['valueDes'] = trim($_REQUEST["inputEmailDestinataire"]);
                $i++;
            }
            /*test donnée objet */
            if (empty(trim($_REQUEST["InputObjet"]))) {
                // Variable inputEmailExpediteur est vide
                $GLOBALS['errorObj'] = "Veuillez renseigner le champ Objet";
            }else {
                // le cas contraire
                $GLOBALS['valueObj'] = trim($_REQUEST["InputObjet"]);
                $i++;
            }

            /*test donnée message*/
            if (empty(trim($_REQUEST["InputMessage"]))) {
                // Variable inputEmailExpediteur est vide
                $GLOBALS['errorMg'] = "Veuillez renseigner le champ Message";
            }else {
                // le cas contraire
                $GLOBALS['valueMg'] = trim($_REQUEST["InputMessage"]);
                $i++;
            }
        }

        if($i==4){
            $GLOBALS['valid_data'] = true;
        }

    } // function check




?>




