<?php $adress = "City Hall, New York, NY"; ?>

<html>   
<head>   
    <title> Add a WhatsApp sharing image icon on a website </title>  
	<img src="http://localhost/share_socialmedia/img/badminton_poster.jpg" width="100" height="100" />
	<meta property="og:url"           content="http://localhost/share_socialmedia/index2.php" />

  <meta property="og:type"          content="msa" />

  <meta property="og:title"         content="MYsportsarena" />

  <meta property="og:description"   content="MYsportsarena" />

  <meta property="og:image"         content="http://localhost/share_socialmedia/img/badminton_poster.jpg" />

</head>   
  
<script>  
//user-defined function to open and share web content on WhatsApp  
function openWhatsApp() { 
	//var message = 'description:Test tournament\n venue:sarjapur \n'+'http://localhost/share_socialmedia/index2.php';
	//var message = 'http://localhost/share_socialmedia/index2.php';
   // window.open('whatsapp://send?text= http://localhost/share_socialmedia/index2.php'); 
	//window.open( "whatsapp://send?text=" + message, '_blank');    
	// window.open('whatsapp://send?text= https://www.youtube.com/watch?v=ohpCMpderow'); 
	//var message = 'description:Test tournament\n'+
	//			  'venue:sarjapur';
				  
	//var message =			 "hhello world"+"https://www.google.com/maps/search/?api=1&<?php //echo urlencode($adress); ?>";
	
	//var message = "https://www.google.com/maps/search/?api=1&query=centurylink+field";
	
	
	
	
	
//	var message =			 "hhello world"+"https://www.google.com/maps/@?api=1&map_action=map&<?php// echo urlencode($adress); ?>";
	//var  message = 'Hello world'+'https://www.google.com/maps/search/?api=1&'+parameters';

	 window.open('whatsapp://send?text=https://www.google.com/maps/search/?api=1&query=centurylink+field'); 
	 
    }  
</script>  
  
<body>   
    <h3 style="color:brown"> WhatsApp sharing Link </h3>   
  
    <!-- create an image icon to open the WhatsApp onclick -->     
    <img src = "https://image.freepik.com/free-vector/whatsapp-icon-design_23-2147900927.jpg" height="50" size="50" onClick="openWhatsApp()">  
      
</body>   
</html>