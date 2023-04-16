<?php
$pagename = "Form";
require_once "header.php";
$currentfile = "formstart.php";

//check if user is logged in
checkLogin();

$showform = 1;
$erraddress = "";

//form processing
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //LOCAL VARIABLES & SANITATION
    $address = trim($_POST['address']);
    //ERROR CHECKING & VALIDATION
    if (empty($address)) {
        $erraddress = "Please enter an address.";
    } else {
       //QUERY DATABASE FOR ADDRESS


        //DISPLAY INFORMATION

        //DISPLAY FORM OPTIONS
    }



}//close form processing

if ($showform==1) {
?>

<p>Welcome! Please enter the address:</p>
<form name="addresslookup" id="addresslookup" method="post" action="<?php echo $currentfile; ?>" enctype="multipart/form-data">
    <input type="text" name="address" id="address" placeholder="Address" maxlength="255" value="<?php if (isset($address)) {echo htmlspecialchars($address, ENT_QUOTES, "UTF-8");}?>">
    <?php if (!empty($erraddress)) {echo "<span class ='error'>$erraddress</span>"; } ?>
    <br> <br>
    <label for="submit">Submit:</label>
    <input type="submit" name="submit" id="submit" value="submit">
</form>
<?php
}//close showform
require_once "footer.php";
?>