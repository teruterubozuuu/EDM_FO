<?php
    $servername = "localhost";
    $username = "root";
    $database = "emc_fo";
    $password = "Teru_bozu5162";

    //Student Details
    $yearLevel = $_POST['yearlevel'];
    $studentNumber = $_POST['studentNumber'];
    $section = $_POST['section'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $birthday = date('Y-m-d', strtotime($_POST['birthday']));
    $address = $_POST['homeAddress'];
    $fathername = $_POST['fathername'];
    $fathertelno = $_POST['fathertelno'];
    $mothername = $_POST['mothername'];
    $mothertelno = $_POST['mothertelno'];
    $guardianname = $_POST['guardianname'];
    $guardiantelno = $_POST['guardiantelno'];
    $yesNoAvailGuardian = $_POST['YesNoAvailGuardian'];
    $availGuardianName = $_POST['availableGuardianName'];
    $availGuardianTelno = $_POST['availableGuardianTelno'];

    //Student Medical History
    $testedPositive =$_POST['TestedPositive'];
    $testedPositive_date = date('Y-m-d', strtotime($_POST['dateTested']));
    $bruiseBleed =$_POST['BruiseBleed'];
    $bruiseBleedInitialMngmt =$_POST['BruiseBleedInitialMngmt'];
    $historyMedicalProb =$_POST['HistoryMedicalProb'];
    $historyMedicalProbInitialMngmt=$_POST['HistoryMedicalProbInitialMngmt'];
    $specialNeeds =$_POST['SpecialNeeds'];
    $allergies=$_POST['Allergies'];
    $allergiesInitialMngmt=$_POST['AllergiesInitialMngmt'];
    $admitted =$_POST['Admitted'];
    $admittedSpecify =$_POST['admittedSpecify'];
    $immunizationComplete =$_POST['ImmunizationComplete'];
    $specifyImmunization =$_POST['specifyImmunization'];
    //covid19 vaccine
    $checkbox1 = isset($_POST['COVID19VACCINE1']) ? $_POST['COVID19VACCINE1'] : '';
    $checkbox2 = isset($_POST['COVID19VACCINE2']) ? $_POST['COVID19VACCINE2'] : '';
    $checkbox3 = isset($_POST['COVID19VACCINE3']) ? $_POST['COVID19VACCINE3'] : '';
    $checkbox4 = isset($_POST['COVID19VACCINE4']) ? $_POST['COVID19VACCINE4'] : '';
    $checkbox5 = isset($_POST['COVID19VACCINE5']) ? $_POST['COVID19VACCINE5'] : '';

  // Concatenate with commas
  $combinedValues = $checkbox1 . ',' . $checkbox2 . ',' . $checkbox3 . ',' . $checkbox4 . ',' . $checkbox5;
    
    
    // Create connection
    $conn = new mysqli($servername, $username, "", $database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO student_details (student_number,student_lastname,student_firstname,student_middlename,year_level,section,age,birthday,address, father_name,father_telno,mother_name,mother_telno,guardian_name,guardian_telno, guardian_availability, availableGuardian_name, availableGuardian_telno)
            VALUES('$studentNumber','$lastname','$firstname',' $middlename','$yearLevel','$section','$age','$birthday','$address','$fathername','$fathertelno','$mothername','$mothertelno','$guardianname','$guardiantelno','$yesNoAvailGuardian',' $availGuardianName','$availGuardianTelno')";
    $sql2= "INSERT INTO medical_history(student_number,hasTestedPositive_COVID19,	testedPositive_date,	bruiseEasily_bleedExcessively,	bruiseBleed_initialManagement,	hasHistory_medicalProblems,	medicalProblem_initialManagement,	hasSpecial_needs,	has_allergies,	specify_allergies,	admitted_dueToComplaints,	admitted_specification,	complete_immunization,	immunization_specification,	COVID19_vaccine	)
            VALUES('$studentNumber','$testedPositive','$testedPositive_date','$bruiseBleed','$bruiseBleedInitialMngmt','$historyMedicalProb','$historyMedicalProbInitialMngmt','$specialNeeds','$allergies','$allergiesInitialMngmt',' $admitted','$admittedSpecify','$immunizationComplete','$specifyImmunization','$combinedValues')";

    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE ) {
      echo "Record inserted successfully";
      header("Location: studentlist.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

?>