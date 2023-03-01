<?php
session_start();

// Retrieve form data
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$quantity = $_POST['quantity'];
$instructions = $_POST['instructions'];

// Create cart item object
$item = new stdClass();
$item->name = $item_name;
$item->price = $item_price;
$item->quantity = $quantity;
$item->instructions = $instructions;

// Add item to cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
array_push($_SESSION['cart'], $item);

// Redirect back to menu page
exit();
?>
<?php
session_start();

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    foreach ($cart as $item) {
        echo $item->name . " - $" . $item->price . " x " . $item->quantity . "<br>";
        if ($item->instructions) {
            echo "Special instructions: " . $item->instructions . "<br>";
        }
    }
} else {
    echo "Your cart is empty.";
}
?>
