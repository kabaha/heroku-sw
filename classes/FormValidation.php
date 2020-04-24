<?php
    class FormValidation
    {
        //properties
        public $valid = true;
        private $_errorFields = [];

        //method
        //check for empty fields
        
        public function CheckEmpty($fieldName)
        {
           $message = "";
           //if the field is empty return a message
           if (!isset($_POST[$fieldName]) || empty($_POST[$fieldName]))
            {
                //if the field is missing and it to the error array
                $this->_errorFields[] = $fieldName;
                //set the form to invalid
                $this->valid =false;
                $message = "required field ...!";
            }
            return $message;
         }


        //check for a valid email
        public function CheckEmail($fieldName)
        {
           $message = "";
           //check the field is in a valid email format
           if (isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) {
                if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {
                    //if the field is not in the correct format and it to the error array
                    $this->_errorFields[] = $fieldName;

                    //set the form to invalid
                    $this->valid = false;
                    $message = "Please enter a valid email";
                }
                return $message;
           }
        }


        //check name is using letters, space, apostrophe and hyphens only
        public function CheckName($fieldName)
        {
            $message = "";
            if (isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) {
               if (!preg_match("/^[a-zA-Z \-']*$/",$_POST[$fieldName])) {
                  //if the field is not in the correct format and it to the error array
                  $this->_errorFields[] = $fieldName;

                  //set the form to invalid
                  $this->valid = false;
                  $message= "Only letters, apostrophe and hyphens and white space allowed";
               }
               return $message;
            }
        }


        //set css class for missing fields
        public function SetErrorClass($fieldName)
        {
           if (in_array($fieldName,$this->_errorFields)) {
               return ' class="error"';
           }
        }


        //set css class for missing fields
        public function SetValue($fieldName)
        {
           if (isset($_POST[$fieldName])) {
               return htmlentities($_POST[$fieldName]);
           }
        }















    }//close class
    



?>