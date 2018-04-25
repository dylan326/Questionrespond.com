<?php
    
session_start(); 
    
class databaseClass
{
    private $correctInfo = false;
    
    public function __construct(){}
   
   public function connect()
   {
       $config = parse_ini_file('/home/ubuntu/workspace/OOP/config.ini');
       $conn = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
       if ($conn == false)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        return $conn;
   }
   
 
   
   public function insertuser($username, $password, $email)
   {
       $connect = $this->connect();
      $hashed = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO login (username, password, email) VALUES (?, ?, ?)";
        $stmt= $connect->prepare($sql);
        $stmt->bind_param("sss", $username, $hashed, $email);
        $stmt->execute();
        
        return $stmt;

   }
   
   public function wash($input)
   {
       
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
  
    return $input;
   }
    
    
    public function login($username, $password)
    {
        $connect = $this->connect();
       $sql = "SELECT * FROM login where username = ?";
    
       $pre = $connect->prepare($sql);
    
        $pre->bind_param('s', $username);
       
       
        $pre->execute();
        $result = $pre->get_result();
        $data = $result->fetch_assoc();
        //hashing passwords
        $hashedpass = $data['password'];
       
        
        if($result->num_rows > 0 and $data['username'] == $username and password_verify($password, $hashedpass))
        {
            $this->correctInfo = true;
            $_SESSION['login'] = $data['password'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
        }
        
        return $this->correctInfo;
        
    }
    
  public function suba($answer, $q_id, $username, $qa_question, $qa_username)
   {
       $connect = $this->connect();
           
        $sql = "INSERT INTO answers ( answer, q_id, cuser, a_date, qa_email) VALUES (?, ?, ?, NOW(), 'mymail@gmail.com')";
        $stmt= $connect->prepare($sql);
        $stmt->bind_param("sis", $answer, $q_id, $username);
        $stmt->execute();
            
        return $stmt;
     
   }

    public function subq($question, $uname, $email)
    {
        $connect = $this->connect();
        $sql = "INSERT INTO questions (question, username, q_date, qa_email) VALUES (?, ?, NOW(), ?)";
        $stmt= $connect->prepare($sql);
        $stmt->bind_param("sss", $question, $uname, $email);
        $stmt->execute();
        
        return $stmt;
    
    }
}
    


?>
    
