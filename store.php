<?php

class MyStore {

    private $server = "mysql:host=localhost;dbname=mystore";
    private $user = "root";
    private $pass = "";
    private $options = array(
        
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        
    );

    protected $connection;

    public function openConnection(){

        try {

            $this->connection = new PDO(
                $this->server,
                $this->user,
                $this->pass,
                $this->options
            );
 
            // echo "Connection Success!";
             
            return $this->connection;


        } catch (PDOException $error) {

            echo "Error connection: ".$error->getMessage();
        
        }

    }

    public function closeConnection(){

        $this->$connection = 0;
        
    }

    public function getUsers(){

        $connection = $this->openConnection();
        $statement = $connection->prepare("SELECT * FROM users");
        $statement->execute();
        $users = $statement->fetchAll();
        $usersCount = $statement->rowCount();

        if($usersCount > 0){
            return $users;
        }
        else {
            return 0;
        }

    } //end getUser


    public function login(){

        session_start();

        if(isset($_POST['submit'])){
            
            $username = $_POST['email'];
            $password = $_POST['password'];

            $connection = $this->openConnection();
            $statement = $connection->prepare("SELECT * FROM  users WHERE email = ? AND password = ? ");
            $statement->execute([$username,$password]);
            $user = $statement->fetch();
            $total = $statement->rowCount();

            if ($total > 0) {
                $_SESSION['username'] = $user['first_name'];
                header("location: ./user/index.php");

            } else {
           
                echo "<script>alert('Please input form!');</script>";

            }
        }
    }

    public function register(){
         
        session_start();
        $errors = array(); 

        if (isset($_POST['reg_user'])) {

            // receive all input values from the form
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $connection = $this->openConnection();
            $statement = $connection->prepare("INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`, `mobile`, `address`)
            VALUES (?,?,?,?,?,?) ");
            $statement->execute([$fname,$lname,$email,$password,$mobile,$address]);
            header('location: landing.php');
            // $user = $statement->fetch();
            // $total = $statement->rowCount();

          
            // Finally, register user if there are no errors in the form
            // if (count($errors) == 0) {
            //     $password = md5($password_1);//encrypt the password before saving in the database
        
            //     mysqli_query($db, $query);
            //     // $_SESSION['username'] = $username;
            //     // $_SESSION['success'] = "You are now logged in";
            //     header('location: login.php');
            //  }
        }
    }
}

$mystore = new MyStore();

?>