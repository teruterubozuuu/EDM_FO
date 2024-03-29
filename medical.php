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

    <div class="medical-record">
        <form action="records.php" method="POST">
            <h2>Student Health Record</h2>
            <hr>
            <div class="patient-details">
                <label for="YearLevel">Year level</label>
                <input type="text" id="yearlevel" pattern="[0-9]+" name="yearlevel">
                <label for="Section">Section</label>
                <input type="text" id="section" name="section" >

                <label for="studentNumber">Student Number</label>
                <input type="text" id="studentNumber" pattern="[0-9]+" name="studentNumber">

                <br><label for="Name">Name</label>
                <input type="text"  id="lastname" name="lastname"  required placeholder="Last name">
                <input type="text"  id="firstname" name="firstname" required placeholder="First name">
                <input type="text" id="middlename" name="middlename"  placeholder="Middle name">   

                <label for="Age">Age</label>
                <input type="text" id="age" name="age"  pattern="[0-9]+" required> 

                <label for="Birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" required> 

    
                <br><label for="Address">Address</label>
                <input type="text" id="homeAddress" name="homeAddress" required>


            </div>

            <div class="father-details">
                <label for="FatherName">Father's Name</label>
                <input type="text" id="fathername" name="fathername"  >
                <input type="text" class="telephoneNum" name="fathertelno" pattern="[0-9]+"  placeholder="Telephone No.">
            </div>

            <div class="mother-details">
                <label for="MotherName">Mother's Name</label>
                <input type="text" id="mothername" name="mothername"  >
                <input type="text" class="telephoneNum" name="mothertelno" pattern="[0-9]+" placeholder="Telephone No.">
            </div>

            <div class="guardian-details">
                <label for="guardianName">Guardian's Name</label>
                <input type="text" id="guardianname" name="guardianname"  >
                <input type="text" class="telephoneNum" name="guardiantelno" pattern="[0-9]+" placeholder="Telephone No.">
            </div>
            <hr>
            <div>
                <p>Should your child need to go home during the day and we need to contact you, is there someone at your house who would care for the child?</p>
                <input type="radio" id="yesAvailableGuardian" name="YesNoAvailGuardian" value="Yes" required>
                <label for="yesAvailableGuardian">Yes</label><br>
                <input type="radio" id="noAvailableGuardian" name="YesNoAvailGuardian" value="No" required>
                <label for="noAvailableGuardian">No</label><br>

                <p>If yes, please provide the name of person and contact no. :</p>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="AvailableGuardianName" name="availableGuardianName" required>
                    <input type="text" id="AvailableGuardianTelno" name="availableGuardianTelno" pattern="[0-9]+" placeholder="Telephone No." required>
                </div>
            </div>
            <hr>
            
            <div class="medical-history">

                <h2>Medical History</h2>

                <p>Has your child been tested positive for COVID 19?</p>
                <input type="radio" id="yesTestedPositive" class="yesTested" name="TestedPositive" value="yes">
                <label for="yesTestedPositive">Yes</label><br>
                <input type="radio" id="noTestedPositive" class="noTested" name="TestedPositive" value="no">
                <label for="yesTestedPositive">No</label><br>
                <label>If yes, please specify the date</label>
                <input type="date" id="dateTestedPositive" name="dateTested" value="Date">
                <hr>

                <p>Does your child bruise easily or bleed excessively after injury or tooth extraction?</p>
                <input type="radio" id="yesEasilyExcessively" class="yes" name="BruiseBleed" value="Yes">
                <label for="yes">Yes</label><br>
                <input type="radio" id="noEasilyExcessively" class="no" name="BruiseBleed" value="No">
                <label for="no">No</label><br>
                <label>If yes, please specify initial management.</label>
                <input type="text" id="BruiseBleedInitialMngmt" class="initialMngmt" name="BruiseBleedInitialMngmt">
                <hr>

                <p>Does your child have history of medical problems or disabilities about which Aquinas school should know?</p>
                <input type="radio" id="yesHistoryMedicalProb" class="yes" name="HistoryMedicalProb" value="Yes">
                <label for="yes">Yes</label><br>
                <input type="radio" id="noHistoryMedicalProb" class="no" name="HistoryMedicalProb" value="No">
                <label for="no">No</label><br>
                <label>If yes, please specify initial management.</label>
                <input type="text" id="HistoryMedicalProbInitialMngmt" class="initialMngmt" name="HistoryMedicalProbInitialMngmt">
                <hr>

                <p>Does your child have special needs in vision, hearing or speech, etc?</p>
                <input type="radio" class="yes" name="SpecialNeeds" value="Yes">
                <label for="Yes">Yes</label><br>
                <input type="radio" class="no" name="SpecialNeeds" value="No">
                <label for="No">No</label><br>
                <hr>

                <p>Does your child have any allergies to medications,foods or insects bites?</p>
                <input type="radio" id="hasAllergies" class="yes" name="Allergies" value="Yes">
                <label for="Yes">Yes</label><br>
                <input type="radio" id="noAllergies" class="no" name="Allergies" value="No">
                <label for="No">No</label><br>
                <label>If yes, please specify.</label> 
                <input type="text" id="AllergiesInitialMngmt" class="specify" name="AllergiesInitialMngmt">
                <hr>

                <p>Has your child been admitted for the past 6 months or sought consultation due to significant complaints?</p>
                <input type="radio" id="Admitted" class="yes" name="Admitted" value="Yes">
                <label for="yes">Yes</label><br>
                <input type="radio" id="notAdmitted" class="no" name="Admitted" value="No">
                <label for="no">No</label><br>
                <label>If yes, please specify.</label>
                <input type="text" id="admittedSpecify" class="specify" name="admittedSpecify">
                <hr>

                <p><b>IMMUNIZATION</b> Complete?</p>
                <input type="radio" id="completeImmunization" class="yes" name="ImmunizationComplete" value="Yes">
                <label for="yes">Yes</label><br>
                <input type="radio" id="incompleteImmunization" class="no" name="ImmunizationComplete" value="No">
                <label for="no">No</label><br>
                <label>If not, please specify.</label>
                <input type="text" id="specifyImmunization" class="specify" name="specifyImmunization">
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
                <button type="submit" class="submitBtn">Submit</button>  
            </div>  

        </form>   
    </div>
    <script src="medical-validation.js"></script>
</body>
</html>