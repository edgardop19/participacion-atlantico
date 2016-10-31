<?php
$usuario = $_POST['loginname'];
$pass = $_POST['password'];
 
if(empty($usuario) || empty($pass)){
header("Location: login.html");
exit();
}
 
$db = new DbHandler();
    $result = $db->getAllRecords("SELECT * from Usuarios where user='" . $usuario . "'");
  if ($result != NULL) {
		foreach($result as $page){
			if($page[2]==$pass)
			{
			session_start();
            header("Location: admin.html");
			}
			else{
			  header("Location: login.html");
              exit();    
			}
		}		
    }
    else{
      header("Location: login.html");
      exit();  
    }
 
 
 class DbHandler {

    private $conn;

    function __construct() {
        require_once 'dbConnect.php';
        // opening db connection
        $db = new dbConnect();
        $this->conn = $db->connect();
    }
    /**
     * Fetching all srecords
     */
    public function getAllRecords($query) {
        $r = $this->conn->query($query) or die($this->conn->error.__LINE__);
        return $result = $r->fetch_all();    
    }
    /**
     * Fetching single record
     */
    public function getOneRecord($query) {
        $r = $this->conn->query($query.' LIMIT 1') or die($this->conn->error.__LINE__);
        return $result = $r->fetch_assoc();    
    }
    /**
     * Creating new record
     */
   
}
?>
