<?php
session_start();
require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquinas School Medical Record</title>
    <link rel="stylesheet" href="medical.css">
</head>
<body>
    <header>
        <img src="aquinas-logo.png" alt="aquinas-logo"  width="400px">
        <div class="navbar">
            <p>Health Record</p>
            <p>Dental Record</p>
        </div>
    </header>

    <?php 
    if(isset($_GET['id'])) 
    {
        $student_id = mysqli_real_escape_string($con, $_GET['id']);
        $query = "SELECT * 
                  FROM student_details 
                    INNER JOIN medical_history 
                        ON student_details.student_number = medical_history.student_number 
                  WHERE student_details.student_number = '$student_id' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0) 
        {
            $student = mysqli_fetch_array($query_run);
            ?>

    <div class="medical-record">
        <form action="records.php" method="POST">
            <h2>Student Health Record</h2>
            <hr>
            <div class="patient-details">
                <label for="YearLevel">Year level</label>
                <input type="text" name="yearLevel" value="<?=$student["year_level"];?>" >
                <label for="Section">Section</label>
                <input type="text" id="section" name="section" value="<?=$student['section'];?>" >

                <label for="studentNumber">Student Number</label>
                <input type="text" id="studentNumber" pattern="[0-9]+" name="studentNumber" readonly value="<?=$student['student_number'];?>" >

                <br><label for="Name">Name</label>
                <input type="text"  id="lastName" name="lastName"  value="<?=$student['student_lastname'];?>" >
                <input type="text"  id="firstname" name="firstName" value="<?=$student['student_firstname'];?>" >
                <input type="text" id="middlename" name="middleName"   value="<?=$student['student_middlename'];?>" >   

                <label for="Age">Age</label>
                <input type="text" id="age" name="age"  pattern="[0-9]+"  value="<?=$student['age'];?>" > 

                <label for="Birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday"  value="<?=$student['birthday'];?>" > 

    
                <br><label for="Address">Address</label>
                <input type="text" id="homeAddress" name="homeAddress"  value="<?=$student['address'];?>" >


            </div>

            <div class="father-details">
                <label for="FatherName">Father's Name</label>
                <input type="text" id="fathername" name="fathername"  value="<?=$student['father_name'];?>" >
                <input type="text" class="telephoneNum" name="fathertelno" pattern="[0-9]+"  placeholder="Telephone No." value="<?=$student['father_telno'];?>" >
            </div>

            <div class="mother-details">
                <label for="MotherName">Mother's Name</label>
                <input type="text" id="mothername" name="mothername"  value="<?=$student['mother_name'];?>" >
                <input type="text" class="telephoneNum" name="mothertelno" pattern="[0-9]+" placeholder="Telephone No." value="<?=$student['mother_telno'];?>" >
            </div>

            <div class="guardian-details">
                <label for="guardianName">Guardian's Name</label>
                <input type="text" id="guardianname" name="guardianname"  value="<?=$student['guardian_name'];?>" >
                <input type="text" class="telephoneNum" name="guardiantelno" pattern="[0-9]+" placeholder="Telephone No." value="<?=$student['guardian_telno'];?>" >
            </div>
            <hr>
            <div>
                <p>Should your child need to go home during the day and we need to contact you, is there someone at your house who would care for the child?</p>
                <input type="radio" id="yesAvailableGuardian" name="YesNoAvailGuardian"  value="Yes" <?php if($student['guardian_availability'] == 'Yes') {echo "checked";}?> >
                <label for="yesAvailableGuardian">Yes</label><br>
                <input type="radio" id="noAvailableGuardian" name="YesNoAvailGuardian"   value="No" <?php if($student['guardian_availability'] == 'No') {echo "checked";}?> >
                <label for="noAvailableGuardian">No</label><br>

                <p>If yes, please provide the name of person and contact no. :</p>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="AvailableGuardianName" name="availableGuardianName"  value="<?=$student['availableGuardian_name'];?>" >
                    <input type="text" id="AvailableGuardianTelno" name="availableGuardianTelno" pattern="[0-9]+" placeholder="Telephone No."  value="<?=$student['availableGuardian_telno'];?>" >
                </div>
            </div>
            <hr>
            
            <div class="medical-history">

                <h2>Medical History</h2>

                <p>Has your child been tested positive for COVID 19?</p>
                <input type="radio" id="yesTestedPositive" class="yes" name="TestedPositive"  value="Yes" <?php if($student['hasTestedPositive_COVID19'] == 'Yes') {echo "checked";}?>>
                <label for="yesTestedPositive">Yes</label><br>
                <input type="radio" id="noTestedPositive" class="no" name="TestedPositive"  value="No" <?php if($student['hasTestedPositive_COVID19'] == 'No') {echo "checked";}?>>
                <label for="yesTestedPositive">No</label><br>
                <label>If yes, please specify the date</label>
                <input type="date" id="dateTestedPositive" name="dateTested" value="<?=$student['testedPositive_date'];?>" >
                <hr>

                <p>Does your child bruise easily or bleed excessively after injury or tooth extraction?</p>
                <input type="radio" id="yesEasilyExcessively" class="yes" name="BruiseBleed" value="Yes" value="Yes" <?php if($student['bruiseEasily_bleedExcessively'] == 'Yes') {echo "checked";}?>>
                <label for="yes">Yes</label><br>
                <input type="radio" id="noEasilyExcessively" class="no" name="BruiseBleed" value="No" value="No" <?php if($student['bruiseEasily_bleedExcessively'] == 'No') {echo "checked";}?>>
                <label for="no">No</label><br>
                <label>If yes, please specify initial management.</label>
                <input type="text" id="BruiseBleedInitialMngmt" class="initialMngmt" name="BruiseBleedInitialMngmt" value="<?=$student['bruiseBleed_initialManagement'];?>" >
                <hr>

                <p>Does your child have history of medical problems or disabilities about which Aquinas school should know?</p>
                <input type="radio" id="yesHistoryMedicalProb" class="yes" name="HistoryMedicalProb" value="Yes" value="Yes" <?php if($student['hasHistory_medicalProblems'] == 'Yes') {echo "checked";}?>>
                <label for="yes">Yes</label><br>
                <input type="radio" id="noHistoryMedicalProb" class="no" name="HistoryMedicalProb" value="No" value="No" <?php if($student['hasHistory_medicalProblems'] == 'No') {echo "checked";}?>>
                <label for="no">No</label><br>
                <label>If yes, please specify initial management.</label>
                <input type="text" id="HistoryMedicalProbInitialMngmt" class="initialMngmt" name="HistoryMedicalProbInitialMngmt" value="<?=$student['medicalProblem_initialManagement'];?>" >
                <hr>

                <p>Does your child have special needs in vision, hearing or speech, etc?</p>
                <input type="radio" class="yes" name="SpecialNeeds" value="Yes" value="Yes" <?php if($student['hasSpecial_needs'] == 'Yes') {echo "checked";}?>>
                <label for="Yes">Yes</label><br>
                <input type="radio" class="no" name="SpecialNeeds" value="No" value="No" <?php if($student['hasSpecial_needs'] == 'No') {echo "checked";}?>>
                <label for="No">No</label><br>
                <hr>

                <p>Does your child have any allergies to medications,foods or insects bites?</p>
                <input type="radio" id="hasAllergies" class="yes" name="Allergies" value="Yes" value="Yes" <?php if($student['has_allergies'] == 'Yes') {echo "checked";}?>>
                <label for="Yes">Yes</label><br>
                <input type="radio" id="noAllergies" class="no" name="Allergies" value="No" value="No" <?php if($student['has_allergies'] == 'No') {echo "checked";}?>>
                <label for="No">No</label><br>
                <label>If yes, please specify.</label> 
                <input type="text" id="AllergiesInitialMngmt" class="specify" name="AllergiesInitialMngmt" value="<?=$student['specify_allergies'];?>" >
                <hr>

                <p>Has your child been admitted for the past 6 months or sought consultation due to significant complaints?</p>
                <input type="radio" id="Admitted" class="yes" name="Admitted" value="Yes" value="Yes" <?php if($student['admitted_dueToComplaints'] == 'Yes') {echo "checked";}?>>
                <label for="yes">Yes</label><br>
                <input type="radio" id="notAdmitted" class="no" name="Admitted" value="No" value="No" <?php if($student['admitted_dueToComplaints'] == 'No') {echo "checked";}?>>
                <label for="no">No</label><br>
                <label>If yes, please specify.</label>
                <input type="text" id="admittedSpecify" class="specify" name="admittedSpecify" value="<?=$student['admitted_specification'];?>" >
                <hr>

                <p><b>IMMUNIZATION</b> Complete?</p>
                <input type="radio" id="completeImmunization" class="yes" name="ImmunizationComplete" value="Yes" value="Yes" <?php if($student['complete_immunization'] == 'Yes') {echo "checked";}?>>
                <label for="yes">Yes</label><br>
                <input type="radio" id="incompleteImmunization" class="no" name="ImmunizationComplete" value="No" value="No" <?php if($student['complete_immunization'] == 'No') {echo "checked";}?>>
                <label for="no">No</label><br>
                <label>If not, please specify.</label>
                <input type="text" id="specifyImmunization" class="specify" name="specifyImmunization" value="<?=$student['immunization_specification'];?>" >
                <hr>

                <p><b>COVID 19 VACCINE:</b> Please check the appropriate boxes.</p>
                <input type="checkbox" id="1stDose" class="1stDose" name="COVID19VACCINE1" value="1st Dose" onchange="toggle()" <?php if($student['COVID19_vaccine'] == '1st Dose') {echo "checked";}?>>
                <label for="1stDose">1st Dose</label><br>
                <input type="checkbox" class="2ndDose" name="COVID19VACCINE2" value="2nd Dose" onchange="toggle()" <?php if($student['COVID19_vaccine'] == '2nd Dose') {echo "checked";}?>>
                <label for="2ndDose">2nd Dose</label><br>
                <input type="checkbox" class="Booster1" name="COVID19VACCINE3" value="Booster 1" onchange="toggle()"  <?php if($student['COVID19_vaccine'] == 'Booster 1') {echo "checked";}?>>
                <label for="Booster1">Booster 1</label><br>
                <input type="checkbox" class="Booster2" name="COVID19VACCINE4" value="Booster 2" onchange="toggle()" <?php if($student['COVID19_vaccine'] == 'Booster 2') {echo "checked";}?>>
                <label for="Booster2">Booster 2</label><br>
                <input type="checkbox" class="notApplicable" name="COVID19VACCINE5" value="Not Applicable" onchange="toggle()" <?php if($student['COVID19_vaccine'] == 'Not Applicable') {echo "checked";}?>>
                <label for="notApplicable">Not Applicable</label><br>
            </div> 
            <hr>

            <div>   
                <button type="submit" name ="update" class="submitBtn">Update details</button> 
            </div>  

        </form>   

        <?php

    } else 
    {
        echo "No Such ID Found";
    }
}
    ?>
    </div>
    <script src="medical-validation.js"></script>
</body>
</html>