
<?php
  error_reporting(0);
  include("connect.php");
  
  $query = "SELECT * FROM mydata";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);
 
 
  if($total!=0){
	 
	  while(($result=mysqli_fetch_assoc( $data)))
	  {
		  echo "
			  <tr>
			  <td id='fullname'>".$result['FullName']."</td>
			  <td id='Email'>".$result['Email']."</td>
			  <td id='myphone'>".$result['Phone']."</td>
			  <td id='mypoints'>".$result['Points']."</td>
			  ";
	  }
  }else{
	  echo "not found";
  }
  
?>

