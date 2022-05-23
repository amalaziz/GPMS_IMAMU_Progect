<?php


$servername = "localhost";
$username = "root";
$password = "root";
$db = "gpms";

 session_start();
// Create connection
$connect = new mysqli($servername, $username, $password,$db);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

 $id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>First metting</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body {
	     background-color:  #f1f1f1;
		 margin-top: o%
	}
/* Style page content */
.main {
	padding: 20px;
	width: 77%;
	margin-right: 61px;
	margin-left:13%;
	margin-top:6%;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #466a75;
  background-color: #466a75 ;
  color:white;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  color:white;
  font-size:1em;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 12px 12px;
  border: 4px solid #ccc;
  border-top: none;
}
.vertical-menu {
  width: 100%; /* Set a width if you like */
}

.vertical-menu a {
background-color:  #9fbdc6;
  color: black; /* Black text color */
   border: 1px solid #ccc;
  display: block; /* Make the links appear below each other */
  padding: 12px;  /* Add some padding */
  text-decoration: none; /* Remove underline from links */
  text-align: center;
  margin: 10px 3px;
}

.vertical-menu a:hover {
  background: #ccc; /* Dark grey background on mouse-over */
}	/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:  #f1f1f1;
}

/* Style the name inside the navigation bar */
.topnav .userName {
  
  position: absolute;
  top :45px;
  right: 70px;
  color: black;
  text-align: center;
  padding: 0px 4px;
  margin-top: 0px;
  font-size: 17px;
}
/* Style the logo inside the navigation bar */
.topnav .logo {
  float: left;
  padding: 0px 10px;
   margin-top: 0;
    top: 0;
}

/* Style the serarch input */
.search-icon i{
  position: absolute;
}
.search-icon {
 width: 100%;
            margin-bottom: 10px;
}
 .icon {
            padding: 10px;
            color: green;
            min-width: 50px;
            text-align: center;
			 margin-top: 3px;
  margin-bottom: 3px;
  margin-left: 300px;
        }
		 .input-field {
            width: 30%;
            padding: 10px;
            text-align: center;
			 float: center;
  border: 1px solid grey;
   background-color:  #f1f1f1;
    border-radius: 10px;

  margin-top: 3px;
  margin-bottom: 3px;
  margin-left: 300px;
  font-size: 17px;
        }

.nav__icon1 {
	
	font-size : 24px;
	padding-right: 10px;
	
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally 
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}*/

/* محتوى الصفحه هنا */	
/* Style page content */
.main {
	padding: 20px;
	width: 70%;
	margin-right: 61px;
	margin-left:250px;
	margin-top:60px;
}
/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

/*===== VARIABLES CSS =====*/
:root{
  --nav-width: 92px;

  /*===== Colores =====*/
  --first-color: #0C5DF4;
  --bg-color: #12192C;
  --sub-color: #B6CEFC;
  --white-color: #FFF;
  
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: 1rem;
  --small-font-size: .875rem;
  
  /*===== z index =====*/
  --z-fixed: 100;
}


/*===== BASE =====*/
*,::before,::after{
  box-sizing: border-box;
}
body{
  position: relative;
  margin: 0;
  padding: 2rem 0 0 6.75rem;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  transition: .5s;
}
h1{
  margin: 0;
}
ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
a{
  text-decoration: none;
}

/*===== l NAV =====*/
.l-navbar{
  position: fixed;
  top: 0;
  left: 0;
  width: var(--nav-width);
  height: 100vh;
  background-color: #466A75;
  color: var(--white-color);
  padding: 1.5rem 1.5rem 2rem;
  transition: .5s;
  z-index: var(--z-fixed);
}

/*===== NAV =====*/
.nav{
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
}
.nav__brand{
  display: grid;
  grid-template-columns: max-content max-content;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2rem;
}
.nav__toggle{
  font-size: 1.25rem;
  padding: .75rem;
  cursor: pointer;
}
.nav__logo{
  color: var(--white-color);
  font-weight: 600;
}

.nav__link{
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: .75rem;
  padding: .75rem;
  color: var(--white-color);
  border-radius: .5rem;
  margin-bottom: 1rem;
  transition: .3s;
  cursor: pointer;
}
.nav__link:hover{
  background-color: var(--first-color);
}
.nav__icon{
  font-size: 1.25rem;
}
.nav__name{
  font-size: var(--small-font-size);
}

/*Expander menu*/
.expander{
  width: calc(var(--nav-width) + 9.25rem);
}

/*Add padding body*/
.body-pd{
  padding: 2rem 0 0 16rem;
}

/*Active links menu*/
.active{
  background-color: var(--first-color);
}

/*===== COLLAPSE =====*/
.collapse{
  grid-template-columns: 20px max-content 1fr;
}
.collapse__link{
  justify-self: flex-end;
  transition: .5s;
}
.collapse__menu{
  display: none;
  padding: .75rem 2.25rem;
}
.collapse__sublink{
  color: var(--sub-color);
  font-size: var(--small-font-size);
}
.collapse__sublink:hover{
  color: var(--white-color);
}

/*Show collapse*/
.showCollapse{
  display: block;
}

/*Rotate icon*/
.rotate{
  transform: rotate(180deg);
}
.footer {                 font-size: small;
							color:black;
							float: both;
							
							bottom: 0px;
							margin-top: 3%;
							padding-left:65%;
							margin-bottom: 1%;
							
					}
					
					        
            tr{transition: all ease-in-out .25s}
            .selected{background-color:blue;color:#fff;font-weight: bold}
			input[type="checkbox"] {
    opacity: 0;
	transform: scale(3);
        margin: 8px;
}
table, th, td {
  border: 1px solid gray;
            border-collapse: collapse;}
       
            tr th{background: #466a75;
	color: white;
			}

 td input[type=text] {
	height:100%;
	width:100%;
	padding:10px;
	box-sizing: border-box;
	text-align:center;
	font-size: 1em;
}

table th {
	
	padding:10px;
	
}	
table td {
	
	text-align:center;
	
}	

.secondTable{
	 margin: 0 auto; 
	text-align:center;
	 border: 1px solid gray;
  border-collapse: collapse;
}
.secondTable td{
	width: 40px;
}

td.tdText {
	width: 300px;
	padding:15px 28px;
}
.chec {
	background-color: #bff0a1;
}
.nochec {
	background-color: #f1f1f1;
}
#i10i1 , #i1i4, #i1i5, #i1i6, #i1i7 , #i1i8  {
	background-color: #f1f1f1;
}
.button1 , .button2{
	  margin: 10px 5px 10px 5px;
	  padding: 10px 30px;
	  border:none;
	  
	}
	button {
		font-size: 27px;
		
	}
	.button1 {
	background-color:#378265 ;
	padding: 13px 30px;
	border: none;
border-radius: 10%;
color: white;
	}
	.button2 {
	background-color: #f99679;
	padding: 13px 30px;
	border: none;
	border-radius: 10%;
	color: white;
	}
 td textarea {
	height:300px;
	width:100%;
	padding:10px;
	box-sizing: border-box;
	text-align:center;
	font-size: 1em;
}	
        </style>
	</head>
	<?php

$query2 = "SELECT * FROM coordinator";  
           $result2 = mysqli_query($connect, $query2);
		   $row2 = mysqli_fetch_array($result2);
		   $coor_id = $row2['ID'];
 
$a1 =$_SESSION["Username"];
						  $sql4 = 'SELECT * FROM supervisors' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    

                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Usernam"] == $a1){
		$supid = $row4['Id'];
		$first = $row4["First_name"];
		$seco = $row4["Middle_name1"];
		$last = $row4["Last_name"];

	}}
}

                            // ---------------------------------- final of top nav -------------------------------//
?>
	   <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo"></a>
                    </div>
                    <div class="nav__list">
                         <a href="coor_home.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                         <a href="/coordinatior/FileSubmit/uploadAss.php" class="nav__link ">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">GP documents</span>
                        </a>

                        <a href="/coordinatior/cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="/coordinatior/announcment.php" class="nav__link">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>
							 
                       <a href="/supervisor/supervisor_home.php" class="nav__link">
                            <ion-icon name="arrow-back-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Supervisor Home</span>
                        </a>
						
                        <a href="coor_help.php" class="nav__link">
                            <ion-icon name="help-circle-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Help</span>
                        </a>
                    </div>
                </div>

                <a href="/logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

      
      
<div class="topnav">
<img class="logo" src="/logoo.png" alt="GPMS Logo" width="140" height="70">
  
	<?php

    
echo '<div class = "userName"><ion-icon name="person-outline" class="nav__icon1"></ion-icon>';
                        
echo $first.' '.$seco.' '.$last.'</div></div>';


                            // ---------------------------------- final of top nav -------------------------------//
?>

</div>	
 <div class ="main">
            <?php
			global $id;
			 $sql4 = "SELECT * FROM student WHERE Section_No= $id" ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
                        while($row4 = mysqli_fetch_array($result4)){
						       $cour= $row4['coruse_NO'];
                               $GroupNum=$row4['Group_No'];
						}
}
global  $cour, $GroupNum;
                          $sql2 = "SELECT * FROM project WHERE Section_No= $id" ; 
                          if($result2 = mysqli_query($connect, $sql2)){
                              while($row3 = mysqli_fetch_array($result2)){
                                  $semester = $row3['Semester'];
								  $year = $row3['Year'];
								  $etiltle= $row3['Title'];
								  $atitle = $row3['title_arabic'];
                                    }				
					 }
	   
else {
	echo("Error description: " . $connect -> error);
}

            ?>
	
        <div class="studiv2"><table border = "1"><tr>
		<th>Course: </th><td><?Php  echo $cour;?></td>
		<th>Section Number: </th><td><?Php  echo $id;?></td>
		<th>Group No: </th><td><?Php  echo $GroupNum;?></td>
		 <th>Semester/Year:</th><td><?Php  echo $semester.'/'.$year;?></td></tr>
		  <tr> <form method="post" action="<?php echo '/process.php?id='.$id.'&cor='.$cour ;?>"><th colspan="4">Project title</th><td colspan="2">
		  <?php echo $etiltle; ?></td><td colspan="2">
		 <?php echo $atitle; ?></td></tr>
 <tr><th colspan="8">Meeting Notes / outcomes</th></tr>
 <tr><td colspan="16">

 <table border = "1" class="secondTable"><tr id="first-tr" class="test">
                <th>Phase\Week</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
				<th>4</th>
                <th>5</th>
                <th>6</th>
				<th>7</th>
                <th>8</th>
                <th>9</th>
				<th>10</th>
                <th>11</th>
                <th>12</th>
				
            </tr>
			
            <?php  
			$sql2 = "SELECT * FROM first_meeting WHERE Section_No= $id" ; 
                          if($result2 = mysqli_query($connect, $sql2)){
                $row = mysqli_num_rows($result2);          
			for($i=1; $i<=$row; $i++){
				if($row3 = mysqli_fetch_array($result2)){
					if ($row3['status']=='Coordinatior' || $row3['status']=='coordinatior' ){
           echo '<tr><td class= "tdText">'.substr($row3['phase'], strpos($row3['phase'], ".") + 1).'</td>';
		   $str_arr2 = explode (",", $row3['week']);
		   $arrlenth = count($str_arr2);
		      for($ii=1; $ii<=12; $ii++){
				
				echo "<td id='i".$ii."i".$i."'";
	            for ($jj=0; $jj<$arrlenth; $jj++){
                    if((string)$str_arr2[$jj]==(string)($i.'.'.$ii)){   
                echo  "class='chec'";
				
					}
					
				}

                echo ">";		
			  ?>
			  
			  </td>
				
				<?php 
			  }
			
			  
          echo   '</tr>';
				}
			}
							  }
						  }
			$sub = 25 - $row ;
			for($i=$row+1; $i<=$sub; $i++){
				
           echo '<tr><td class= "tdText"></td>';
		   
		      for($ii=1; $ii<=12; $ii++){
				  
			  ?>
			  <td></td>
				
				<?php 
			  }
			
			  
          echo   '</tr>';
			}
							  
			
			?>

</table>
		<td></tr>
		<tr><th colspan="10">Supervisor Review:</th></tr>
<tr><td colspan="10" class="sup_rev">
<?php
if ($row3['status']=='Coordinatior' || $row3['status']=='coordinatior' ){
echo $row3['supervisor_rev'];
}							
					
	
?>
</td></tr>
		</table>
		</br>

     <?php  

							  if($row3['status'] == 'Coordinatior'){
?>
<input type="submit" name="CReject_fm" value="Reject" class = "button2" title = "Resubmit to student">
<?php  
							  }
						  
						
?>
</form>
      
        
		</div>

<div class = "footer"> Copyright &copy 2022.All rights reseved.</div>

	    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script>

const showMenu = (toggleId, navbarId, bodyId)=>{
  const toggle = document.getElementById(toggleId),
  navbar = document.getElementById(navbarId),
  bodypadding = document.getElementById(bodyId)

  if(toggle && navbar){
    toggle.addEventListener('click', ()=>{
      navbar.classList.toggle('expander')

      bodypadding.classList.toggle('body-pd')
    })
  }
}
showMenu('nav-toggle','navbar','body-pd')

/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
  linkColor.forEach(l=> l.classList.remove('active'))
  this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


/*===== COLLAPSE MENU  =====*/ 
const linkCollapse = document.getElementsByClassName('collapse__link')
var i

for(i=0;i<linkCollapse.length;i++){
  linkCollapse[i].addEventListener('click', function(){
    const collapseMenu = this.nextElementSibling
    collapseMenu.classList.toggle('showCollapse')

    const rotate = collapseMenu.previousElementSibling
    rotate.classList.toggle('rotate')
  })
  }
        </script>    
        
    </body>
</html>