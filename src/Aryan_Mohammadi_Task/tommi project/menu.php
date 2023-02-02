<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ranga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
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
       }
       
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
       




       .break {
         flex-basis: 100%;
         height: 0;
       }
       
       .invisible {display: none;}
       
       .visible {display: flex;}
       
       @media (max-width: 560px){
       
           
           .grid-container {
           grid-template-rows: 40px auto 240px;
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
            .button { width: 14%; font-size: 70%;}
       }
       
       
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
@media (max-width:830px){
    .main{
        display: block;
    }
    .main h2{
        text-align: left;
    }
    .main img{
        width:50%
    }
}
@media screen and (min-device-width: 450px) and (max-device-width: 900px) { 
    .main{
        display: block;
    }
    .main h2{
        text-align: left;
    }
    .imgblock{
        margin-left:200px;
    }
}
    </style>
</head>
<body>

<div class="grid-container">
    <div class="main">
        <div class="cntrblock">
            <h1>The only place to eat in Hämeenlinna! </h1>
        </div>
        <div class="cntrblock"><h2>Our favourites</h2></div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem1.jpg" alt="item1">
                <div class="card-body">
                <p class="card-text"><b>Cheeseburger :</b><br>meat burger 250g <br> Italian cheese<br> special sauce <br> roasted onion</p>
                </div>
            </div>
        </div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem2.png" alt="item2">
                <div class="card-body">
                <p class="card-text" ><b>Sea Pizza :</b><br>shrimp<br>mushroom <br>fish  <br>special cheese </p>
                </div>
            </div>
        </div>
        <div class="invisible">~~~~~~~~</div>
        <div class="cntrblock"><h2>Pizza</h2></div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem3.jpg" alt="item3">
                <div class="card-body">
                <p class="card-text" ><b>Pepperoni Pizza :</b><br>pepperoni<br>olive <br> garlic sauce <br>special cheese </p>
                </div>
            </div>
        </div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem4.jpg" alt="item4">
                <div class="card-body">
                <p class="card-text" ><b>Vegetables Pizza :</b><br>corn<br>mushroom <br>broccoli  <br>Spanish cheese </p>
                </div>
            </div>
        </div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem2.png" alt="item5">
                <div class="card-body">
                <p class="card-text" ><b>Sea Pizza :</b><br>shrimp<br>mushroom <br>fish  <br>special cheese </p>
                </div>
            </div>
        </div>
        <div class="invisible">~~~~~~~~</div>
        <div class="cntrblock"><h2>Burger</h2></div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem1.jpg" alt="item6">
                <div class="card-body">
                <p class="card-text" ><b>Cheeseburger :</b><br>meat burger 250g <br> Italian cheese<br> special sauce <br> roasted onion</p>
                </div>
            </div>
        </div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem5.jpg" alt="item7">
                <div class="card-body">
                <p class="card-text" ><b>Special Burger :</b><br>meat<br>mushroom <br>bacon   <br>Spanish cheese </p>
                </div>
            </div>
        </div>
        <div class="imgblock">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 280px; width: 288px;" src="images/menuItem6.jpg" alt="item8">
                <div class="card-body">
                <p class="card-text" ><b>Triple Burger :</b><br>meat 180g*3 <br>gouda cheese*3 <br>special sauce </p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php include "footer.php" ?>
