<?php 
$title = "javascript Events and form validations"; 
include "header.php" ?>
<h2>A simple button to display date</h2>
<button onclick="this.innerHTML = Date()">Click to know date </button>
<h2>make a button and a place holder as paragraph for the date </h2>
<button onclick="getElementById('date').innerHTML = Date()">Click to know date </button>
<p id = "date"></p>
<h2>change the background color</h2>
<form>
       <input type = "color" id = "background" onchange = "changeColor()">
</form>
<form>
<h2>change the font color </h2> 
<input type = "color" id = "fcolor" onchange = "changeFColor()">
</form>
<h2>on Mouse over & on mouse out</h2> 
<span onmouseover="
                     this.style.color = 'blue'; 
                     this.style.backgroundColor = 'yellow';
                     this.style.fontsize = '2em';"
       onmouseout = "this.style.color = 'red'; 
                     this.style.backgroundColor = 'white';
                     this.style.fontsize = '1.1em';"
> Some text </span>
<?php include "footer.php" ?>