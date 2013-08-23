<?php
	//*********************************************************
	// Auteur : Girardet Bastien
	// Date   : 20.03.2012 
	// But    : Page d'entree du site de gestion des actions
	//  		pour les eleves de la section informatique
	//*********************************************************
	// Modifications: -
	// Date   : -
	// Auteur : -
	// Raison : -
	//*********************************************************

	// division texte central

	class ConnectDB {
	
		//Déclaration des attributs
		private $objConnexion = null;
		
		//Déclaration des constantes
		const STR_HOST = "localhost";
		const STR_USER = "root";
		const STR_PWD = "bastien147";
		const STR_DB = "bd_skeartleak";
		/*
		//Déclaration des constantes
		const STR_HOST = "sql.mtxserv.fr";
		const STR_USER = "w_31868";
		const STR_PWD = "billou12";
		const STR_DB = "31868_sql";*/

		//*********************************************************
		// Nom   : __construct
		// But : Constructeur, ouve la connexion à la DB
		// Param. : -
		//*********************************************************
		public function __construct()
		{
			//Appel de la fonction de connexion
			$this->dbConnect();
		}
		
		//*********************************************************
		// Nom   : getAllFilms
		// But : Obtient tout les evenements
		// Retour : Array
		// Param. : -
		//*********************************************************
		public function getAllFilms()
		{
		$strRequest = "SELECT * FROM videos";
		$rsResult = $this->objConnexion->query($strRequest);
		$rsStudentArray = $rsResult->fetchAll();
		return $rsStudentArray;
		}
		
		//*********************************************************
		// Nom   : getOneType
		// But : Obtient un type spécifique
		// Retour : Array
		// Param. : -
		//*********************************************************
		public function getOneType($strIdType)
		{
			$strRequest = "SELECT * FROM videos WHERE id='".$strIdType."'";
			$rsResult = $this->objConnexion->query($strRequest);
			$rsAllType = $rsResult->fetchAll();
			return $rsAllType;
		}
		
		//*********************************************************
		// Nom   : DeleteField
		// But : Supprime l'action désirée
		// Retour : -
		// Param. : -
		//*********************************************************
		public function DeleteField($strIdEvent)
		{
		$strRequest = "DELETE FROM videos WHERE id='".$strIdEvent."'";
		$rsResult = $this->objConnexion->query($strRequest);
		}	
		
		//*********************************************************
		// Nom   : AddFieldEvent
		// But : Ajoute un champs à la BDD
		// Retour : ArrayAddFieldType
		// Param. : -
		//*********************************************************
		public function AddFieldFilms($strName,$blnType,$intRate)
		{
		$SQLRequest ="INSERT INTO `bd_skeartleak`.`videos` (`id`, `name`, `type`, `rate`) VALUES ('NULL', '$strName', '$blnType', '$intRate');";
		$rsResult = $this->objConnexion->query($SQLRequest);
        return $rsResult;
		}

			//*********************************************************
		// Nom   : AddFieldEvent
		// But : Ajoute un champs à la BDD
		// Retour : ArrayAddFieldType
		// Param. : -
		//*********************************************************
		public function CheckIfExist($strName,$blnType,$intRate)
		{
		$SQLRequestIfExist = "SELECT id FROM videos WHERE name='".$strName."'";
		$resultsNumber = $this->objConnexion->query($SQLRequestIfExist);


		if($resultsNumber->num_rows <= 0)
		{
		$SQLRequest ="INSERT INTO `bd_skeartleak`.`videos` (`id`, `name`, `type`, `rate`) VALUES ('NULL', '$strName', '$blnType', '$intRate');";
		$rsResult = $this->objConnexion->query($SQLRequest);
        return $rsResult;
    	}
		}

		
		//*********************************************************
		// Nom   : ModifyMovie
		// But : Ajoute un champs à la BDD
		// Retour : ArrayAddFieldType
		// Param. : -
		//*********************************************************
		public function ModifyFilms($strName,$blnType,$intRate)
		{
		$SQLRequest ="UPDATE  `bd_skeartleak`.`videos` SET  `id` =  '3',
						`name` =  'Boxers51',
						`type` =  '0',
						`rate` =  '1' WHERE  `videos`.`id` =1;
						";
		$rsResult = $this->objConnexion->query($SQLRequest);
        return $rsResult;
		}
		
		//*********************************************************
		// Nom   : dbConnect
		// But : Connexion à la DB
		// Retour : -
		// Param. : -
		//*********************************************************
		private function dbConnect()
		{
			try {
			$this->objConnexion = new PDO('mysql:host='.self::STR_HOST.';dbname='.self::STR_DB, self::STR_USER, self::STR_PWD);
				foreach($this->objConnexion->query('SELECT * from t_event') as $row) {
			}
			} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
			}
		}//dbConnect()
		
		//*********************************************************
		// Nom   : dbUnconnect
		// But : déconnection de la DB
		// Retour : -
		// Param. : -
		//*********************************************************
		private function dbUnconnect()
		{
			//Déconnection de la DB
			$this->objConnexion->close();
			
		}//dbUnconnect()
	}
?>

