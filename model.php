<?php

Class Model{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $db="login";
    private $conn;
    
    public function __construct(){
        
        try{
 $this->conn=new MySQLi($this->server,$this->username,$this->password,$this->db);
 //echo 'tsssstttt';
        } catch (Exception $e) {
            echo "connection failed". $e->getMessage();

        }
    }
            public function insert(){
                if(isset($_POST['submit'])){
                    
                   if((isset($_POST['username']))&& (isset($_POST['email']))&& (isset($_POST['mobile'])) && (isset($_POST['password']))){
    
                       if((!empty($_POST['username']))&& (!empty($_POST['email']))&& (!empty($_POST['mobile']))&& (!empty($_POST['password']))){
                          $name=$_POST['username'];
                          $mobile=$_POST['mobile'];
                          $email=$_POST['email'];
                          $pass=$_POST['password'];
                          $pass=md5($pass);
                          $query="INSERT INTO users (username,password,email,mobile) VALUES ('$name','$pass','$email','$mobile')";
                          if($sql=$this->conn->query($query)){
                          echo "<script>alert('records added succesfully');</script>";
                          echo "<script>window.location.href='sign.php';</script>";}
                          else
                          {echo "<script>alert('failed');</script>";
                          echo "<script>window.location.href='sign.php';</script>";}
                       }
                       else
                       {
                           echo "<script>alert('empty');</script>";
                           echo "<script>window.location.href='sign.php';</script>";
                       }
                   }
                }
            }
            
            
}
?>