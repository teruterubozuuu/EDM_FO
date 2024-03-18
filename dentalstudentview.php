<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Student</title>
    <link rel="stylesheet" href="dental.css">
</head>
<body>

    <?php
    if(isset($_GET['id']))
    {
        $student_id = mysqli_real_escape_string($con, $_GET['id']);
        $query = "SELECT * FROM 
                    dental_student_details 
                    INNER JOIN upper_right 
                        ON dental_student_details.student_number = upper_right.student_number 
                    INNER JOIN upper_left
                        ON dental_student_details.student_number = upper_left.student_number
                    INNER JOIN lower_right
                        ON dental_student_details.student_number = lower_right.student_number
                    INNER JOIN lower_left
                        ON dental_student_details.student_number = lower_left.student_number
                    INNER JOIN age_last_birthday
                        ON dental_student_details.student_number = age_last_birthday.student_number 
                    INNER JOIN caries_indicated_extraction
                        ON dental_student_details.student_number = caries_indicated_extraction.student_number 
                    INNER JOIN caries_indicated_filling
                        ON dental_student_details.student_number = caries_indicated_filling.student_number 
                    INNER JOIN examination_date
                        ON dental_student_details.student_number = examination_date.student_number 
                    INNER JOIN examiner_name
                        ON dental_student_details.student_number = examiner_name.student_number 
                    INNER JOIN filled_restored
                        ON dental_student_details.student_number = filled_restored.student_number 
                    INNER JOIN fluoride_application
                        ON dental_student_details.student_number = fluoride_application.student_number 
                    INNER JOIN root_fragment
                        ON dental_student_details.student_number = root_fragment.student_number 
                    INNER JOIN total_df_dmf
                        ON dental_student_details.student_number = total_df_dmf.student_number 
                    INNER JOIN num_teeth_present
                        ON dental_student_details.student_number = num_teeth_present.student_number
                    INNER JOIN missing_caries
                        ON dental_student_details.student_number = missing_caries.student_number
                    INNER JOIN presence_dental_caries
                        ON dental_student_details.student_number = presence_dental_caries.student_number
                    INNER JOIN presence_calculus
                        ON dental_student_details.student_number = presence_calculus.student_number
                    INNER JOIN presence_df_anomaly
                        ON dental_student_details.student_number = presence_df_anomaly.student_number
                    INNER JOIN presence_gingivitis
                        ON dental_student_details.student_number = presence_gingivitis.student_number
                    INNER JOIN presence_neoplasm
                        ON dental_student_details.student_number = presence_neoplasm.student_number
                    INNER JOIN presence_oral_debris
                        ON dental_student_details.student_number = presence_oral_debris.student_number
                    INNER JOIN presence_periodontal_pocket
                        ON dental_student_details.student_number = presence_periodontal_pocket.student_number

                    WHERE dental_student_details.student_number = '$student_id' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0) 
        {
            $student = mysqli_fetch_array($query_run);
            ?>

<div class="dental-record">
        <form action="dentalrecords.php" method="POST">
            <h2>Dental Health Record</h2>
            <hr>
            <label class="label">Student number</label>
            <input type="text"  id="student-number" name="studentnumber"  required value="<?=$student["student_number"];?>" > <br>

            <label class="label">Name</label>
            <input type="text"  id="lastname" name="lastname"  placeholder="Last name" required value="<?=$student["lastname"];?>" >
            <input type="text"  id="firstname" name="firstname"  placeholder="First name" required value="<?=$student["firstname"];?>" >
            <input type="text" id="middlename" name="middlename"  placeholder="Middle name" value="<?=$student["middlename"];?>" >   
            <br>
            <label class="label" for="hospital">Hospital/Municipality</label>
            <input type="text" id="hospital" name="hospital" value="<?=$student["hospital_municipality"];?>" >
            <label class="label" for="school">School/Firm</label>
            <input type="text" id="school" name="school" value="<?=$student["school_firm"];?>" >
            <br>
            <label class="label" for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="<?=$student["birthdate"];?>" >
            <label class="label" for="occupation">Occupation</label>
            <input type="text" id="occupation" name="occupation" value="<?=$student["occupation"];?>" >
            <label class="label" for="civil-status">Civil Status</label>
            <input type="text" id="civil-status" name="civilstatus" value="<?=$student["civil_status"];?>" >
            <br>
            <label class="label" for="address">Address</label>
            <input type="text" id="address" name="address" value="<?=$student["address"];?>" >
            <br>
            <input type="radio" id="in-patient" name="patient" value="Yes" <?php if($student['patient_status'] == 'Yes') {echo "checked";}?>>
            <label class="label" for="in-patient">In Patient</label>
            <input type="radio" id="out-patient" name="patient" value="No" <?php if($student['patient_status'] == 'No') {echo "checked";}?>>
            <label class="label" for="out-patient">Out Patient</label>

            <hr>
            <h4>Upper Right</h4>
            <table>
                <tr class="label">
                    <th></th>
                    <th>55</th>
                    <th>54</th>
                    <th>53</th>
                    <th>52</th>
                    <th>51</th>
                </tr>
                
                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation55" required value="<?=$student["operation_55"];?>" ></td>
                    <td><input type="text" name="operation54" required value="<?=$student["operation_54"];?>" ></td>
                    <td><input type="text" name="operation53" required value="<?=$student["operation_53"];?>" ></td>
                    <td><input type="text" name="operation52" required value="<?=$student["operation_52"];?>" ></td>
                    <td><input type="text" name="operation51" required value="<?=$student["operation_51"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition55" required value="<?=$student["condition_55"];?>" ></td>
                    <td><input type="text" name="condition54" required value="<?=$student["condition_54"];?>" ></td>
                    <td><input type="text" name="condition53" required value="<?=$student["condition_53"];?>" ></td>
                    <td><input type="text" name="condition52" required value="<?=$student["condition_52"];?>" ></td>
                    <td><input type="text" name="condition51" required value="<?=$student["condition_51"];?>" ></td>
                </tr>   
            </table>
            <br>
            <table>
                <tr class="label">
                    <th></th>
                    <th >18</th>
                    <th>17</th>
                    <th>16</th>
                    <th>15</th>
                    <th>14</th>
                    <th>13</th>
                    <th>12</th>
                    <th>11</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation18" required value="<?=$student["operation_18"];?>" ></td>
                    <td><input type="text" name="operation17" required value="<?=$student["operation_17"];?>" ></td>
                    <td><input type="text" name="operation16" required value="<?=$student["operation_16"];?>" ></td>
                    <td><input type="text" name="operation15" required value="<?=$student["operation_15"];?>" ></td>
                    <td><input type="text" name="operation14" required value="<?=$student["operation_14"];?>" ></td>
                    <td><input type="text" name="operation13" required value="<?=$student["operation_13"];?>" ></td>
                    <td><input type="text" name="operation12" required value="<?=$student["operation_12"];?>" ></td>
                    <td><input type="text" name="operation11" required value="<?=$student["operation_11"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition18" required value="<?=$student["condition_18"];?>" ></td>
                    <td><input type="text" name="condition17" required value="<?=$student["condition_17"];?>" ></td>
                    <td><input type="text" name="condition16" required value="<?=$student["condition_16"];?>" ></td>
                    <td><input type="text" name="condition15" required value="<?=$student["condition_15"];?>" ></td>
                    <td><input type="text" name="condition14" required value="<?=$student["condition_14"];?>" ></td>
                    <td><input type="text" name="condition13" required value="<?=$student["condition_13"];?>" ></td>
                    <td><input type="text" name="condition12" required value="<?=$student["condition_12"];?>" ></td>
                    <td><input type="text" name="condition11" required value="<?=$student["condition_11"];?>" ></td>
                </tr>   
            </table>

            <h4>Upper Left</h4>

            <table>
                <tr class="label">
                    <th></th>
                    <th>61</th>
                    <th>62</th>
                    <th>63</th>
                    <th>64</th>
                    <th>65</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation61" required value="<?=$student["operation_61"];?>" ></td>
                    <td><input type="text" name="operation62" required value="<?=$student["operation_62"];?>" ></td>
                    <td><input type="text" name="operation63" required value="<?=$student["operation_63"];?>" ></td>
                    <td><input type="text" name="operation64" required value="<?=$student["operation_64"];?>" ></td>
                    <td><input type="text" name="operation65" required value="<?=$student["operation_65"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition61" required value="<?=$student["condition_61"];?>" ></td>
                    <td><input type="text" name="condition62" required value="<?=$student["condition_62"];?>" ></td>
                    <td><input type="text" name="condition63" required value="<?=$student["condition_63"];?>" ></td>
                    <td><input type="text" name="condition64" required value="<?=$student["condition_64"];?>" ></td>
                    <td><input type="text" name="condition65" required value="<?=$student["condition_65"];?>" ></td>
                </tr>   
            </table>
            <br>
            <table>
                <tr class="label">
                    <th></th>
                    <th >21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation21"required value="<?=$student["operation_21"];?>" ></td>
                    <td><input type="text" name="operation22"required value="<?=$student["operation_22"];?>" ></td>
                    <td><input type="text" name="operation23"required value="<?=$student["operation_23"];?>" ></td>
                    <td><input type="text" name="operation24"required value="<?=$student["operation_24"];?>" ></td>
                    <td><input type="text" name="operation25"required value="<?=$student["operation_25"];?>" ></td>
                    <td><input type="text" name="operation26"required value="<?=$student["operation_26"];?>" ></td>
                    <td><input type="text" name="operation27"required value="<?=$student["operation_27"];?>" ></td>
                    <td><input type="text" name="operation28"required value="<?=$student["operation_28"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition21"required value="<?=$student["condition_21"];?>" ></td>
                    <td><input type="text" name="condition22"required value="<?=$student["condition_22"];?>" ></td>
                    <td><input type="text" name="condition23"required value="<?=$student["condition_23"];?>" ></td>
                    <td><input type="text" name="condition24"required value="<?=$student["condition_24"];?>" ></td>
                    <td><input type="text" name="condition25"required value="<?=$student["condition_25"];?>" ></td>
                    <td><input type="text" name="condition26"required value="<?=$student["condition_26"];?>" ></td>
                    <td><input type="text" name="condition27"required value="<?=$student["condition_27"];?>" ></td>
                    <td><input type="text" name="condition28"required value="<?=$student["condition_28"];?>" ></td>
                </tr>   
            </table>

            <h4>Lower Right</h4>

            <table>
                <tr class="label">
                    <th></th>
                    <th >48</th>
                    <th>47</th>
                    <th>46</th>
                    <th>45</th>
                    <th>44</th>
                    <th>43</th>
                    <th>42</th>
                    <th>41</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation48" required value="<?=$student["operation_48"];?>" ></td>
                    <td><input type="text" name="operation47" required value="<?=$student["operation_47"];?>" ></td>
                    <td><input type="text" name="operation46" required value="<?=$student["operation_46"];?>" ></td>
                    <td><input type="text" name="operation45" required value="<?=$student["operation_45"];?>" ></td>
                    <td><input type="text" name="operation44" required value="<?=$student["operation_44"];?>" ></td>
                    <td><input type="text" name="operation43" required value="<?=$student["operation_43"];?>" ></td>
                    <td><input type="text" name="operation42" required value="<?=$student["operation_42"];?>" ></td>
                    <td><input type="text" name="operation41" required value="<?=$student["operation_41"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition48" required value="<?=$student["condition_48"];?>" ></td>
                    <td><input type="text" name="condition47" required value="<?=$student["condition_47"];?>" ></td>
                    <td><input type="text" name="condition46" required value="<?=$student["condition_46"];?>" ></td>
                    <td><input type="text" name="condition45" required value="<?=$student["condition_45"];?>" ></td>
                    <td><input type="text" name="condition44" required value="<?=$student["condition_44"];?>" ></td>
                    <td><input type="text" name="condition43" required value="<?=$student["condition_43"];?>" ></td>
                    <td><input type="text" name="condition42" required value="<?=$student["condition_42"];?>" ></td>
                    <td><input type="text" name="condition41" required value="<?=$student["condition_41"];?>" ></td>
                </tr>   
            </table>

            <br>
            
            <table>
                <tr class="label">
                    <th></th>
                    <th>85</th>
                    <th>84</th>
                    <th>83</th>
                    <th>82</th>
                    <th>81</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation85" required value="<?=$student["operation_85"];?>" ></td>
                    <td><input type="text" name="operation84" required value="<?=$student["operation_84"];?>" ></td>
                    <td><input type="text" name="operation83" required value="<?=$student["operation_83"];?>" ></td>
                    <td><input type="text" name="operation82" required value="<?=$student["operation_82"];?>" ></td>
                    <td><input type="text" name="operation81" required value="<?=$student["operation_81"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition85" required value="<?=$student["condition_85"];?>" ></td>
                    <td><input type="text" name="condition84" required value="<?=$student["condition_84"];?>" ></td>
                    <td><input type="text" name="condition83" required value="<?=$student["condition_83"];?>" ></td>
                    <td><input type="text" name="condition82" required value="<?=$student["condition_82"];?>" ></td>
                    <td><input type="text" name="condition81" required value="<?=$student["condition_81"];?>" ></td>
                </tr>   
            </table>


            <h4>Lower Left</h4>

            
            <table>
                <tr class="label">
                    <th></th>
                    <th >31</th>
                    <th>32</th>
                    <th>33</th>
                    <th>34</th>
                    <th>35</th>
                    <th>36</th>
                    <th>37</th>
                    <th>38</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation31"required value="<?=$student["operation_31"];?>" ></td>
                    <td><input type="text" name="operation32"required value="<?=$student["operation_32"];?>" ></td>
                    <td><input type="text" name="operation33"required value="<?=$student["operation_33"];?>" ></td>
                    <td><input type="text" name="operation34"required value="<?=$student["operation_34"];?>" ></td>
                    <td><input type="text" name="operation35"required value="<?=$student["operation_35"];?>" ></td>
                    <td><input type="text" name="operation36"required value="<?=$student["operation_36"];?>" ></td>
                    <td><input type="text" name="operation37"required value="<?=$student["operation_37"];?>" ></td>
                    <td><input type="text" name="operation38"required value="<?=$student["operation_38"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition31" required value="<?=$student["condition_31"];?>" ></td>
                    <td><input type="text" name="condition32" required value="<?=$student["condition_32"];?>" ></td>
                    <td><input type="text" name="condition33" required value="<?=$student["condition_33"];?>" ></td>
                    <td><input type="text" name="condition34" required value="<?=$student["condition_34"];?>" ></td>
                    <td><input type="text" name="condition35" required value="<?=$student["condition_35"];?>" ></td>
                    <td><input type="text" name="condition36" required value="<?=$student["condition_36"];?>" ></td>
                    <td><input type="text" name="condition37" required value="<?=$student["condition_37"];?>" ></td>
                    <td><input type="text" name="condition38" required value="<?=$student["condition_38"];?>" ></td>
                </tr>   
            </table>

            <br>

            <table>
                <tr class="label">
                    <th></th>
                    <th>71</th>
                    <th>72</th>
                    <th>73</th>
                    <th>74</th>
                    <th>75</th>
                </tr>

                <tr>
                    <td class="label">Operation</td>
                    <td><input type="text" name="operation71" required value="<?=$student["operation_71"];?>" ></td>
                    <td><input type="text" name="operation72" required value="<?=$student["operation_72"];?>" ></td>
                    <td><input type="text" name="operation73" required value="<?=$student["operation_73"];?>" ></td>
                    <td><input type="text" name="operation74" required value="<?=$student["operation_74"];?>" ></td>
                    <td><input type="text" name="operation75" required value="<?=$student["operation_75"];?>" ></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition71" required value="<?=$student["condition_71"];?>" ></td>
                    <td><input type="text" name="condition72" required value="<?=$student["condition_72"];?>" ></td>
                    <td><input type="text" name="condition73" required value="<?=$student["condition_73"];?>" ></td>
                    <td><input type="text" name="condition74" required value="<?=$student["condition_74"];?>" ></td>
                    <td><input type="text" name="condition75" required value="<?=$student["condition_75"];?>" ></td>
                </tr>   
            </table>

            <br>
            <table class="assessment">
                <tr>
                    <th class="label">Date of Examination</th>
                    <td colspan="2"><input type="date" name="date1" required value="<?=$student["date_1"];?>" ></td>
                    <td colspan="2"><input type="date" name="date2" required value="<?=$student["date_2"];?>" ></td>
                    <td colspan="2"><input type="date" name="date3" required value="<?=$student["date_3"];?>" ></td>
                    <td colspan="2"><input type="date" name="date4" required value="<?=$student["date_4"];?>" ></td>
                    <td colspan="2"><input type="date" name="date5" required value="<?=$student["date_5"];?>" ></td>
                    <td colspan="2"><input type="date" name="date6" required value="<?=$student["date_6"];?>" ></td>
                    <td colspan="2"><input type="date" name="date7" required value="<?=$student["date_7"];?>" ></td>
                </tr>

                <tr>
                    <th class="label">Age Last Birthday</th>
                    <td colspan="2"><input type="text" name="ageLastBday1" required value="<?=$student["age_1"];?>" ></td>
                    <td colspan="2"><input type="text" name="ageLastBday2" required value="<?=$student["age_2"];?>" ></td>
                    <td colspan="2"><input type="text" name="ageLastBday3" required value="<?=$student["age_3"];?>" ></td>
                    <td colspan="2"><input type="text" name="ageLastBday4" required value="<?=$student["age_4"];?>" ></td>
                    <td colspan="2"><input type="text" name="ageLastBday5" required value="<?=$student["age_5"];?>" ></td>
                    <td colspan="2"><input type="text" name="ageLastBday6" required value="<?=$student["age_6"];?>" ></td>
                    <td colspan="2"><input type="text" name="ageLastBday7" required value="<?=$student["age_7"];?>" ></td>
                </tr>

                <tr>
                    <th class="label">Presence of Dental Caries</th>
                    <td colspan="2">
                        <input type="radio" id= "promptDentalCaries1Yes" name="promptDentalCaries1" value="Yes" <?php if($student['dentalCaries_1'] == 'Yes') {echo 'checked';}?>>
                        <label>Yes</label>
                        <br>
                        <input type="radio" id= "promptDentalCaries1No" name="promptDentalCaries1" value="No" <?php if($student['dentalCaries_1'] == 'No') {echo 'checked';}?>>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" id= "promptDentalCaries2Yes" name="promptDentalCaries2" value="Yes" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" id= "promptDentalCaries2No" name="promptDentalCaries2" value="No" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries3" value="" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries3" value="" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries4" value="" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries4" value="" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries5" value="" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries5" value="" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries6" value="" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries6" value="" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries7" value="" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries7" value="" >
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Gingivitis</th>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis1" value="<?=$student["gingivitis1"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis1" value="<?=$student["gingivitis1"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis2" value="<?=$student["gingivitis2"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis2" value="<?=$student["gingivitis2"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis3" value="<?=$student["gingivitis3"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis3" value="<?=$student["gingivitis3"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis4" value="<?=$student["gingivitis4"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis4" value="<?=$student["gingivitis4"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis5" value="<?=$student["gingivitis5"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis5" value="<?=$student["gingivitis5"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis6" value="<?=$student["gingivitis6"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis6" value="<?=$student["gingivitis6"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis7" value="<?=$student["gingivitis7"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis7" value="<?=$student["gingivitis7"];?>" >
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Periodontal Pocket</th>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal1" value="<?=$student["periodontal_pocket1"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal1" value="<?=$student["periodontal_pocket1"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal2" value="<?=$student["periodontal_pocket2"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal2" value="<?=$student["periodontal_pocket2"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal3" value="<?=$student["periodontal_pocket3"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal3" value="<?=$student["periodontal_pocket3"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal4" value="<?=$student["periodontal_pocket4"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal4" value="<?=$student["periodontal_pocket4"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal5" value="<?=$student["periodontal_pocket5"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal5" value="<?=$student["periodontal_pocket5"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal6" value="<?=$student["periodontal_pocket6"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal6" value="<?=$student["periodontal_pocket6"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal7" value="<?=$student["periodontal_pocket7"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal7" value="<?=$student["periodontal_pocket7"];?>" >
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Oral Debris</th>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris1" value="<?=$student["oraldebris1"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris1" value="<?=$student["oraldebris1"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris2" value="<?=$student["oraldebris2"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris2" value="<?=$student["oraldebris2"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris3" value="<?=$student["oraldebris3"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris3" value="<?=$student["oraldebris3"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris4" value="<?=$student["oraldebris4"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris4" value="<?=$student["oraldebris4"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris5" value="<?=$student["oraldebris5"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris5" value="<?=$student["oraldebris5"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris6" value="<?=$student["oraldebris6"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris6" value="<?=$student["oraldebris6"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris7" value="<?=$student["oraldebris7"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris7" value="<?=$student["oraldebris7"];?>" >
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Calculus</th>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus1" value="<?=$student["calculus1"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus1" value="<?=$student["calculus1"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus2" value="<?=$student["calculus2"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus2" value="<?=$student["calculus2"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus3" value="<?=$student["calculus3"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus3" value="<?=$student["calculus3"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus4" value="<?=$student["calculus4"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus4" value="<?=$student["calculus4"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus5" value="<?=$student["calculus5"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus5" value="<?=$student["calculus5"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus6" value="<?=$student["calculus6"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus6" value="<?=$student["calculus6"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus7" value="<?=$student["calculus7"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus7" value="<?=$student["calculus7"];?>" >
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Neoplasm</th>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm1" value="<?=$student["neoplasm1"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm1" value="<?=$student["neoplasm1"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm2" value="<?=$student["neoplasm2"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm2" value="<?=$student["neoplasm2"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm3" value="<?=$student["neoplasm3"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm3" value="<?=$student["neoplasm3"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm4" value="<?=$student["neoplasm4"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm4" value="<?=$student["neoplasm4"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm5" value="<?=$student["neoplasm5"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm5" value="<?=$student["neoplasm5"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm6" value="<?=$student["neoplasm6"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm6" value="<?=$student["neoplasm6"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm7" value="<?=$student["neoplasm7"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm7" value="<?=$student["neoplasm7"];?>" >
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Dento-facial Anomaly</th>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly1" value="<?=$student["DF_anomaly1"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly1" value="<?=$student["DF_anomaly1"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly2" value="<?=$student["DF_anomaly2"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly2" value="<?=$student["DF_anomaly2"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly3" value="<?=$student["DF_anomaly3"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly3" value="<?=$student["DF_anomaly3"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly4" value="<?=$student["DF_anomaly4"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly4" value="<?=$student["DF_anomaly4"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly5" value="<?=$student["DF_anomaly5"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly5" value="<?=$student["DF_anomaly5"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2"> 
                        <input type="radio" name="promptDFAnomaly6" value="<?=$student["DF_anomaly6"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly6" value="<?=$student["DF_anomaly6"];?>" >
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly7" value="<?=$student["DF_anomaly7"];?>" >
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly7" value="<?=$student["DF_anomaly7"];?>" >
                        <label>No</label>
                    </td>
                </tr>               
                <tr class="label">
                    <td></td>
                    <td>T</td>
                    <td>P</td>
                    <td>T</td>
                    <td>P</td>
                    <td>T</td>
                    <td>P</td>
                    <td>T</td>
                    <td>P</td>
                    <td>T</td>
                    <td>P</td>
                    <td>T</td>
                    <td>P</td>
                    <td>T</td>
                    <td>P</td>
                </tr>
                
                <tr>
                    <td class="label">Number of Teeth Present</td>
                    <td><input type="text" name="teeth1" value="<?=$student["teeth1"];?>" ></td>
                    <td><input type="text" name="teeth2" value="<?=$student["teeth2"];?>" ></td>
                    <td><input type="text" name="teeth3" value="<?=$student["teeth3"];?>" ></td>
                    <td><input type="text" name="teeth4" value="<?=$student["teeth4"];?>" ></td>
                    <td><input type="text" name="teeth5" value="<?=$student["teeth5"];?>" ></td>
                    <td><input type="text" name="teeth6" value="<?=$student["teeth6"];?>" ></td>
                    <td><input type="text" name="teeth7" value="<?=$student["teeth7"];?>" ></td>
                    <td><input type="text" name="teeth8" value="<?=$student["teeth8"];?>" ></td>
                    <td><input type="text" name="teeth9" value="<?=$student["teeth9"];?>" ></td>
                    <td><input type="text" name="teeth10" value="<?=$student["teeth10"];?>" ></td>
                    <td><input type="text" name="teeth11" value="<?=$student["teeth11"];?>" ></td>
                    <td><input type="text" name="teeth12" value="<?=$student["teeth12"];?>" ></td>
                    <td><input type="text" name="teeth13" value="<?=$student["teeth13"];?>" ></td>
                    <td><input type="text" name="teeth14" value="<?=$student["teeth14"];?>" ></td>

                </tr>

                <tr>
                    <td class="label">Caries Indicated for Filling</td>
                    <td><input type="text" name="cariesFilling1" value="<?=$student["caries_filling1"];?>" ></td>
                    <td><input type="text" name="cariesFilling2" value="<?=$student["caries_filling2"];?>" ></td>
                    <td><input type="text" name="cariesFilling3" value="<?=$student["caries_filling3"];?>" ></td>
                    <td><input type="text" name="cariesFilling4" value="<?=$student["caries_filling4"];?>" ></td>
                    <td><input type="text" name="cariesFilling5" value="<?=$student["caries_filling5"];?>" ></td>
                    <td><input type="text" name="cariesFilling6" value="<?=$student["caries_filling6"];?>" ></td>
                    <td><input type="text" name="cariesFilling7" value="<?=$student["caries_filling7"];?>" ></td>
                    <td><input type="text" name="cariesFilling8" value="<?=$student["caries_filling8"];?>" ></td>
                    <td><input type="text" name="cariesFilling9" value="<?=$student["caries_filling9"];?>" ></td>
                    <td><input type="text" name="cariesFilling10" value="<?=$student["caries_filling10"];?>" ></td>
                    <td><input type="text" name="cariesFilling11" value="<?=$student["caries_filling11"];?>" ></td>
                    <td><input type="text" name="cariesFilling12" value="<?=$student["caries_filling12"];?>" ></td>
                    <td><input type="text" name="cariesFilling13" value="<?=$student["caries_filling13"];?>" ></td>
                    <td><input type="text" name="cariesFilling14" value="<?=$student["caries_filling14"];?>" ></td>
                </tr>

                <tr>
                    <td class="label">Caries Indicated for Extraction</td>
                    <td><input type="text" name="carriesExtract1" value="<?=$student["indicated_extraction1"];?>" ></td>
                    <td><input type="text" name="carriesExtract2" value="<?=$student["indicated_extraction2"];?>" ></td>
                    <td><input type="text" name="carriesExtract3" value="<?=$student["indicated_extraction3"];?>" ></td>
                    <td><input type="text" name="carriesExtract4" value="<?=$student["indicated_extraction4"];?>" ></td>
                    <td><input type="text" name="carriesExtract5" value="<?=$student["indicated_extraction5"];?>" ></td>
                    <td><input type="text" name="carriesExtract6" value="<?=$student["indicated_extraction6"];?>" ></td>
                    <td><input type="text" name="carriesExtract7" value="<?=$student["indicated_extraction7"];?>" ></td>
                    <td><input type="text" name="carriesExtract8" value="<?=$student["indicated_extraction8"];?>" ></td>
                    <td><input type="text" name="carriesExtract9" value="<?=$student["indicated_extraction9"];?>" ></td>
                    <td><input type="text" name="carriesExtract10" value="<?=$student["indicated_extraction10"];?>" ></td>
                    <td><input type="text" name="carriesExtract11" value="<?=$student["indicated_extraction11"];?>" ></td>
                    <td><input type="text" name="carriesExtract12" value="<?=$student["indicated_extraction12"];?>" ></td>
                    <td><input type="text" name="carriesExtract13" value="<?=$student["indicated_extraction13"];?>" ></td>
                    <td><input type="text" name="carriesExtract14" value="<?=$student["indicated_extraction14"];?>" ></td>
                </tr>

                <tr>
                    <td class="label">Root Fragment</td>
                    <td><input type="text" name="rootFragment1" value="<?=$student["rootFragment1"];?>" ></td>
                    <td><input type="text" name="rootFragment2" value="<?=$student["rootFragment2"];?>" ></td>
                    <td><input type="text" name="rootFragment3" value="<?=$student["rootFragment3"];?>" ></td>
                    <td><input type="text" name="rootFragment4" value="<?=$student["rootFragment4"];?>" ></td>
                    <td><input type="text" name="rootFragment5" value="<?=$student["rootFragment5"];?>" ></td>
                    <td><input type="text" name="rootFragment6" value="<?=$student["rootFragment6"];?>" ></td>
                    <td><input type="text" name="rootFragment7" value="<?=$student["rootFragment7"];?>" ></td>
                    <td><input type="text" name="rootFragment8" value="<?=$student["rootFragment8"];?>" ></td>
                    <td><input type="text" name="rootFragment9" value="<?=$student["rootFragment9"];?>" ></td>
                    <td><input type="text" name="rootFragment10" value="<?=$student["rootFragment10"];?>" ></td>
                    <td><input type="text" name="rootFragment11" value="<?=$student["rootFragment11"];?>" ></td>
                    <td><input type="text" name="rootFragment12" value="<?=$student["rootFragment12"];?>" ></td>
                    <td><input type="text" name="rootFragment13" value="<?=$student["rootFragment13"];?>" ></td>
                    <td><input type="text" name="rootFragment14" value="<?=$student["rootFragment14"];?>" ></td>
                </tr>

                <tr>
                    <td class="label">Missing Due to Caries</td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries1" value="<?=$student["missingCaries1"];?>" ></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries2" value="<?=$student["missingCaries2"];?>" ></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries3" value="<?=$student["missingCaries3"];?>" ></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries4" value="<?=$student["missingCaries4"];?>" ></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries5" value="<?=$student["missingCaries5"];?>" ></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries6" value="<?=$student["missingCaries6"];?>" ></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries7" value="<?=$student["missingCaries7"];?>" ></td>
                </tr>

                <tr>
                    <td class="label">Filled or Restored</td>
                    <td><input type="text" name="filledRestored1" value="<?=$student["filledRestored1"];?>" ></td>
                    <td><input type="text" name="filledRestored2" value="<?=$student["filledRestored2"];?>" ></td>
                    <td><input type="text" name="filledRestored3" value="<?=$student["filledRestored3"];?>" ></td>
                    <td><input type="text" name="filledRestored4" value="<?=$student["filledRestored4"];?>" ></td>
                    <td><input type="text" name="filledRestored5" value="<?=$student["filledRestored5"];?>" ></td>
                    <td><input type="text" name="filledRestored6" value="<?=$student["filledRestored6"];?>" ></td>
                    <td><input type="text" name="filledRestored7" value="<?=$student["filledRestored7"];?>" ></td>
                    <td><input type="text" name="filledRestored8" value="<?=$student["filledRestored8"];?>" ></td>
                    <td><input type="text" name="filledRestored9" value="<?=$student["filledRestored9"];?>" ></td>
                    <td><input type="text" name="filledRestored10" value="<?=$student["filledRestored10"];?>" ></td>
                    <td><input type="text" name="filledRestored11" value="<?=$student["filledRestored11"];?>" ></td>
                    <td><input type="text" name="filledRestored12" value="<?=$student["filledRestored12"];?>" ></td>
                    <td><input type="text" name="filledRestored13" value="<?=$student["filledRestored13"];?>" ></td>
                    <td><input type="text" name="filledRestored14" value="<?=$student["filledRestored14"];?>" ></td>
                </tr>

                <tr>
                    <td class="label">Total df and DMF Teeth</td>
                    <td><input type="text" name="totaldfDMF1" value="<?=$student["df_DMF1"];?>" ></td>
                    <td><input type="text" name="totaldfDMF2" value="<?=$student["df_DMF2"];?>" ></td>
                    <td><input type="text" name="totaldfDMF3" value="<?=$student["df_DMF3"];?>" ></td>
                    <td><input type="text" name="totaldfDMF4" value="<?=$student["df_DMF4"];?>" ></td>
                    <td><input type="text" name="totaldfDMF5" value="<?=$student["df_DMF5"];?>" ></td>
                    <td><input type="text" name="totaldfDMF6" value="<?=$student["df_DMF6"];?>" ></td>
                    <td><input type="text" name="totaldfDMF7" value="<?=$student["df_DMF7"];?>" ></td>
                    <td><input type="text" name="totaldfDMF8" value="<?=$student["df_DMF8"];?>" ></td>
                    <td><input type="text" name="totaldfDMF9" value="<?=$student["df_DMF9"];?>" ></td>
                    <td><input type="text" name="totaldfDMF10" value="<?=$student["df_DMF10"];?>" ></td>
                    <td><input type="text" name="totaldfDMF11" value="<?=$student["df_DMF11"];?>" ></td>
                    <td><input type="text" name="totaldfDMF12" value="<?=$student["df_DMF12"];?>" ></td>
                    <td><input type="text" name="totaldfDMF13" value="<?=$student["df_DMF13"];?>" ></td>
                    <td><input type="text" name="totaldfDMF14" value="<?=$student["df_DMF14"];?>" ></td>
                </tr>

                <tr>
                    <td class="label">Fluoride Application</td>
                    <td colspan="2"><input type="text" name="fluorideApplication1" value="<?=$student["fluoride_application1"];?>" ></td>
                    <td colspan="2"><input type="text" name="fluorideApplication2" value="<?=$student["fluoride_application2"];?>" ></td>
                    <td colspan="2"><input type="text" name="fluorideApplication3" value="<?=$student["fluoride_application3"];?>" ></td>
                    <td colspan="2"><input type="text" name="fluorideApplication4" value="<?=$student["fluoride_application4"];?>" ></td>
                    <td colspan="2"><input type="text" name="fluorideApplication5" value="<?=$student["fluoride_application5"];?>" ></td>
                    <td colspan="2"><input type="text" name="fluorideApplication6" value="<?=$student["fluoride_application6"];?>" ></td>
                    <td colspan="2"><input type="text" name="fluorideApplication7" value="<?=$student["fluoride_application7"];?>" ></td>
                    
                </tr>

                <tr>
                    <td class="label">Examiner</td>
                    <td colspan="2"><input type="text" name="examinerName1" value="<?=$student["examiner_name1"];?>" ></td>
                    <td colspan="2"><input type="text" name="examinerName2" value="<?=$student["examiner_name2"];?>" ></td>
                    <td colspan="2"><input type="text" name="examinerName3" value="<?=$student["examiner_name3"];?>" ></td>
                    <td colspan="2"><input type="text" name="examinerName4" value="<?=$student["examiner_name4"];?>" ></td>
                    <td colspan="2"><input type="text" name="examinerName5" value="<?=$student["examiner_name5"];?>" ></td>
                    <td colspan="2"><input type="text" name="examinerName6" value="<?=$student["examiner_name6"];?>" ></td>
                    <td colspan="2"><input type="text" name="examinerName7" value="<?=$student["examiner_name7"];?>" ></td>
                </tr>

            </table>

            <button type="submit">Update</button>
        </form>   
    </div>

        
            <?php
        } else {
            echo "No ID such found";
        }
    }

    ?>
    
</body>
</html>