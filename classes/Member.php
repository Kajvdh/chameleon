<?php

/**
 * Class: Member
 * 
 * Bevat alle informatie van een gebruikersaccount.
 * Het uitlezen en wegschrijven van de nodige gegevens gebeurt in deze klasse.
 *
 * @author Kaj Van der Hallen
 * @edit Stanley Kulik (DjSxX)
 */

class Member {
    private $_id;                   //Uniek ID
    private $_username;             //Gebruikersnaam
    private $_email;                //Emailadres
    private $_password;             //MD5 geëncrypteerd passwoord;
    private $_db;                   //PDO Database object
    private $_prefix;
    private $_chatboxes;
    private $_dBase;
    /**
     * Default constructor
     * @param PDO $db: PDO object dat gebruikt wordt om te verbinden op database
     */
    public function __construct($db) {
        $this->_dBase = $db;
        $this->_db = $db['db'];
        $this->_prefix = $db['prefix'];
    }
    
    /**
     * Getfuncties
     * @return type: Geeft opgevraagde informatie terug
     */
    public function getId() {
        return $this->_id;
    }
    public function getUsername() {
        return $this->_username;
    }
    public function getEmail() {
        return $this->_email;
    }
    public function getPassword() {
        return $this->_password;
    }
    
    /**
     * Setfuncties
     */
    public function setId($id) {
        $this->_id = $id;
    }
    public function setUsername($username) {
        $this->_username = $username;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setPassword($password) {
        $this->_password = $password;
    }
    
    
    /**
     * Gebruikersgegevens van het account ophalen
     * @param type $id: Het id van het gebruikersaccount dat opgehaald moet worden
     * @return boolean: `true` wanneer er een account met opgegeven ID bestaat
     */
    public function getById($id) {
        $stmp = $this->_db->prepare("SELECT * FROM `anope_db_NickCore` WHERE `id` = ?;");
        $stmp->execute(array($id));
        if ($stmp->rowCount() == "1") {
            $row = $stmp->fetch(PDO::FETCH_ASSOC);
            $this->_id = $row['id'];
            $this->_username = $row['display'];
            $this->_email = $row['email'];
            $this->_password = $row['pass'];
            return true;
        }
        else {
            return false;
        }
    }
    public function getByUsername($name) {
        $stmp = $this->_db->prepare("SELECT * FROM `anope_db_NickCore` WHERE `display` = ?;");
        $stmp->execute(array($name));
        if ($stmp->rowCount() == "1") {
            $row = $stmp->fetch(PDO::FETCH_ASSOC);
            $this->_id = $row['id'];
            $this->_username = $row['display'];
            $this->_email = $row['email'];
            $this->_password = $row['pass'];
            return true;
        }
        else {
            return false;
        }
    }
    
    
    public function getAllChatBoxes($id) {
        $table = $this->_prefix."chat";
        $stmp = $this->_db->prepare("SELECT `id` FROM `".$table."` WHERE `createdby` = ? AND obsolete='0' ORDER BY lastcalled DESC;");
        $stmp->execute(array($id));
        $results = $stmp->fetchAll(PDO::FETCH_ASSOC);
        $this->_chatboxes = array();
        
        foreach ($results as $i => $dataArr) {
            foreach($dataArr as $id) {
                $chatbox = new Chatbox($this->_dBase);
                $chatbox->getById($id);
                array_push($this->_chatboxes, $chatbox);
            }
        }
        return $this->_chatboxes;
    }
    
    public function getAllGodChatBoxes() {
        $table = $this->_prefix."chat";
        $stmp = $this->_db->query("SELECT `id` FROM `".$table."` WHERE obsolete='0' ORDER BY lastcalled DESC;");
        $results = $stmp->fetchAll(PDO::FETCH_ASSOC);
        $this->_chatboxes = array();
        foreach ($results as $i => $dataArr) {
            foreach($dataArr as $id) {
                $chatbox = new Chatbox($this->_dBase);
                $chatbox->getById($id);
                array_push($this->_chatboxes, $chatbox);
            }
        }
        return $this->_chatboxes;
    }
    
    /**
     * Controleren of de opgegeven gegevens voor deze gebruiker juist zijn
     * @return boolean: `true` als de opgegeven gegevens correct zijn
     */
    public function verify() {
        // $stmp = $this->_db->prepare("SELECT `id`,`email` FROM `anope_db_NickCore` WHERE `display`= ?;");
        // $stmp->execute(array($this->_username,$this->_password));
		$anope = new AnopeXMLRPC("http://5.135.191.70:8085/xmlrpc");
		$ret = $anope->CheckAuthentication("$this->_username", "$this->_password");
        
        if ($ret == $this->_username) {
			$stmp = $this->_db->prepare("SELECT * FROM `anope_db_NickCore` WHERE `display` = ?;");
			$stmp->execute(array($this->_username));
			if ($stmp->rowCount() == "1") {
				$row = $stmp->fetch(PDO::FETCH_ASSOC);
				$this->_id = $row['id'];
				// $this->_username = $row['display'];
				$this->_email = $row['email'];
				// $this->_password = $row['pass'];
				return $this->_id;
        }
        else {
            return false;
        }
    }
	else {
            return false;
        }
	}
    
    public function isGodUser() {
        $stmp = $this->_db->prepare("SELECT * FROM anope_db_NickCore LEFT JOIN anope_db_ChanAccess ON display=mask WHERE ci='#staff' AND display=?;");
        $stmp->execute(array($this->_username));
        if ($stmp->rowCount() >= "1") {
            $row = $stmp->fetch(PDO::FETCH_ASSOC);
            return true;
        }
        else {
            return false;
        }
    }
    
}

?>