
<?php

            require_once("classes/FormValidation.php");
            $title='Contact Page';    
            
            //create object 
            $form =new FormValidation();
            
            ob_start();

            //check if the submit button was clicked
            if (isset($_POST["btn_submit"])) {

                //validate name was supplied
                //validate name is in the correct format
                $firstNameMessage = $form->CheckEmpty("firstName").''.$form->CheckName("firstName");
                $lastNameMessage = $form->CheckEmpty("lastName").''.$form->CheckName("lastName");
                $emailMessage = $form-> CheckEmpty("email").''.$form-> CheckEmail("email");          
                
                if ($form->valid == true) {
                    //redirect to the thanks page
                    header("Location:confirmation.php");
                }else {
                    //display form with errors
                    //print_r($firstNameMessage.'<br>'.$lastNameMessage.'<br>'.$emailMessage);
                    include "templates/contact.html.php";
                }
            }else {
                //display form without error
                $form->valid = true;
                $firstNameMessage ="";
                $lastNameMessage = "";
                $emailMessage = "";
                include "templates/contact.html.php";
            }



            // include "templates/contact.html.php";
            $output = ob_get_clean();
            include "templates/layout.html.php";
?>






