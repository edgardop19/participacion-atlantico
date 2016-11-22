<?php
$usuario = $_POST['loginname'];
$pass = $_POST['password'];
 
if(empty($usuario) || empty($pass)){
header("Location: login.html");
exit();
}
 
$db = new DbHandler2();
    $result = $db->getAllRecords("SELECT * from Usuarios where user='" . $usuario . "'");
  if ($result != NULL) {
		foreach($result as $page){
			if($page[2]==$pass)
			{
			session_start();
			 $_SESSION['id'] = $usuario; 
            header("Location: admin.php");
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
 
 
 class DbHandler2 {

    private $conn;

    function __construct() {
        require_once 'dbConnect2.php';
        // opening db connection
        $db = new dbConnect2();
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
