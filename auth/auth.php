<?php

//start session
session_start();

class logmein {

    //database setup
 
    var $hostname_logon = 'localhost';      //Database server LOCATION
    var $database_logon = 'dairy';       //Database NAME
    var $username_logon = 'root';       //Database USERNAME
    var $password_logon = '';       //Database PASSWORD
    //table fields
    var $user_table = 'employees';          //Users table name
    var $user_column = 'e_mail';     //USERNAME column (value MUST be valid email)
    var $pass_column = 'e_pass';      //PASSWORD column
    var $user_level = 'e_role';      //(optional) userlevel column
    var $user_name = 'e_name';
    //encryption
    var $encrypt = false;       //set to true to use md5 encryption for the password
    var $connection = NULL;

    //connect to database

    function dbconnect() {
        $connections = mysqli_connect($this->hostname_logon, $this->username_logon, $this->password_logon) or die('Unable to connect to the database');
        $this->connection= $connections;
        mysqli_select_db($connections, $this->database_logon) or die('Unable to select database!');
        return;
    }

    //login function
    function login($table, $username, $password) {
        //conect to DB
        $this->dbconnect();
        //make sure table name is set
        if ($this->user_table == "") {
            $this->user_table = $table;
        }
        //check if encryption is used
        if ($this->encrypt == true) {
            $password = md5($password);
        }
        //execute login via query function that prevents MySQL injections
        $result = $this->qry("SELECT * FROM " . $this->user_table . " WHERE " . $this->user_column . "='?' AND " . $this->pass_column . " = '?';", $username, $password);
        $row = mysqli_fetch_assoc($result);
        if ($row != "Error") {
            if ($row[$this->user_column] != "" && $row[$this->pass_column] != "") {
                //register sessions
                //you can add additional sessions here if needed
                $_SESSION['loggedin'] = $row[$this->pass_column];
                $_SESSION['full_name'] = $row['e_name'];
                //userlevel session is optional. Use it if you have different user levels
                $_SESSION['userlevel'] = $row[$this->user_level];
                $_SESSION['username'] = $row[$this->user_name];
                return true;
            } else {
                session_destroy();
                return false;
            }
        } else {
            return false;
        }
    }

    //prevent injection
    function qry($query) {
        $this->dbconnect();
        $args = func_get_args();
        $query = array_shift($args);
        $query = str_replace("?", "%s", $query);
        $args = array_map(array($this->connection,'real_escape_string'), $args);
        array_unshift($args, $query);
        $query = call_user_func_array('sprintf', $args);
        $result = mysqli_query($this->connection,$query) or die(mysqli_error($conn));
        if ($result) {
            return $result;
        } else {
            $error = "Error";
            return $result;
        }
    }

    //logout function
    function logout() {
        session_destroy();
        return;
    }

    //check if loggedin
    function logincheck($logincode, $user_table, $pass_column, $user_column) {
        //conect to DB
        $this->dbconnect();
        //make sure password column and table are set
        if ($this->pass_column == "") {
            $this->pass_column = $pass_column;
        }
        if ($this->user_column == "") {
            $this->user_column = $user_column;
        }
        if ($this->user_table == "") {
            $this->user_table = $user_table;
        }
        //exectue query
        $result = $this->qry("SELECT * FROM " . $this->user_table . " WHERE " . $this->pass_column . " = '?';", $logincode);
        $rownum = mysqli_num_rows($result);
        //return true if logged in and false if not
        if ($result != "Error") {
            if ($rownum > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

   

            

  

    //login form
    function loginform($formname, $formclass, $formaction) {
        //conect to DB
        $this->dbconnect();
                include 'login_form.php';
            }

            

            //function to install logon table
            function cratetable($tablename) {
                //conect to DB
                $this->dbconnect();
                $qry = "CREATE TABLE IF NOT EXISTS " . $tablename . " (
              userid int(11) NOT NULL auto_increment,
              useremail varchar(50) NOT NULL default '',
              password varchar(50) NOT NULL default '',
              userlevel int(11) NOT NULL default '0',
              PRIMARY KEY  (userid)
            )";
                $result = mysqli_query($conn,$qry) or die(mysqli_error($conn));
                return;
            }

        }
?>