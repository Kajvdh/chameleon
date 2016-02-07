<?php

/**
 * Class: Database
 * 
 * Deze klasse zorgt voor het opzetten van de verbinnding met de MySQL server
 *
 * @author Kaj Van der Hallen
 */

class Database {
    private $_db;   //PDO Database object van de verbinding met de database
    private $_host;
    private $_user;
    private $_pass;
    public $_name;
    private $_prefix;
    
    /**
     * Default constructor
     */
    public function __construct($config, $type="default") {
        if ($type == "anope") {
            $mysqlCredentials = $config->getMysqlAnopeCredentials();            
        }
        else {
            $mysqlCredentials = $config->getMysqlCredentials();
        }
        $this->_host = $mysqlCredentials['host'];
        $this->_user = $mysqlCredentials['user'];
        $this->_pass = $mysqlCredentials['pass'];
        $this->_name = $mysqlCredentials['db'];
        $this->_prefix = $mysqlCredentials['prefix'];
        $this->createDbConnection();
    }
    
    /**
     * PDO object ophalen
     */
    public function getConnection() {
        return array(
            'db' => $this->_db,
            'prefix' => $this->_prefix
        );
    }
    
    public function getPrefix() {
        return $this->_prefix;
    }
    
    
    /**
     * Connectie met de database opzetten
     * @return boolean: `true` als de connectie is opgezet
     */
    private function createDbConnection() {
        if ($this->_db) {
            return true;
        }
        else {
            /**
             * Benodigde informatie van de MySQL server ophalen uit de Config klasse
             */            
            try {
                $db = new PDO('mysql:host='.$this->_host.';dbname='.$this->_name.';charset=utf8', $this->_user, $this->_pass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch(PDOException $ex) { 
                die($ex);
                return false;
            }
            $this->_db = $db;
            return true;
        }
    }
}

?>