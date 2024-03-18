<?php 
    $servername = "localhost";
    $username = "root";
    $database = "emc_fo";
    $password = "Teru_bozu5162";

    $conn = new mysqli($servername, $username, "",$database);

    if(isset($_POST['delete']))
    {
      $student = mysqli_real_escape_string($conn, $_POST['delete']);

      $query = "DELETE FROM dental_student_details WHERE student_number = '$student' ";
      $query_run = mysqli_query( $conn, $query );

      if($query_run){
        header("Location: dentalstudentlist.php");
      } else {
        header("Location: dentalstudentlist.php");
      }
    }


    //student details
    $studentnumber = $_POST['studentnumber'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $hospital = $_POST['hospital'];
    $school = $_POST['school'];
    $dob = $_POST['dob'];
    $occupation = $_POST['occupation'];
    $civilstatus = $_POST['civilstatus'];
    $address = $_POST['address'];
    $patient = $_POST['patient'];

    //teeth assessment
    $operation55 = $_POST['operation55'];
    $operation54 = $_POST['operation54'];
    $operation53 = $_POST['operation53'];
    $operation52 = $_POST['operation52'];
    $operation51 = $_POST['operation51'];

    $condition55 = $_POST['condition55'];
    $condition54 = $_POST['condition54'];
    $condition53 = $_POST['condition53'];
    $condition52 = $_POST['condition52'];
    $condition51 = $_POST['condition51'];

    $operation18 = $_POST['operation18'];
    $operation17 = $_POST['operation17'];
    $operation16 = $_POST['operation16'];
    $operation15 = $_POST['operation15'];
    $operation14 = $_POST['operation14'];
    $operation13 = $_POST['operation13'];
    $operation12 = $_POST['operation12'];
    $operation11 = $_POST['operation11'];

    $condition18 = $_POST['condition18'];
    $condition17 = $_POST['condition17'];
    $condition16 = $_POST['condition16'];
    $condition15 = $_POST['condition15'];
    $condition14 = $_POST['condition14'];
    $condition13 = $_POST['condition13'];
    $condition12 = $_POST['condition12'];
    $condition11 = $_POST['condition11'];

    $operation61 = $_POST['operation61'];
    $operation62 = $_POST['operation62'];
    $operation63 = $_POST['operation63'];
    $operation64 = $_POST['operation64'];
    $operation65 = $_POST['operation65'];

    $condition61 = $_POST['condition61'];
    $condition62 = $_POST['condition62'];
    $condition63 = $_POST['condition63'];
    $condition64 = $_POST['condition64'];
    $condition65 = $_POST['condition65'];

    $operation21 = $_POST['operation21'];
    $operation22 = $_POST['operation22'];
    $operation23 = $_POST['operation23'];
    $operation24 = $_POST['operation24'];
    $operation25 = $_POST['operation25'];
    $operation26 = $_POST['operation26'];
    $operation27 = $_POST['operation27'];
    $operation28 = $_POST['operation28'];

    $condition21 = $_POST['condition21'];
    $condition22 = $_POST['condition22'];
    $condition23 = $_POST['condition23'];
    $condition24 = $_POST['condition24'];
    $condition25 = $_POST['condition25'];
    $condition26 = $_POST['condition26'];
    $condition27 = $_POST['condition27'];
    $condition28 = $_POST['condition28'];

    $operation48 = $_POST['operation48'];
    $operation47 = $_POST['operation47'];
    $operation46 = $_POST['operation46'];
    $operation45 = $_POST['operation45'];
    $operation44 = $_POST['operation44'];
    $operation43 = $_POST['operation43'];
    $operation42 = $_POST['operation42'];
    $operation41 = $_POST['operation41'];

    $condition48 = $_POST['condition48'];
    $condition47 = $_POST['condition47'];
    $condition46 = $_POST['condition46'];
    $condition45 = $_POST['condition45'];
    $condition44 = $_POST['condition44'];
    $condition43 = $_POST['condition43'];
    $condition42 = $_POST['condition42'];
    $condition41 = $_POST['condition41'];

    $operation85 = $_POST['operation85'];
    $operation84 = $_POST['operation84'];
    $operation83 = $_POST['operation83'];
    $operation82 = $_POST['operation82'];
    $operation81 = $_POST['operation81'];

    $condition85 = $_POST['condition85'];
    $condition84 = $_POST['condition84'];
    $condition83 = $_POST['condition83'];
    $condition82 = $_POST['condition82'];
    $condition81 = $_POST['condition81'];

    $operation31 = $_POST['operation31'];
    $operation32 = $_POST['operation32'];
    $operation33 = $_POST['operation33'];
    $operation34 = $_POST['operation34'];
    $operation35 = $_POST['operation35'];
    $operation36 = $_POST['operation36'];
    $operation37 = $_POST['operation37'];
    $operation38 = $_POST['operation38'];

    $condition31 = $_POST['condition31'];
    $condition32 = $_POST['condition32'];
    $condition33 = $_POST['condition33'];
    $condition34 = $_POST['condition34'];
    $condition35 = $_POST['condition35'];
    $condition36 = $_POST['condition36'];
    $condition37 = $_POST['condition37'];
    $condition38 = $_POST['condition38'];

    $operation71 = $_POST['operation71'];
    $operation72 = $_POST['operation72'];
    $operation73 = $_POST['operation73'];
    $operation74 = $_POST['operation74'];
    $operation75 = $_POST['operation75'];

    $condition71 = $_POST['condition71'];
    $condition72 = $_POST['condition72'];
    $condition73 = $_POST['condition73'];
    $condition74 = $_POST['condition74'];
    $condition75 = $_POST['condition75'];

    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $date3 = $_POST['date3'];
    $date4 = $_POST['date4'];
    $date5 = $_POST['date5'];
    $date6 = $_POST['date6'];
    $date7 = $_POST['date7'];

    $ageLastBday1 = $_POST['ageLastBday1'];
    $ageLastBday2 = $_POST['ageLastBday2'];
    $ageLastBday3 = $_POST['ageLastBday3'];
    $ageLastBday4 = $_POST['ageLastBday4'];
    $ageLastBday5 = $_POST['ageLastBday5'];
    $ageLastBday6 = $_POST['ageLastBday6'];
    $ageLastBday7 = $_POST['ageLastBday7'];

    $promptDentalCaries1 = $_POST['promptDentalCaries1'];
    $promptDentalCaries2 = $_POST['promptDentalCaries2'];
    $promptDentalCaries3 = $_POST['promptDentalCaries3'];
    $promptDentalCaries4 = $_POST['promptDentalCaries4'];
    $promptDentalCaries5 = $_POST['promptDentalCaries5'];
    $promptDentalCaries6 = $_POST['promptDentalCaries6'];
    $promptDentalCaries7 = $_POST['promptDentalCaries7'];

    $promptGingivitis1 = $_POST['promptGingivitis1'];
    $promptGingivitis2 = $_POST['promptGingivitis2'];
    $promptGingivitis3 = $_POST['promptGingivitis3'];
    $promptGingivitis4 = $_POST['promptGingivitis4'];
    $promptGingivitis5 = $_POST['promptGingivitis5'];
    $promptGingivitis6 = $_POST['promptGingivitis6'];
    $promptGingivitis7 = $_POST['promptGingivitis7'];

    $promptPeriodontal1 = $_POST['promptPeriodontal1'];
    $promptPeriodontal2 = $_POST['promptPeriodontal2'];
    $promptPeriodontal3 = $_POST['promptPeriodontal3'];
    $promptPeriodontal4 = $_POST['promptPeriodontal4'];
    $promptPeriodontal5 = $_POST['promptPeriodontal5'];
    $promptPeriodontal6 = $_POST['promptPeriodontal6'];
    $promptPeriodontal7 = $_POST['promptPeriodontal7'];

    $promptOralDebris1 = $_POST['promptOralDebris1'];
    $promptOralDebris2 = $_POST['promptOralDebris2'];
    $promptOralDebris3 = $_POST['promptOralDebris3'];
    $promptOralDebris4 = $_POST['promptOralDebris4'];
    $promptOralDebris5 = $_POST['promptOralDebris5'];
    $promptOralDebris6 = $_POST['promptOralDebris6'];
    $promptOralDebris7 = $_POST['promptOralDebris7'];

    $promptCalculus1 = $_POST['promptCalculus1'];
    $promptCalculus2 = $_POST['promptCalculus2'];
    $promptCalculus3 = $_POST['promptCalculus3'];
    $promptCalculus4 = $_POST['promptCalculus4'];
    $promptCalculus5 = $_POST['promptCalculus5'];
    $promptCalculus6 = $_POST['promptCalculus6'];
    $promptCalculus7 = $_POST['promptCalculus7'];

    $promptNeoplasm1 = $_POST['promptNeoplasm1'];
    $promptNeoplasm2 = $_POST['promptNeoplasm2'];
    $promptNeoplasm3 = $_POST['promptNeoplasm3'];
    $promptNeoplasm4 = $_POST['promptNeoplasm4'];
    $promptNeoplasm5 = $_POST['promptNeoplasm5'];
    $promptNeoplasm6 = $_POST['promptNeoplasm6'];
    $promptNeoplasm7 = $_POST['promptNeoplasm7'];

    $promptDFAnomaly1 = $_POST['promptDFAnomaly1'];
    $promptDFAnomaly2 = $_POST['promptDFAnomaly2'];
    $promptDFAnomaly3 = $_POST['promptDFAnomaly3'];
    $promptDFAnomaly4 = $_POST['promptDFAnomaly4'];
    $promptDFAnomaly5 = $_POST['promptDFAnomaly5'];
    $promptDFAnomaly6 = $_POST['promptDFAnomaly6'];
    $promptDFAnomaly7 = $_POST['promptDFAnomaly7'];

    $teeth1 = $_POST['teeth1'];
    $teeth2 = $_POST['teeth2'];
    $teeth3 = $_POST['teeth3'];
    $teeth4 = $_POST['teeth4'];
    $teeth5 = $_POST['teeth5'];
    $teeth6 = $_POST['teeth6'];
    $teeth7 = $_POST['teeth7'];
    $teeth8 = $_POST['teeth8'];
    $teeth9 = $_POST['teeth9'];
    $teeth10 = $_POST['teeth10'];
    $teeth11 = $_POST['teeth11'];
    $teeth12 = $_POST['teeth12'];
    $teeth13 = $_POST['teeth13'];
    $teeth14 = $_POST['teeth14'];

    $cariesFilling1 = $_POST['cariesFilling1'];
    $cariesFilling2 = $_POST['cariesFilling2'];
    $cariesFilling3 = $_POST['cariesFilling3'];
    $cariesFilling4 = $_POST['cariesFilling4'];
    $cariesFilling5 = $_POST['cariesFilling5'];
    $cariesFilling6 = $_POST['cariesFilling6'];
    $cariesFilling7 = $_POST['cariesFilling7'];
    $cariesFilling8 = $_POST['cariesFilling8'];
    $cariesFilling9 = $_POST['cariesFilling9'];
    $cariesFilling10 = $_POST['cariesFilling10'];
    $cariesFilling11 = $_POST['cariesFilling11'];
    $cariesFilling12 = $_POST['cariesFilling12'];
    $cariesFilling13 = $_POST['cariesFilling13'];
    $cariesFilling14 = $_POST['cariesFilling14'];

    $carriesExtract1 = $_POST['carriesExtract1'];
    $carriesExtract2 = $_POST['carriesExtract2'];
    $carriesExtract3 = $_POST['carriesExtract3'];
    $carriesExtract4 = $_POST['carriesExtract4'];
    $carriesExtract5 = $_POST['carriesExtract5'];
    $carriesExtract6 = $_POST['carriesExtract6'];
    $carriesExtract7 = $_POST['carriesExtract7'];
    $carriesExtract8 = $_POST['carriesExtract8'];
    $carriesExtract9 = $_POST['carriesExtract9'];
    $carriesExtract10 = $_POST['carriesExtract10'];
    $carriesExtract11 = $_POST['carriesExtract11'];
    $carriesExtract12 = $_POST['carriesExtract12'];
    $carriesExtract13 = $_POST['carriesExtract13'];
    $carriesExtract14 = $_POST['carriesExtract14'];

    $rootFragment1 = $_POST['rootFragment1'];
    $rootFragment2 = $_POST['rootFragment2'];
    $rootFragment3 = $_POST['rootFragment3'];
    $rootFragment4 = $_POST['rootFragment4'];
    $rootFragment5 = $_POST['rootFragment5'];
    $rootFragment6 = $_POST['rootFragment6'];
    $rootFragment7 = $_POST['rootFragment7'];
    $rootFragment8 = $_POST['rootFragment8'];
    $rootFragment9 = $_POST['rootFragment9'];
    $rootFragment10 = $_POST['rootFragment10'];
    $rootFragment11 = $_POST['rootFragment11'];
    $rootFragment12 = $_POST['rootFragment12'];
    $rootFragment13 = $_POST['rootFragment13'];
    $rootFragment14 = $_POST['rootFragment14'];

    $missingCaries1 = $_POST['missingCaries1'];
    $missingCaries2 = $_POST['missingCaries2'];
    $missingCaries3 = $_POST['missingCaries3'];
    $missingCaries4 = $_POST['missingCaries4'];
    $missingCaries5 = $_POST['missingCaries5'];
    $missingCaries6 = $_POST['missingCaries6'];
    $missingCaries7 = $_POST['missingCaries7'];

    $filledRestored1 = $_POST['filledRestored1'];
    $filledRestored2 = $_POST['filledRestored2'];
    $filledRestored3 = $_POST['filledRestored3'];
    $filledRestored4 = $_POST['filledRestored4'];
    $filledRestored5 = $_POST['filledRestored5'];
    $filledRestored6 = $_POST['filledRestored6'];
    $filledRestored7 = $_POST['filledRestored7'];
    $filledRestored8 = $_POST['filledRestored8'];
    $filledRestored9 = $_POST['filledRestored9'];
    $filledRestored10 = $_POST['filledRestored10'];
    $filledRestored11 = $_POST['filledRestored11'];
    $filledRestored12 = $_POST['filledRestored12'];
    $filledRestored13 = $_POST['filledRestored13'];
    $filledRestored14 = $_POST['filledRestored14'];

    $totaldfDMF1 = $_POST['totaldfDMF1'];
    $totaldfDMF2 = $_POST['totaldfDMF2'];
    $totaldfDMF3 = $_POST['totaldfDMF3'];
    $totaldfDMF4 = $_POST['totaldfDMF4'];
    $totaldfDMF5 = $_POST['totaldfDMF5'];
    $totaldfDMF6 = $_POST['totaldfDMF6'];
    $totaldfDMF7 = $_POST['totaldfDMF7'];
    $totaldfDMF8 = $_POST['totaldfDMF8'];
    $totaldfDMF9 = $_POST['totaldfDMF9'];
    $totaldfDMF10 = $_POST['totaldfDMF10'];
    $totaldfDMF11 = $_POST['totaldfDMF11'];
    $totaldfDMF12 = $_POST['totaldfDMF12'];
    $totaldfDMF13 = $_POST['totaldfDMF13'];
    $totaldfDMF14 = $_POST['totaldfDMF14'];

    $fluorideApplication1 = $_POST['fluorideApplication1'];
    $fluorideApplication2 = $_POST['fluorideApplication2'];
    $fluorideApplication3 = $_POST['fluorideApplication3'];
    $fluorideApplication4 = $_POST['fluorideApplication4'];
    $fluorideApplication5 = $_POST['fluorideApplication5'];
    $fluorideApplication6 = $_POST['fluorideApplication6'];
    $fluorideApplication7 = $_POST['fluorideApplication7'];


    $examinerName1 = $_POST['examinerName1'];
    $examinerName2 = $_POST['examinerName2'];
    $examinerName3 = $_POST['examinerName3'];
    $examinerName4 = $_POST['examinerName4'];
    $examinerName5 = $_POST['examinerName5'];
    $examinerName6 = $_POST['examinerName6'];
    $examinerName7 = $_POST['examinerName7'];

    // Create connection
    

     // Check connection
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO dental_student_details(student_number,lastname,firstname,middlename,hospital_municipality,school_firm,birthdate,occupation,civil_status,address,patient_status)
              VALUES('$studentnumber','$lastname',' $firstname','$middlename','$hospital','$school','$dob','$occupation','$civilstatus',' $address',' $patient')";

     
     $sql2 = "INSERT INTO upper_right(student_number,operation_55, operation_54, operation_53, operation_52, operation_51,condition_55,condition_54, condition_53,condition_52, condition_51, operation_18,
                                       operation_17,  operation_16,  operation_15,  operation_14,  operation_13,  operation_12,  operation_11, condition_18,condition_17,condition_16,condition_15,condition_14,condition_13,condition_12,condition_11)
                VALUES('$studentnumber','$operation55','$operation54',' $operation53','$operation52','$operation51','$condition55',' $condition54','  $condition53 ',' $condition52','$condition51','$operation18','$operation17','$operation16','$operation15','$operation14',
                        '$operation13','$operation12','$operation11','$condition18','$condition17','$condition16','$condition15','$condition14','$condition13','$condition12','$condition11')";
      
      $sql3 = "INSERT INTO upper_left(student_number,operation_61,operation_62,operation_63,operation_64,operation_65,condition_61,condition_62,condition_63,condition_64,condition_65,operation_21,operation_22,operation_23,operation_24,operation_25,
                            operation_26,operation_27,operation_28, condition_21,condition_22,condition_23,condition_24,condition_25,condition_26,condition_27,condition_28)
                VALUES('$studentnumber',' $operation61 ', '$operation62',' $operation63','$operation64', '$operation65','$condition61',' $condition62',' $condition63',' $condition64','$condition65',                  
                       ' $operation21 ', '$operation22 ', '$operation23 ', '$operation24 ', '$operation25 ', ' $operation26  ', '$operation27 ', '$operation28  ', '$condition21 ', '$condition22 ', '$condition23 ','$condition24 ','$condition25 ', '$condition26 ', '$condition27 ', '$condition28 ') ";
      
      $sql4 = "INSERT INTO lower_right(student_number,operation_48,operation_47,operation_46,operation_45,operation_44,operation_43,operation_42,operation_41,condition_48,condition_47,condition_46 ,condition_45 ,condition_44 ,condition_43 ,condition_42 ,condition_41,
                operation_85,operation_84,operation_83,operation_82,operation_81,condition_85,condition_84,condition_83,condition_82,condition_81)
                VALUES('$studentnumber','$operation48','$operation47','$operation46','$operation45','$operation44','$operation43','$operation42','$operation41','$condition48', '$condition47','$condition46','$condition45','$condition44','$condition43','$condition42','$condition41',
                        '$operation85','$operation84','$operation83','$operation82','$operation81','$condition85','$condition84','$condition83','$condition82','$condition81')";
      $sql23 = "INSERT INTO lower_left (student_number,operation_31,operation_32,operation_33,operation_34,operation_35,operation_36,operation_37,operation_38,condition_31,condition_32,condition_33,condition_34,condition_35,condition_36,condition_37,condition_38,operation_71,operation_72,operation_73,operation_74,operation_75,condition_71,condition_72,condition_73,condition_74,condition_75 )
                VALUES ('$studentnumber','$operation31','$operation32','$operation33','$operation34','$operation35','$operation36','$operation37','$operation38','$condition31','$condition32','$condition33','$condition34','$condition35','$condition36','$condition37','$condition38',
                        '$operation71','$operation72','$operation73','$operation74','$operation75','$condition71','$condition72','$condition73','$condition74','$condition75' )";
      
      $sql5 = "INSERT INTO examination_date(student_number,date_1,date_2,date_3,date_4,date_5,date_6,date_7)
                VALUES('$studentnumber','$date1','$date2','$date3','$date4','$date5','$date6','$date7')";

      $sql6 = "INSERT INTO age_last_birthday(student_number,age_1,age_2,age_3,age_4,age_5,age_6,age_7)
                VALUES('$studentnumber', '$ageLastBday1', '$ageLastBday2', '$ageLastBday3 ', '$ageLastBday4 ', '$ageLastBday5 ', '$ageLastBday6 ', '$ageLastBday7 ')";
     
     $sql7 = "INSERT INTO presence_dental_caries(student_number,dentalCaries_1,dentalCaries_2,dentalCaries_3,dentalCaries_4,dentalCaries_5,dentalCaries_6,dentalCaries_7)
                VALUES('$studentnumber','$promptDentalCaries1 ','$promptDentalCaries2 ', ' $promptDentalCaries3 ', '$promptDentalCaries4 ' , '$promptDentalCaries5 ', '$promptDentalCaries6 ', '$promptDentalCaries7 ' )";
     
     $sql8 = "INSERT INTO presence_gingivitis(student_number,gingivitis1,gingivitis2,gingivitis3,gingivitis4,gingivitis5,gingivitis6,gingivitis7 )
                VALUES('$studentnumber','$promptGingivitis1','$promptGingivitis2','$promptGingivitis3','$promptGingivitis4','$promptGingivitis5','$promptGingivitis6','$promptGingivitis7')";
      
      $sql9 = "INSERT INTO presence_periodontal_pocket(student_number,periodontal_pocket1,periodontal_pocket2,periodontal_pocket3,periodontal_pocket4,periodontal_pocket5,periodontal_pocket6,periodontal_pocket7)
                VALUES('$studentnumber ', ' $promptPeriodontal1 ', ' $promptPeriodontal2 ', ' $promptPeriodontal3 ', ' $promptPeriodontal4 ', ' $promptPeriodontal5 ', ' $promptPeriodontal6 ', ' $promptPeriodontal7 ')";
      
      $sql10 = "INSERT INTO presence_oral_debris(student_number,oraldebris1,oraldebris2,oraldebris3,oraldebris4,oraldebris5,oraldebris6,oraldebris7)
                VALUES('$studentnumber ', '$promptOralDebris1 ', '$promptOralDebris2 ', '$promptOralDebris3 ', '$promptOralDebris4 ', '$promptOralDebris5 ', '$promptOralDebris6 ', '$promptOralDebris7 ' )";
      
      $sql11 = "INSERT INTO presence_calculus(student_number,calculus1,calculus2,calculus3,calculus4,calculus5,calculus6,calculus7)
                VALUES('$studentnumber ', '$promptCalculus1','$promptCalculus2','$promptCalculus3','$promptCalculus4','$promptCalculus5','$promptCalculus6','$promptCalculus7')";
      
      $sql12 = "INSERT INTO presence_neoplasm (student_number,neoplasm1,neoplasm2,neoplasm3,neoplasm4,neoplasm5,neoplasm6,neoplasm7)
                VALUES('$studentnumber',' $promptNeoplasm1',' $promptNeoplasm2',' $promptNeoplasm3',' $promptNeoplasm4',' $promptNeoplasm5',' $promptNeoplasm6',' $promptNeoplasm7')";
      
      $sql13 = "INSERT INTO presence_df_anomaly(student_number,DF_anomaly1,DF_anomaly2,DF_anomaly3,DF_anomaly4,DF_anomaly5,DF_anomaly6,DF_anomaly7)
                VALUES('$studentnumber',' $promptDFAnomaly1',' $promptDFAnomaly2',' $promptDFAnomaly3',' $promptDFAnomaly4',' $promptDFAnomaly5',' $promptDFAnomaly6',' $promptDFAnomaly7')";
      
      $sql14 = "INSERT INTO num_teeth_present(student_number,teeth1,teeth2,teeth3,teeth4,teeth5,teeth6,teeth7,teeth8,teeth9,teeth10,teeth11,teeth12,teeth13,teeth14)
                VALUES('$studentnumber','$teeth1','$teeth2','$teeth3','$teeth4','$teeth5','$teeth6','$teeth7','$teeth8','$teeth9','$teeth10','$teeth11','$teeth12','$teeth13','$teeth14')";
      
      $sql15 = "INSERT INTO caries_indicated_filling(student_number,caries_filling1,caries_filling2,caries_filling3,caries_filling4,caries_filling5,caries_filling6,caries_filling7,caries_filling8,caries_filling9,caries_filling10,caries_filling11,caries_filling12,caries_filling13,caries_filling14)
                VALUES('$studentnumber',' $cariesFilling1',' $cariesFilling2',' $cariesFilling3',' $cariesFilling4',' $cariesFilling5',' $cariesFilling6',' $cariesFilling7',' $cariesFilling8',' $cariesFilling9',' $cariesFilling10',' $cariesFilling11',' $cariesFilling12',' $cariesFilling13',' $cariesFilling14')";
      
      $sql16 = "INSERT INTO caries_indicated_extraction(student_number,indicated_extraction1,indicated_extraction2,indicated_extraction3,indicated_extraction4,indicated_extraction5,indicated_extraction6,indicated_extraction7,indicated_extraction8,indicated_extraction9,indicated_extraction10,indicated_extraction11,indicated_extraction12,indicated_extraction13,indicated_extraction14 )
                VALUES('$studentnumber',' $carriesExtract1','$carriesExtract2','$carriesExtract3','$carriesExtract4','$carriesExtract5','$carriesExtract6','$carriesExtract7','$carriesExtract8','$carriesExtract9','$carriesExtract10','$carriesExtract11','$carriesExtract12','$carriesExtract13','$carriesExtract14' )";
      
      $sql17 = "INSERT INTO root_fragment(student_number,rootFragment1,rootFragment2,rootFragment3,rootFragment4,rootFragment5,rootFragment6,rootFragment7,rootFragment8,rootFragment9,rootFragment10,rootFragment11,rootFragment12,rootFragment13,rootFragment14 )
                VALUES('$studentnumber',' $rootFragment1',' $rootFragment2',' $rootFragment3',' $rootFragment4',' $rootFragment5',' $rootFragment6',' $rootFragment7',' $rootFragment8',' $rootFragment9',' $rootFragment10',' $rootFragment11',' $rootFragment12',' $rootFragment13',' $rootFragment14' )";
      
      $sql18 = "INSERT INTO missing_caries(student_number,missingCaries1,missingCaries2,missingCaries3,missingCaries4,missingCaries5,missingCaries6,missingCaries7)
                VALUES('$studentnumber','$missingCaries1','$missingCaries2','$missingCaries3','$missingCaries4','$missingCaries5','$missingCaries6','$missingCaries7' )";
      
      $sql19 = "INSERT INTO filled_restored(student_number,filledRestored1,filledRestored2,filledRestored3,filledRestored4,filledRestored5,filledRestored6,filledRestored7,filledRestored8,filledRestored9,filledRestored10,filledRestored11,filledRestored12,filledRestored13,filledRestored14 )
                VALUES('$studentnumber',' $filledRestored1',' $filledRestored2',' $filledRestored3',' $filledRestored4',' $filledRestored5',' $filledRestored6',' $filledRestored7',' $filledRestored8',' $filledRestored9',' $filledRestored10',' $filledRestored11',' $filledRestored12',' $filledRestored13',' $filledRestored14' )";
      $sql20 = "INSERT INTO total_df_dmf(student_number,df_DMF1,df_DMF2,df_DMF3,df_DMF4,df_DMF5,df_DMF6,df_DMF7,df_DMF8,df_DMF9,df_DMF10,df_DMF11,df_DMF12,df_DMF13,df_DMF14 )
                VALUES ('$studentnumber','$totaldfDMF1','$totaldfDMF2','$totaldfDMF3','$totaldfDMF4','$totaldfDMF5','$totaldfDMF6','$totaldfDMF7','$totaldfDMF8','$totaldfDMF9','$totaldfDMF10','$totaldfDMF11','$totaldfDMF12','$totaldfDMF13','$totaldfDMF14'  ) ";
      $sql21 = "INSERT INTO fluoride_application(student_number,fluoride_application1,fluoride_application2,fluoride_application3,fluoride_application4,fluoride_application5,fluoride_application6,fluoride_application7)
                VALUES ('$studentnumber','$fluorideApplication1','$fluorideApplication2','$fluorideApplication3','$fluorideApplication4','$fluorideApplication5','$fluorideApplication6','$fluorideApplication7' )";
      $sql22 = "INSERT INTO examiner_name(student_number,examiner_name1,examiner_name2,examiner_name3,examiner_name4,examiner_name5,examiner_name6,examiner_name7 )
                VALUES ('$studentnumber','$examinerName1','$examinerName2','$examinerName3','$examinerName4','$examinerName5','$examinerName6','$examinerName7' ) ";

    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3)  === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql23) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE && $conn->query($sql8) === TRUE && $conn->query($sql9) === TRUE && $conn->query($sql10) === TRUE && $conn->query($sql11) === TRUE && $conn->query($sql12) === TRUE && $conn->query($sql13) === TRUE && $conn->query($sql14) === TRUE && $conn->query($sql15) === TRUE && $conn->query($sql16) === TRUE && $conn->query($sql17) === TRUE && $conn->query($sql18) === TRUE && $conn->query($sql19) === TRUE && $conn->query($sql20) === TRUE && $conn->query($sql21) === TRUE && $conn->query($sql22) === TRUE){
      header("Location: dashboard.html");
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

?>