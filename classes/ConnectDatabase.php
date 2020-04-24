<?php

    class ConnectDatabase
    {
        //proprties
        private $_dsn;
        private $_username;
        private $_password;
        private $_pdo;

    

        //set up database connection details
        //[__construct]: this is befor nameI cange name to name class [ConnectDatabase]
        public function __construct($dsn,$username,$password)
        {
            $this->_dsn = $dsn;
            $this->_username = $username;
            $this->_password = $password;
        }

        //connect to database
        public function Connect()
        {
            try {
                $this->_pdo = new PDO($this->_dsn,$this->_username,$this->_password);
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                // echo " <p>connecting .....:</p>";
                // print_r("connecting .....:)");

            } catch (PDOException $e) {
                // echo "<p>not connecting .....:)</p>";
                // print_r("not connecting .....:)");
                die("Connection failed: " . $e->getMessage());
                
            }
            return $this->_pdo;
        }

        //disconnect to database
        public function DisConnect()
        {
          $this->$_pdo = "";
        }

        //execute SQL query returning back rows
        public function ExecuteSQL($query)
        {
            try {
                $query->execute();
                $rows = $query->fetchAll();
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            return $rows;
        }
        //execute SQL query returning a single value
        public function ExecuteSQLReturnOneValue($query)
        {
            try {
                $query->execute();
                $oneRow = $query->fetchColumn();
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            return $rows;
        }









    }//close class
?>