<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mnumber=$_POST['phonenum'];
$address=$_POST ['address'];
$citizen_num=$_POST['citizen_num'];
$min_wage=$_POST['min_wage'];
$occupation=$_POST['occupation'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  user(fname,lname,phonenum,address,citizen_num,min_wage,occupation,email,password) VALUES(:fname,:lname,:phonenum,:address,:citizen_num,:min_wage,:occupation,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':phonenum',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':citizen_num',$citizen_num,PDO::PARAM_STR);
$query->bindParam(':min_wage',$min_wage,PDO::PARAM_STR);
$query->bindParam(':occupation',$occupation,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
}
}
?>
<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>