<?php include "header.php" ?>
<form method="POST" action="add_to_cart.php">
    <input type="hidden" name="item_name" value="Chicken Parmesan">
    <input type="hidden" name="item_price" value="12.99">
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" value="1">
    <br>
    <label for="instructions">Special Instructions:</label>
    <textarea name="instructions" id="instructions"></textarea>
    <br>
    <button type="submit">Add to Cart</button>
</form>

<?php include "footer.php" ?>




