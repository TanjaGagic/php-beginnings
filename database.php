<?php

class Database {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname;
    private $dblink;
    private $result;
    private $records;
    private $affected;

    function __construct($par_dbname) {
            $this->dbname = $par_dbname;
            $this->Connect();

    }

    function Connect() {

        $this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if($this->dblink->connect_errno){
            printf("Konekcija neuspesna: " + %s\n, $this->dblink->connect_error);
            exit();
        }

        $this->dblink->set_charset("utf8");
    }

    function ExecuteQuery($query){ //ako se query izvrsi, if prolazi
        if($this->result = $this->dblink->query($query)) {
            if (isset($this->result->num_rows))
        }

    }

}

?>