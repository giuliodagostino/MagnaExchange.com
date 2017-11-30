<?php require_once('../connect.php'); $client=$_SESSION['u2']; ?> 
<h4 class="title">Admin Desk</h4>
<?php $adm='admin>'.$client; 	$query="SELECT * FROM support WHERE username='$client' OR username='$adm' ORDER BY id DESC  ";
$result=$conn->query($query);
if($result->num_rows>0) {
    
    
    
while ($row=$result->fetch_assoc()) {
     $wd= $row["username"];
$da= $row["date"]; $action= $row["name"]; $usa= $row["username"]; $rec=$row['misc'] ; $rid=$row['id'];  $likes=$row['likes'] ;
$sub=substr($usa,0,1) ; 


echo " 
<div class='container' style='background-color:white; color:black;'>
<div style='background-color:;
 width:100px; height:100px; border-radius:100%;'>
  <center style=''><strong style=' color:green;
 text-transform:capitalize; font-size:35px;'>$sub</strong></center></div>
  <p><span><i class='fa fa-user'></i> $usa.</span> <i class='fa fa-inbox'></i> $da. "; ?> 
  <span></span><i class='fa fa-clock-o'></i> <span style='color:brown;'> <?php
$ryu="\"";
				$rec="$rec";
				$hg=$ryu.$rec.$ryu;
				 $taa=strtotime("$rec");
				$tbb=date("y-m-d h:i:sa");
				$gh=$ryu.$tbb.$ryu;
				$tb=strtotime("$tbb");	
				$diff=($tb-$taa);
$_SESSION["diff"]=$diff;
$r=$_SESSION["diff"];
$diff=$r/24/60/60; 

if($diff<1) {
	
}
else if($diff>7) 
{
	}else { $rt=substr($diff,2,1);
	if (round($diff)==1){
		$ss=" yesterday";
		$yest=substr($rec,8,6);
		echo $ss .' at '.$yest ;}
		else 
		
	
	{	
echo round($diff) ." dy ". $rt ." hr ago"; }
	}
$r=$_SESSION["diff"];
$diff=$r/60/60; 
if($diff<1) {
	
}
else if($diff>24) 
{
	}else {
		$rt=substr($diff,2,1);
		if (round($diff)==1){
		$ss="hr";}
		else $ss="hr";
		
echo round($diff)."". $ss." ".$rt ." m ago";}


$r=$_SESSION["diff"];
$diff=$r/60; 
if($diff<1) {
	
}
else if($diff>60) 
{
	}else {
		$rt=substr($diff,2,1);
		if (round($diff)==1){
		$ss="m";}
		else $ss="m";	
echo round($diff)." ".$ss." ".$rt." ago";}



$r=$_SESSION["diff"];
$diff=$r; 
if($diff<1) {
	
}
else if($diff>60) 
{
	}else {
		$rt=substr($diff,2,1);
echo round($diff)." sec ago";}
$dater= date("y-m-d h:i:s");
if($diff==1){
$rt=substr($diff,2,1);
$r=$_SESSION["diff"];
$diff=$r/7/24/60/60; 
 if($diff==1) 
{
	
		$rt=substr($diff,2,1);
echo round($diff)."lastweek , ".$rt." dy ago";}
	
}
	
else{}
$r=$_SESSION["diff"];
$diff=$r/12/7/24/60/60; 
if($diff<1) {
	
}
else if($diff>4) 
{
	}
	if ($diff==0) {

echo "just now";

	}
$r=$_SESSION["diff"];
$diff=$r/7/24/60/60; 

if($diff<1) {
	
}
else if($diff>4) 
{
	}else {
		$rt=substr($diff,2,1);
echo round($diff)." wk ".$rt." dy ago";}

$r=$_SESSION["diff"];
$diff=$r/4/7/24/60/60; 

if($diff<1) {
	
}
	else if($diff>12) 
{
	}else  {
		$rt=substr($diff,2,1);
echo round($diff)." mth ".$rt." wk ago";}
?> </span><span></span> <span><a href='slike.php?id=<?php echo $rid ; ?>' target='k'><i id='like' class='fa fa-thumbs-up'> <input type='text' id='ct' value='<?php echo $rid;  ?>' hidden >
<input type='text' id='dt' value='<?php echo $likes;  ?>' hidden>
</i></a><?php echo $likes;  ?><?php    ?></span> <span><span></span>
<span></span><?php    ?></span> <span>
<?php if($usa==$fn){
echo "<a href='#'><button class='btn btn-warning btn-fill btn-wd'><i class='fa fa-pencil'></i> Edit</button></a>";
}   ?></span></p>

  <?php  echo "
  <p>$action</p>
</div></div><br>";

}} ?>

 <iframe name='k' style='display:none;'></iframe> 
 