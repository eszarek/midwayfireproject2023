<?php
$pagename = "COT Form";
require_once "header.php";
$currentfile = "cot.php";

//check if user is logged in
checkLogin();

//initial variables
$showform = 1;
$errexists = "";

//form processing
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //local variables & sanitization

    //Error checking & validation

    //General error message
    if ($errexists == 1) {
        echo "<p class='error'>There are errors.  Please make corrections and resubmit.</p>";
    } else {
        //No errors, insert into database
        //query database
        $sql = "";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        //insert data into database

        //success message
        echo "<p class='success'>Form successfully submitted.</p>";
        //hide form
        $showform = 0;

    }//close else no errors
}//close if req method is post

//If the form has not been submitted, display the form.
if ($showform == 1) {
?>
<p>Please enter the following information. All fields are required unless otherwise stated.</p>
<form name="cot" id="cot" method="post" action="<?php echo $currentfile; ?>" enctype="multipart/form-data">
    <label for="">Address</label>

    <p>Please select the Inspection Type(s):</p>
        <input type="checkbox" id="COTen" name="inspect_type" value="Change_of_Tenant">
        <label for="COTen">Change of Tenant</label><br>
        <input type="checkbox" id="commercial" name="inspect_type" value="Commercial">
        <label for="commercial">Commercial</label><br>
        <input type="checkbox" id="fps" name="inspect_type" value="Fire_Protection_System">
        <label for="fps">Fire Protection System</label><br>
        <input type="checkbox" id="res" name="inspect_type" value="Residential">
        <label for="res">Residential</label><br>
        <input type="checkbox" id="smokeAlarm" name="inspect_type" value="Smoke_Alarm">
        <label for="smokeAlarm">Smoke Alarm</label><br>

<div class="divCOT">
    <p>Change of tenant (No construction work | Fire Inspection Required)</p>
        <input type="checkbox" id="fireInspect" name="fireInspect" value="Fire_Inspect_Complete">
        <label for="fireInspect">Required Fire Inspection Complete for Certificate of Occupancy</label><br>
        <input type="checkbox" id="electricViolations" name="electricViolations" value="No_Electric_Violations">
        <label for="electricViolations">No Fire Code Violations to Preclude Electrical Service</label><br>
        <input type="checkbox" id="contactForm" name="contactForm" value="Contact_Complete">
        <label for="contactForm">Contact Form Complete</label><br>
</div>

<div class="selectComm"></div>
    <p>Commercial (Any/All construction work | Building Permit Required)</p>
        <p>Inspection Occurrence:</p>
        <input type="radio" id="initial" name="inspectOccur" value="Initial">
        <label for="initial">Initial Inspection</label><br>
        <input type="radio" id="reinspect" name="inspectOccur" value="reinspect">
        <label for="reinspect">Re-Inspection</label><br>
</div>

<div class="selectConstruct">
        <p>Construction:</p>
        <input type="radio" id="constructRoughIn" name="constructOccur" value="Rough_In">
        <label for="constructRoughIn">Rough-In</label><br>
        <input type="radio" id="constructFinal" name="constructOccur" value="Final">
        <label for="constructFinal">Final</label><br>
</div>

<div class="selectFPS">
        <p>Fire Protection System:</p>
        <input type="radio" id="fpsRoughIn" name="fpsOccur" value="Rough_In">
        <label for="fpsRoughIn">Rough-In</label><br>
        <input type="radio" id="fpsFinal" name="fpsOccur" value="Final">
        <label for="fpsFinal">Final</label><br>
</div>

        <p>Status</p>
        <input type="checkbox" id="contactFormStat" name="contactFormStat" value="Contact_Complete">
        <label for="contactFormStat">Contact Form Complete</label><br>
        <input type="checkbox" id="fireInspect" name="fireInspect" value="Fire_Inspect_Complete">
        <label for="fireInspect">Fire Inspection Complete during Final</label><br>

    <p>Select one:</p>
    <input type="radio" id="passed" name="passed" value="passed">
    <label for="passed">PASSED - All Fire and Life Safety Code requirements for listed project complete</label><br>
    <input type="radio" id="failed" name="failed" value="failed">
    <label for="failed">FAILED - The following Fire and Life Safety Code requirements for listed project incomplete. Schedule follow-up inspections allowing 72-Hour notice.</label><br>

<div class="failInspect">
    <p>Areas Requiring Attention</p>
    <input type="checkbox" id="addDis" name="addDis" value="Add_Displayed">
    <label for="addDis">Address Displayed</label>
    <input type="checkbox" id="exitLight" name="exitLight" value="Exit_Light">
    <label for="exitLight">Exit/Emergency Lights</label>
    <br>
    <input type="checkbox" id="fireExt" name="fireExt" value="Fire_Extinguisher">
    <label for="fireExt">Fire Extinguisher(s)</label>
    <input type="checkbox" id="sprinkSys" name="sprinkSys" value="Sprinkler_System">
    <label for="sprinkSys">Sprinkler System - Standpipe System</label>
    <br>
    <input type="checkbox" id="alarmSys" name="alarmSys" value="Alarm_System">
    <label for="alarmSys">Alarm System</label><br>
    <input type="checkbox" id="id" name="name" value="value">
    <label for="id">Words</label><br>
    <input type="checkbox" id="id" name="name" value="value">
    <label for="id">Words</label><br>
    <input type="checkbox" id="id" name="name" value="value">
    <label for="id">Words</label><br>
    <input type="checkbox" id="id" name="name" value="value">
    <label for="id">Words</label><br>
    <input type="checkbox" id="id" name="name" value="value">
    <label for="id">Words</label><br>
    <input type="checkbox" id="id" name="name" value="value">
    <label for="id">Words</label><br>
</div>

    <label for="">Additional Notes & Comments</label>

    <label for="">Inspector</label>

    <label for="">Business Representative</label>


</form>
<?php
}//close showform
    require_once "footer.php";
?>