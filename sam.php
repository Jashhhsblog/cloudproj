<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="referrer" content="origin">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Embed Google Map With Contact Form</title>
<script>
  window.onload = function() {
      window.location.replace("thanks.php");
    };
</script>
</head>
<style>
  
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image:url("https://media.istockphoto.com/id/1130676331/photo/empty-dark-wooden-table-in-front-of-abstract-blurred-bokeh-background-of-restaurant-can-be.jpg?s=170667a&w=0&k=20&c=Clnqm6lVyOHycuvki5D3jTszS20V3Mt4_FpM1GpvWBo=");
  color: none;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  box-sizing: border-box;
  place-items: center;
  text-align: center;
}  
button {   
       background-color: #4CAF50;   
       width: 55%;  
        color: white; 
        text-decoration:bold;
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        border-radius: 25px;
        cursor: pointer;   
         }   

  
 input[type=text], input[type=password],input[type=email] {   
    background: transparent;
    fill: none;
    border: none;
    border-bottom: 2px solid black;
        width: 300px;
        height: 300 px;;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        font-size: 16px;
    margin-bottom: 16px;
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }     
        
     
 .container {   

       margin:auto;
        width: 330px; 
    border-radius: 10px;
  padding: 40px 40px;
  margin-top: 100px;
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671); 
    }  
 h1{
    color:wheat;

 } 
 
::placeholder {
    color: white;
    opacity: 1;
  }
  input:focus {
  outline:none;
  border-bottom: 2px solid darkgreen;
}
  a{
    color:skyblue;
  }
</style>
<body onload="onPageLoad()">
  
<div class="contact">
<div class="map">
<iframe
style="border:0;" allowfullscreen="" loading="lazy"
referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    <div class="form">
<h1>Contact Us</h1>
<form action="https://formsubmit.co/sairampandu2003@gmail.com" method="POST">
<input type="hidden" name="_captcha" value="false">
<!--<input type="hidden" name="_next" value="thanks.html">-->


<button type="submit">Submit</button>
</form>
</div>
</div>
</body>
</html>