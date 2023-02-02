<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ranga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
font-family: 'Ranga', cursive; 
font-size: 20px;
vertical-align: middle;
text-align: center;
align-content: center;
background-color: #6f2232;
word-wrap: break-word;
hyphens: auto;
margin: 0;
color: #ffff;
position: relative;
}

img {
    border-radius: 11px;
    width: 100%;
}

p{
    font-family:'Inria Serif';
    -webkit-text-stroke-width: 0.3px;
    -webkit-text-stroke-color: #C3073F; 
}
p1{
    font-family:'Inria Serif';
    color:#C3073F;
    -webkit-text-stroke-width: 0.3px;
    -webkit-text-stroke-color: #ffffff; 
}
h2{
    font-family:'Rancho', cursive;
    color:#4E4E50;
    -webkit-text-stroke-width: 0.3px;
    -webkit-text-stroke-color: #ffffff; 
}
.vcenter {
margin: 0;
position: absolute;
top: 50%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}

.header { grid-area: header; background-color:#1A1A1D; opacity: 100%;             
    position: sticky; top: 0; z-index: 1;
    display: flex;
    flex-direction: row-reverse;
    align-items: stretch;
}
 .header a {
    text-decoration: none;
    color: #fff;
 }

.main { grid-area: main; background-color: #1A1A1D; opacity: 93%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    align-content: space-around;
    flex-basis: auto;
    column-gap: 10px;
    row-gap: 30px;
    padding: 30px;
    align-content: stretch;
}

.left {
    grid-area: left;
    opacity: 0%;
}
.right { 
    grid-area: right;
    opacity: 0%;
}
.footer { 
    grid-area: footer;
    background-color:#4E4E50;
    opacity: 96%;
    display:flex;
    flex-wrap: wrap;
}
/* 
.grid-container {    background-image: url('images/bg.jpg');
    opacity: 80%;
    min-height: 100vh;
    display: grid;
}

.grid-container {
    grid-template-rows: 40px auto 140px;
    grid-template-columns: 5vw auto auto auto auto auto auto auto auto auto auto 5vw;
    grid-template-areas:
    'header header header header header header header header header header header header'
    'left main main main main main main main main main main right'
    'footer footer footer footer footer footer footer footer footer footer footer footer';
}

.grid-container > div {
    object-fit: cover;
} */

.button {
    width: 10vw;
    font-family: 'Ranga', cursive;
    background-color: #4E4E50;
    color: #ffff;
    font-size: 100%;
    opacity: 93%;
    border-radius: 5px;
    
}

.button:hover {
    box-shadow: 0 10px 16px 0 rgba(235, 190, 157, 0.13),0 50px 50px 0 rgba(0,0,0,0.19);
}

.imgblock {    
    min-width: 15vw;
    max-width: 22vw;
    height: auto;
}

.txtblock {
    min-width: 60%;
    max-width: 70%;
    height: auto;
    flex-grow: auto;
}
.cntrblock {
    min-width:90%;
    max-width: 100vw;;
}
.cntrblock > img {
    width: 30%;
}

.break {
  flex-basis: 100%;
  height: 0;
}

.invisible {display: none;}

.visible {display: flex;}

@media (max-width: 560px){

    
    .grid-container {
    grid-template-rows: 40px auto 260px;
    grid-template-columns: 4vw auto auto auto auto auto auto auto auto auto auto 4vw;
    grid-template-areas:
    'header header header header header header header header header header header header'
    'left main main main main main main main main main main right'
    'footer footer footer footer footer footer footer footer footer footer footer footer';
}

    .invisible {display: flex; width: 100%;}
    .main {padding: 15px;}
    .txtblock {min-width: 80%; max-width:100%;}
    .visible {display: none;}
    .header a {
        text-decoration: none;
        color: #fff;
        font-size:13px;
     }
     .button { width: 14%; font-size: 70%;}
}

/* Carousel CSS */
.carousel-item > img {
    height: auto;
    width: 45%;
    margin: auto;
  }
  
  #carousel {
    padding-bottom: 100px;
  
  }
  
  .carousel-indicators {
    padding-bottom: 60px;
  }
  
  .image1{
    width: 400px;
    height: auto;
  
  }
/* Carousel CSS ends */

/* Map CSS */
.googlemap{
    max-width: 90%;
    max-height: 5%;
    
}
/* Map CSS ends */


/*   
#1A1A1D
#4E4E50
#6F2232
#950740
#C3073F
 */

    </style>
</head>
<body>
<div class="grid-container">

    <div class="header">
        <div style="flex-grow: 3; vertical-align: middle; "><a href="contact.php" class="button vcenter">Contact</a></div>
        <div style="flex-grow: 3; vertical-align: middle; "><a href="staff.php" class="button vcenter">Staff</a> </div>
        <div style="flex-grow: 3; vertical-align: middle; "><a href="ex1.php" class="button vcenter">ex1</a> </div>
        <div style="flex-grow: 3; vertical-align: middle; "><a href="menu.php" class="button vcenter">Menu</a> </div>
        <div style="flex-grow: 5;"></div>
        <div class="visible" style="flex-grow: 1;"><p>Pizz</p><p1>urgeR</p1></div> 
        <div style="flex-grow: 2;"> <a href="index.html"><img style="width: 40px; padding: 5px;" class="vcenter" src="images/logo.png" alt="logo"></a></div> 
    </div>
    