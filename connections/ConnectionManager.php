<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->getDefault();
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "edl_at_127_0_0_1";
		$data["connName"] = "edl at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;;edl;;1"; //currently unused

		$this->_connectionsIdByName["edl at 127.0.0.1"] = "edl_at_127_0_0_1";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "edl";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Database=edl;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["edl_at_127_0_0_1"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "dbct_at_127_0_0_1";
		$data["connName"] = "dbct at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;;dbct;;1"; //currently unused

		$this->_connectionsIdByName["dbct at 127.0.0.1"] = "dbct_at_127_0_0_1";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "dbct";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Database=dbct;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dbct_at_127_0_0_1"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "dbusers_at_127_0_0_1";
		$data["connName"] = "dbusers at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;;dbusers;;1"; //currently unused

		$this->_connectionsIdByName["dbusers at 127.0.0.1"] = "dbusers_at_127_0_0_1";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "dbusers";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Database=dbusers;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["dbusers_at_127_0_0_1"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "sep2_at_127_0_0_1";
		$data["connName"] = "sep2 at 127.0.0.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;127.0.0.1;root;1qaz2wsx;;sep2;;1"; //currently unused

		$this->_connectionsIdByName["sep2 at 127.0.0.1"] = "sep2_at_127_0_0_1";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "1qaz2wsx";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "127.0.0.1";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "1qaz2wsx";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "sep2";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 8.0 Unicode Driver};Server=127.0.0.1;Uid=root;Pwd=1qaz2wsx;Database=sep2;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["sep2_at_127_0_0_1"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["funcionario"] = "edl_at_127_0_0_1";
		$connectionsIds["global_users"] = "dbusers_at_127_0_0_1";
		$connectionsIds["dependencias_001"] = "edl_at_127_0_0_1";
		$connectionsIds["admin_rights"] = "dbusers_at_127_0_0_1";
		$connectionsIds["admin_members"] = "dbusers_at_127_0_0_1";
		$connectionsIds["admin_users"] = "dbusers_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pn"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_bandejaentrada_supervisores"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_files"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_tracking"] = "dbct_at_127_0_0_1";
		$connectionsIds["dependencia"] = "edl_at_127_0_0_1";
		$connectionsIds["cargo"] = "edl_at_127_0_0_1";
		$connectionsIds["hoja_ruta_event_type"] = "dbct_at_127_0_0_1";
		$connectionsIds["informe_intersup_anexos_tipo"] = "dbct_at_127_0_0_1";
		$connectionsIds["nomina_cont_meses"] = "dbct_at_127_0_0_1";
		$connectionsIds["contrato_estados"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pn1"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_info_cont"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_buscador_usuarios_all"] = "dbusers_at_127_0_0_1";
		$connectionsIds["hoja_ruta_ob"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_op"] = "dbct_at_127_0_0_1";
		$connectionsIds["contractor_master"] = "dbct_at_127_0_0_1";
		$connectionsIds["ep_obligaciones"] = "sep2_at_127_0_0_1";
		$connectionsIds["ep_op"] = "sep2_at_127_0_0_1";
		$connectionsIds["ep_obligaciones_temp"] = "sep2_at_127_0_0_1";
		$connectionsIds["ep_registros"] = "sep2_at_127_0_0_1";
		$connectionsIds["ep_op_temp"] = "sep2_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pn2"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pnc"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_bandejaentrada_supervisores_c"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pn0"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pnc1"] = "dbct_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_pn3"] = "dbct_at_127_0_0_1";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>