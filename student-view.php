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
        $query = "SELECT * FROM student_details INNER JOIN medical_history ON student_details.student_number = medical_history.student_number WHERE student_details.student_number = '$student_id' ";
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
                <input type="text" name="yearLevel" value="<?=$student["year_level"];?>" readonly>
                <label for="Section">Section</label>
                <input type="text" id="section" name="section" value="<?=$student['section'];?>" readonly>

                <label for="studentNumber">Student Number</label>
                <input type="text" id="studentNumber" pattern="[0-9]+" name="studentNumber" value="<?=$student['student_number'];?>" readonly>

                <br><label for="Name">Name</label>
                <input type="text"  id="lastName" name="lastName" required value="<?=$student['student_lastname'];?>" readonly>
                <input type="text"  id="firstname" name="firstName" value="<?=$student['student_firstname'];?>" readonly>
                <input type="text" id="middlename" name="middleName"   value="<?=$student['student_middlename'];?>" readonly>   

                <label for="Age">Age</label>
                <input type="text" id="age" name="age"  pattern="[0-9]+" required value="<?=$student['age'];?>" readonly> 

                <label for="Birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" required value="<?=$student['birthday'];?>" readonly> 

    
                <br><label for="Address">Address</label>
                <input type="text" id="homeAddress" name="homeAddress" required value="<?=$student['address'];?>" readonly>


            </div>

            <div class="father-details">
                <label for="FatherName">Father's Name</label>
                <input type="text" id="fathername" name="fathername"  value="<?=$student['father_name'];?>" readonly>
                <input type="text" class="telephoneNum" name="fathertelno" pattern="[0-9]+"  placeholder="Telephone No." value="<?=$student['father_telno'];?>" readonly>
            </div>

            <div class="mother-details">
                <label for="MotherName">Mother's Name</label>
                <input type="text" id="mothername" name="mothername"  value="<?=$student['mother_name'];?>" readonly>
                <input type="text" class="telephoneNum" name="mothertelno" pattern="[0-9]+" placeholder="Telephone No." value="<?=$student['mother_telno'];?>" readonly>
            </div>

            <div class="guardian-details">
                <label for="guardianName">Guardian's Name</label>
                <input type="text" id="guardianname" name="guardianname"  value="<?=$student['guardian_name'];?>" readonly>
                <input type="text" class="telephoneNum" name="guardiantelno" pattern="[0-9]+" placeholder="Telephone No." value="<?=$student['guardian_telno'];?>" readonly>
            </div>
            <hr>
            <div>
                <p>Should your child need to go home during the day and we need to contact you, is there someone at your house who would care for the child?</p>
                <input type="radio" id="yesAvailableGuardian" name="YesNoAvailGuardian" value="Yes" required value="<?=$student['guardian_availability'];?>">
                <label for="yesAvailableGuardian">Yes</label><br>
                <input type="radio" id="noAvailableGuardian" name="YesNoAvailGuardian" value="No" required value="<?=$student['guardian_availability'];?>">
                <label for="noAvailableGuardian">No</label><br>

                <p>If yes, please provide the name of person and contact no. :</p>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="AvailableGuardianName" name="availableGuardianName" required value="<?=$student['availableGuardian_name'];?>" readonly>
                    <input type="text" id="AvailableGuardianTelno" name="availableGuardianTelno" pattern="[0-9]+" placeholder="Telephone No." required value="<?=$student['availableGuardian_telno'];?>" readonly>
                </div>
            </div>
            <hr>
            
            <div class="medical-history">

                <h2>Medical History</h2>

                <p>Has your child been tested positive for COVID 19?</p>
                <input type="radio" id="yesTestedPositive" class="yesTested" name="TestedPositive" value="yes" value="<?=$student['hasTestedPositive_COVID19'];?>">
                <label for="yesTestedPositive">Yes</label><br>
                <input type="radio" id="noTestedPositive" class="noTested" name="TestedPositive" value="no" value="<?=$student['hasTestedPositive_COVID19'];?>">
                <label for="yesTestedPositive">No</label><br>
                <label>If yes, please specify the date</label>
                <input type="date" id="dateTestedPositive" name="dateTested" value="Date" value="<?=$student['testedPositive_date'];?>" readonly>
                <hr>

                <p>Does your child bruise easily or bleed excessively after injury or tooth extraction?</p>
                <input type="radio" id="yesEasilyExcessively" class="yes" name="BruiseBleed" value="Yes" value="<?=$student['bruiseEasily_bleedExcessively'];?>">
                <label for="yes">Yes</label><br>
                <input type="radio" id="noEasilyExcessively" class="no" name="BruiseBleed" value="No" value="<?=$student['bruiseEasily_bleedExcessively'];?>">
                <label for="no">No</label><br>
                <label>If yes, please specify initial management.</label>
                <input type="text" id="BruiseBleedInitialMngmt" class="initialMngmt" name="BruiseBleedInitialMngmt" value="<?=$student['bruiseBleed_initialManagement'];?>" readonly>
                <hr>

                <p>Does your child have history of medical problems or disabilities about which Aquinas school should know?</p>
                <input type="radio" id="yesHistoryMedicalProb" class="yes" name="HistoryMedicalProb" value="Yes" value="<?=$student['hasHistory_medicalProblems'];?>">
                <label for="yes">Yes</label><br>
                <input type="radio" id="noHistoryMedicalProb" class="no" name="HistoryMedicalProb" value="No" value="<?=$student['hasHistory_medicalProblems'];?>">
                <label for="no">No</label><br>
                <label>If yes, please specify initial management.</label>
                <input type="text" id="HistoryMedicalProbInitialMngmt" class="initialMngmt" name="HistoryMedicalProbInitialMngmt" value="<?=$student['medicalProblem_initialManagement'];?>" readonly>
                <hr>

                <p>Does your child have special needs in vision, hearing or speech, etc?</p>
                <input type="radio" class="yes" name="SpecialNeeds" value="Yes" value="<?=$student['hasSpecial_needs'];?>">
                <label for="Yes">Yes</label><br>
                <input type="radio" class="no" name="SpecialNeeds" value="No" value="<?=$student['hasSpecial_needs'];?>">
                <label for="No">No</label><br>
                <hr>

                <p>Does your child have any allergies to medications,foods or insects bites?</p>
                <input type="radio" id="hasAllergies" class="yes" name="Allergies" value="Yes" value="<?=$student['has_allergies'];?>">
                <label for="Yes">Yes</label><br>
                <input type="radio" id="noAllergies" class="no" name="Allergies" value="No" value="<?=$student['has_allergies'];?>">
                <label for="No">No</label><br>
                <label>If yes, please specify.</label> 
                <input type="text" id="AllergiesInitialMngmt" class="specify" name="AllergiesInitialMngmt" value="<?=$student['specify_allergies'];?>" readonly>
                <hr>

                <p>Has your child been admitted for the past 6 months or sought consultation due to significant complaints?</p>
                <input type="radio" id="Admitted" class="yes" name="Admitted" value="Yes" value="<?=$student['admitted_dueToComplaints'];?>">
                <label for="yes">Yes</label><br>
                <input type="radio" id="notAdmitted" class="no" name="Admitted" value="No" value="<?=$student['admitted_dueToComplaints'];?>">
                <label for="no">No</label><br>
                <label>If yes, please specify.</label>
                <input type="text" id="admittedSpecify" class="specify" name="admittedSpecify" value="<?=$student['admitted_specification'];?>" readonly>
                <hr>

                <p><b>IMMUNIZATION</b> Complete?</p>
                <input type="radio" id="completeImmunization" class="yes" name="ImmunizationComplete" value="Yes" value="<?=$student['complete_immunization'];?>">
                <label for="yes">Yes</label><br>
                <input type="radio" id="incompleteImmunization" class="no" name="ImmunizationComplete" value="No" value="<?=$student['complete_immunization'];?>">
                <label for="no">No</label><br>
                <label>If not, please specify.</label>
                <input type="text" id="specifyImmunization" class="specify" name="specifyImmunization" value="<?=$student['immunization_specification'];?>" readonly>
                <hr>

                <p><b>COVID 19 VACCINE:</b> Please check the appropriate boxes.</p>
                <input type="checkbox" id="1stDose" class="1stDose" name="COVID19VACCINE1" value="1st Dose" onchange="toggleRequired()" >
                <label for="1stDose">1st Dose</label><br>
                <input type="checkbox" class="2ndDose" name="COVID19VACCINE2" value="2nd Dose" onchange="toggleRequired()" >
                <label for="2ndDose">2nd Dose</label><br>
                <input type="checkbox" class="Booster1" name="COVID19VACCINE3" value="Booster 1" onchange="toggleRequired()"  >
                <label for="Booster1">Booster 1</label><br>
                <input type="checkbox" class="Booster2" name="COVID19VACCINE4" value="Booster 2" onchange="toggleRequired()" >
                <label for="Booster2">Booster 2</label><br>
                <input type="checkbox" class="notApplicable" name="COVID19VACCINE5" value="Not Applicable" onchange="toggleRequired()" >
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