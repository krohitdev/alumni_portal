<?php

include("oops_db.php");
//include('../constants/constants.php');

class DataOperation extends Database 
{
	public $response=array();
	public $status="";
	public $message="";
	
	public function insert_record($table,$fields)
	{
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .=" (".implode(",",array_keys($fields)).") VALUES ";
		$sql .="('".implode("','",array_values($fields))."')";
		echo $sql;
		$query = mysqli_query($this->db,$sql);
		if($query)
		{
		    $this->response['status']="success";
			$this->response['meassge']="success";
			$this->response['query']=$query;
			echo json_encode($response);
		}
		else {
			 $this->response['status']="error";
			$this->response['meassge']=mysqli_error($this->db);
			}
		
		return $this->response;
	}
	
	public function fetch_record($table)
	{
		$sql="SELECT * FROM ".$table;
		//$array=array();
		$query = mysqli_query($this->db,$sql);

			return $query;
	}
	
	public function select_record($table,$where)
	{
		$sql="";
		$condition="";
		foreach($where as $key =>$value)
		{
			$condition .= $key."='".$value."' AND "; 
		}
		//echo $condition;
		$condition = substr($condition, 0, -5);
		$sql.="SELECT * FROM ".$table." WHERE ".$condition;
			// echo $sql;
		 $query = mysqli_query($this->db,$sql);
		return $query;
	}

public function update_record($table,$where,$fields)
{
	$sql="";
	$condition="";
	foreach($where as $key => $value)
	{
		$condition.=$key."='".$value."' AND ";
	}
	$condition = substr($condition,0,-5);
	foreach($fields as $key=>$value)
	{
		$sql.=$key."='".$value."', ";
	}
	 $sql= substr($sql,0,-2);
	  $sql ="UPDATE ".$table." SET ".$sql." WHERE ".$condition;
	  echo $sql;
	 if(mysqli_query($this->db,$sql))
	 {
		 $this->status="Success";
		 $this->message="Data updated successfully";

		return true;
	 }
	 else 
	 {
		 $this->status="Error";
		 $this->message="Data not updates";
	 }
	 
	 
} 
	
	
	function delete_record($table,$where)
	{
		$sql="";
		$condition="";
		foreach($where as $key=>$value)
		{
			$condition.=$key."='".$value."' AND ";
		}
		$condition = substr($condition,0,-5);		
		$sql.="DELETE FROM ".$table." WHERE ".$condition;
		
		$query=mysqli_query($this->db,$sql);
		
		if($query)
		{
			global $status;
			$this->status="Success";
			global $message;
			 $this->message="Data delete successfully";
			return $query;
		}
		else
		{
			$this->status="error";
			$this->message=mysqli_error($this->db);
		}
		
	}
	 
}
$obj = new DataOperation;

date_default_timezone_set("ASIA/Kolkata");

//insert -- form.php
if(isset($_POST["submit"]))
{
	$myArray = array(
	"username"=>$_POST["username"],
	"password"=>$_POST["password"],
	"email"=>$_POST["email"],
	
	"dob"=>$_POST["dob"],
	"address"=>$_POST["address"],
	"city"=>$_POST["city"],
	"class"=>$_POST["class"],
	"session"=>$_POST["session"],
	"company"=>$_POST["company"],
	"profile"=>$_POST["profile"]
	
	);

	if($obj->insert_record("registration",$myArray)){

	 header("location:form.php?msg=Record Inserted");

	}

}
//insert -- form.php

//sign -- admin .login.php
if(isset($_POST["signup"]))
{
	$myArray = array(
	"username"=>$_POST["username"],
	"email"=>$_POST["email"],
	"password"=>$_POST["password"]
	
	);

	if($obj->insert_record("user",$myArray)){
	echo "<script>alert('user registered successfully');</script>";
	header("location:login.php");
	 
	}

}
//sign -- admin login.php


//sign -- studnet signup.php
if(isset($_POST["submitstu"]))
{
	if(isset($_FILES['attachPhoto1']['name']))
	{	error_reporting(0);
		$file_name=$_FILES['attachPhoto1']['name'];	
		$file_tmpname=$_FILES['attachPhoto1']['tmp_name'];
		$extension=array("gif", "jpeg", "jpg", "png");
		$dir = "../gentelella-master/production/student_upload/".$_POST['username'];
        // $dir="uploads/".$_POST['username'];
		mkdir($dir);
		
		$file_ext = strtolower(end(explode(".", $_FILES['attachPhoto1']['name'])));
			if(in_array($file_ext, $extension)) 
			{
               move_uploaded_file($_FILES["attachPhoto1"]['tmp_name'], $dir.'/'.$_POST['username'].'.'.$file_ext); 
			}
             else
			{
                echo "invalid files";
            }
	
			
	$myArray = array(
	"username"=>$_POST["username"],
	"password"=>md5($_POST["password"]),
	"email"=>$_POST["email"],
	"dob"=>$_POST["dob"],
	"address"=>$_POST["address"],
	"course"=>$_POST["course"],
	"registration_date"=>date('Y-m-d H:i:s'),
	"created_by"=>"self",
	"img"=>$_POST['username'].'.'.$file_ext
	);

	if($obj->insert_record("student",$myArray)){
		echo "<script>alert('user registered successfully');</script>";
	header("location:login.php");
	} 
	}

}
//sign -- studnet signup.php

// insert : message.php
	if(isset($_POST["send_message"]))
{
	$myArray = array(
	"send_to"=>$_POST["to"],
	"subject"=>$_POST["subject"],
	"message"=>$_POST["message"],
	"sender"=>$_POST["sender"],
	"sending_time"=>date('Y-m-d H:i:s'),
	"status"=>"no"
	);

	if($obj->insert_record("message",$myArray)){
	header("location:message.php");
	}
}
// insert : message.php

//insert -- alumni_form.php
if(isset($_POST["submit_alumni"]))
{	
	
	if(isset($_FILES['inputfile2']['name']))
	{	error_reporting(0);
		$file_name=$_FILES['inputfile2']['name'];	
		echo $file_name;
		$file_tmpname=$_FILES['inputfile2']['tmp_name'];
		$extension=array("gif", "jpeg", "jpg", "png");
		// $dir = '../gentelella-master/production/post_images/';
        $dir = "../gentelella-master/production/alumni_upload/".$_POST['email'];
        // $dir="uploads/".$_POST['username'];
		mkdir($dir);
		
		$file_ext = strtolower(end(explode(".", $_FILES['inputfile2']['name'])));
			if(in_array($file_ext, $extension)) 
			{
               move_uploaded_file($_FILES["inputfile2"]['tmp_name'],  $dir."/".$file_name); 
			}
		
		
		
             else
			{
				
                echo "invalid files";
            }
			
			$myArray = array(
			"username"=>$_POST["username"],
			"password"=>md5($_POST["password"]),
			"email"=>$_POST["email"],
			"dob"=>$_POST["dob"],
			"address"=>$_POST["address"],
			"city"=>$_POST["city"],
			"class"=>$_POST["class"],
			"session"=>$_POST["session"],
			"company"=>$_POST["company"],
			"profile"=>$_POST["profile"],
			"registration_date"=>date('Y-m-d H:i:s'),
			"created_by"=>'self',
			"img"=>$file_name,
			"status"=>'disable'
			);
			print_r ($myArray);
			if($obj->insert_record("registration",$myArray))
			{
				echo "<script>alert('Thank you for register !! we will interact with you soon then you can login'); window.location='login.php';</script>";//header("location:viewadmin.php"); 
			}
	}
	
}
//insert -- alumni_form.php end here

//insert -- add_post.php
if(isset($_POST["add_post"]))
{	
	
	if(isset($_FILES['attachPhoto1']['name']))
	{	error_reporting(0);
		$file_name=$_FILES['attachPhoto1']['name'];	
		echo $file_name;
		$file_tmpname=$_FILES['attachPhoto1']['tmp_name'];
		$extension=array("gif", "jpeg", "jpg", "png");
		$dir = '../gentelella-master/production/post_images/';
        
		$file_ext = strtolower(end(explode(".", $_FILES['attachPhoto1']['name'])));
			if (in_array($file_ext, $extension)) 
			{
               move_uploaded_file($_FILES["attachPhoto1"]['tmp_name'], $dir.$file_name); 
				
			}
             else
			{
				
                echo "invalid files";
            }
			
			$myArray = array(
			"post"=>$_POST["post"],
			"post_by"=>$_POST["post_by"],
			"registration_date"=>date('Y-m-d H:i:s'),
			"img"=>$file_name,
			);
			print_r ($myArray);
			if($obj->insert_record("post",$myArray))
			{
				$success="record  inserted";
				//header("location:viewadmin.php");
				echo "<script> alert('post Added');</script>"; 
			}
	}
	
}

//insert -- add_post.php end here
//
//delete message  : viewfullmessage.php
if(isset($_GET['delete_message']))
{
	$id = $_GET['id'];
	$where=array("id"=>$id);
	if($obj->delete_record("message",$where))
	{
	 header("location:viewmessage.php?msg=Record Deleted");		
	}
}
//delete message  : viewfullmessage.php




?>



