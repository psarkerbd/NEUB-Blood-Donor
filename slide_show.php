

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">

<div class="w3-content w3-section" style="max-width:820px; border:10px solid black; ">
<marquee scrollamount="1" scrolldelay="1" behavior="ALTERNATE" width="100%" > <font style="font-size:20px; font-weight: normal; color:red"> Welcome to the NEUB Blood Donor </font> </marquee>


  <?php
$files = glob("admin/images/gallery/*.*");

for ($i=0, $j=0; $i<count($files); $i++) {
    $image = $files[$i];
    //print $image ;
	echo '<img class="mySlides w3-animate-fading" src="'.$image .'" alt="Random image" style="width:100%" />';
	
}
    ?> 
  
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>


