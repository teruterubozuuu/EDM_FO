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

                    WHERE dental_student_details.student_number = '$student_id' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0) {
            $student = mysqli_fetch_array($query_run);
            ?>

<div class="dental-record">
        <form action="dentalrecords.php" method="POST">
            <h2>Dental Health Record</h2>
            <hr>
            <label class="label">Student number</label>
            <input type="text"  id="student-number" name="studentnumber"  required value="<?=$student["student_number"];?>" readonly> <br>

            <label class="label">Name</label>
            <input type="text"  id="lastname" name="lastname"  placeholder="Last name" required value="<?=$student["lastname"];?>" readonly>
            <input type="text"  id="firstname" name="firstname"  placeholder="First name" required value="<?=$student["firstname"];?>" readonly>
            <input type="text" id="middlename" name="middlename"  placeholder="Middle name" value="<?=$student["middlename"];?>" readonly>   
            <br>
            <label class="label" for="hospital">Hospital/Municipality</label>
            <input type="text" id="hospital" name="hospital" value="<?=$student["hospital_municipality"];?>" readonly>
            <label class="label" for="school">School/Firm</label>
            <input type="text" id="school" name="school" value="<?=$student["school_firm"];?>" readonly>
            <br>
            <label class="label" for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="<?=$student["birthdate"];?>" readonly>
            <label class="label" for="occupation">Occupation</label>
            <input type="text" id="occupation" name="occupation" value="<?=$student["occupation"];?>" readonly>
            <label class="label" for="civil-status">Civil Status</label>
            <input type="text" id="civil-status" name="civilstatus" value="<?=$student["civil_status"];?>" readonly>
            <br>
            <label class="label" for="address">Address</label>
            <input type="text" id="address" name="address" value="<?=$student["address"];?>" readonly>
            <br>
            <input type="radio" id="in-patient" name="patient" value="<?=$student["patient_status"];?>" readonly>
            <label class="label" for="in-patient">In Patient</label>
            <input type="radio" id="out-patient" name="patient" value="<?=$student["patient_status"];?>" readonly>
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
                    <td><?=$student["operation_55"];?></td>
                    <td><input type="text" name="operation54" required value="<?=$student["operation_54"];?>" readonly></td>
                    <td><input type="text" name="operation53" required value="<?=$student["operation_53"];?>" readonly></td>
                    <td><input type="text" name="operation52" required value="<?=$student["operation_52"];?>" readonly></td>
                    <td><input type="text" name="operation51" required value="<?=$student["operation_51"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition55" required value="<?=$student["condition_55"];?>" readonly></td>
                    <td><input type="text" name="condition54" required value="<?=$student["condition_54"];?>" readonly></td>
                    <td><input type="text" name="condition53" required value="<?=$student["condition_53"];?>" readonly></td>
                    <td><input type="text" name="condition52" required value="<?=$student["condition_52"];?>" readonly></td>
                    <td><input type="text" name="condition51" required value="<?=$student["condition_51"];?>" readonly></td>
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
                    <td><input type="text" name="operation18" required value="<?=$student["operation_18"];?>" readonly></td>
                    <td><input type="text" name="operation17" required value="<?=$student["operation_17"];?>" readonly></td>
                    <td><input type="text" name="operation16" required value="<?=$student["operation_16"];?>" readonly></td>
                    <td><input type="text" name="operation15" required value="<?=$student["operation_15"];?>" readonly></td>
                    <td><input type="text" name="operation14" required value="<?=$student["operation_14"];?>" readonly></td>
                    <td><input type="text" name="operation13" required value="<?=$student["operation_13"];?>" readonly></td>
                    <td><input type="text" name="operation12" required value="<?=$student["operation_12"];?>" readonly></td>
                    <td><input type="text" name="operation11" required value="<?=$student["operation_11"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition18" required value="<?=$student["condition_18"];?>" readonly></td>
                    <td><input type="text" name="condition17" required value="<?=$student["condition_17"];?>" readonly></td>
                    <td><input type="text" name="condition16" required value="<?=$student["condition_16"];?>" readonly></td>
                    <td><input type="text" name="condition15" required value="<?=$student["condition_15"];?>" readonly></td>
                    <td><input type="text" name="condition14" required value="<?=$student["condition_14"];?>" readonly></td>
                    <td><input type="text" name="condition13" required value="<?=$student["condition_13"];?>" readonly></td>
                    <td><input type="text" name="condition12" required value="<?=$student["condition_12"];?>" readonly></td>
                    <td><input type="text" name="condition11" required value="<?=$student["condition_11"];?>" readonly></td>
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
                    <td><input type="text" name="operation61" required value="<?=$student["operation_61"];?>" readonly></td>
                    <td><input type="text" name="operation62" required value="<?=$student["operation_62"];?>" readonly></td>
                    <td><input type="text" name="operation63" required value="<?=$student["operation_63"];?>" readonly></td>
                    <td><input type="text" name="operation64" required value="<?=$student["operation_64"];?>" readonly></td>
                    <td><input type="text" name="operation65" required value="<?=$student["operation_65"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition61" required value="<?=$student["condition_61"];?>" readonly></td>
                    <td><input type="text" name="condition62" required value="<?=$student["condition_62"];?>" readonly></td>
                    <td><input type="text" name="condition63" required value="<?=$student["condition_63"];?>" readonly></td>
                    <td><input type="text" name="condition64" required value="<?=$student["condition_64"];?>" readonly></td>
                    <td><input type="text" name="condition65" required value="<?=$student["condition_65"];?>" readonly></td>
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
                    <td><input type="text" name="operation21"required value="<?=$student["operation_21"];?>" readonly></td>
                    <td><input type="text" name="operation22"required value="<?=$student["operation_22"];?>" readonly></td>
                    <td><input type="text" name="operation23"required value="<?=$student["operation_23"];?>" readonly></td>
                    <td><input type="text" name="operation24"required value="<?=$student["operation_24"];?>" readonly></td>
                    <td><input type="text" name="operation25"required value="<?=$student["operation_25"];?>" readonly></td>
                    <td><input type="text" name="operation26"required value="<?=$student["operation_26"];?>" readonly></td>
                    <td><input type="text" name="operation27"required value="<?=$student["operation_27"];?>" readonly></td>
                    <td><input type="text" name="operation28"required value="<?=$student["operation_28"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition21"required value="<?=$student["condition_21"];?>" readonly></td>
                    <td><input type="text" name="condition22"required value="<?=$student["condition_22"];?>" readonly></td>
                    <td><input type="text" name="condition23"required value="<?=$student["condition_23"];?>" readonly></td>
                    <td><input type="text" name="condition24"required value="<?=$student["condition_24"];?>" readonly></td>
                    <td><input type="text" name="condition25"required value="<?=$student["condition_25"];?>" readonly></td>
                    <td><input type="text" name="condition26"required value="<?=$student["condition_26"];?>" readonly></td>
                    <td><input type="text" name="condition27"required value="<?=$student["condition_27"];?>" readonly></td>
                    <td><input type="text" name="condition28"required value="<?=$student["condition_28"];?>" readonly></td>
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
                    <td><input type="text" name="operation48" required value="<?=$student["operation_48"];?>" readonly></td>
                    <td><input type="text" name="operation47" required value="<?=$student["operation_47"];?>" readonly></td>
                    <td><input type="text" name="operation46" required value="<?=$student["operation_46"];?>" readonly></td>
                    <td><input type="text" name="operation45" required value="<?=$student["operation_45"];?>" readonly></td>
                    <td><input type="text" name="operation44" required value="<?=$student["operation_44"];?>" readonly></td>
                    <td><input type="text" name="operation43" required value="<?=$student["operation_43"];?>" readonly></td>
                    <td><input type="text" name="operation42" required value="<?=$student["operation_42"];?>" readonly></td>
                    <td><input type="text" name="operation41" required value="<?=$student["operation_41"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition48" required value="<?=$student["condition_48"];?>" readonly></td>
                    <td><input type="text" name="condition47" required value="<?=$student["condition_47"];?>" readonly></td>
                    <td><input type="text" name="condition46" required value="<?=$student["condition_46"];?>" readonly></td>
                    <td><input type="text" name="condition45" required value="<?=$student["condition_45"];?>" readonly></td>
                    <td><input type="text" name="condition44" required value="<?=$student["condition_44"];?>" readonly></td>
                    <td><input type="text" name="condition43" required value="<?=$student["condition_43"];?>" readonly></td>
                    <td><input type="text" name="condition42" required value="<?=$student["condition_42"];?>" readonly></td>
                    <td><input type="text" name="condition41" required value="<?=$student["condition_41"];?>" readonly></td>
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
                    <td><input type="text" name="operation85" required value="<?=$student["operation_85"];?>" readonly></td>
                    <td><input type="text" name="operation84" required value="<?=$student["operation_84"];?>" readonly></td>
                    <td><input type="text" name="operation83" required value="<?=$student["operation_83"];?>" readonly></td>
                    <td><input type="text" name="operation82" required value="<?=$student["operation_82"];?>" readonly></td>
                    <td><input type="text" name="operation81" required value="<?=$student["operation_81"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition85" required value="<?=$student["condition_85"];?>" readonly></td>
                    <td><input type="text" name="condition84" required value="<?=$student["condition_84"];?>" readonly></td>
                    <td><input type="text" name="condition83" required value="<?=$student["condition_83"];?>" readonly></td>
                    <td><input type="text" name="condition82" required value="<?=$student["condition_82"];?>" readonly></td>
                    <td><input type="text" name="condition81" required value="<?=$student["condition_81"];?>" readonly></td>
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
                    <td><input type="text" name="operation31"required value="<?=$student["operation_31"];?>" readonly></td>
                    <td><input type="text" name="operation32"required value="<?=$student["operation_32"];?>" readonly></td>
                    <td><input type="text" name="operation33"required value="<?=$student["operation_33"];?>" readonly></td>
                    <td><input type="text" name="operation34"required value="<?=$student["operation_34"];?>" readonly></td>
                    <td><input type="text" name="operation35"required value="<?=$student["operation_35"];?>" readonly></td>
                    <td><input type="text" name="operation36"required value="<?=$student["operation_36"];?>" readonly></td>
                    <td><input type="text" name="operation37"required value="<?=$student["operation_37"];?>" readonly></td>
                    <td><input type="text" name="operation38"required value="<?=$student["operation_38"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition31" required value="<?=$student["condition_31"];?>" readonly></td>
                    <td><input type="text" name="condition32" required value="<?=$student["condition_32"];?>" readonly></td>
                    <td><input type="text" name="condition33" required value="<?=$student["condition_33"];?>" readonly></td>
                    <td><input type="text" name="condition34" required value="<?=$student["condition_34"];?>" readonly></td>
                    <td><input type="text" name="condition35" required value="<?=$student["condition_35"];?>" readonly></td>
                    <td><input type="text" name="condition36" required value="<?=$student["condition_36"];?>" readonly></td>
                    <td><input type="text" name="condition37" required value="<?=$student["condition_37"];?>" readonly></td>
                    <td><input type="text" name="condition38" required value="<?=$student["condition_38"];?>" readonly></td>
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
                    <td><input type="text" name="operation71" required value="<?=$student["operation_71"];?>" readonly></td>
                    <td><input type="text" name="operation72" required value="<?=$student["operation_72"];?>" readonly></td>
                    <td><input type="text" name="operation73" required value="<?=$student["operation_73"];?>" readonly></td>
                    <td><input type="text" name="operation74" required value="<?=$student["operation_74"];?>" readonly></td>
                    <td><input type="text" name="operation75" required value="<?=$student["operation_75"];?>" readonly></td>
                </tr>
                
                <tr>
                    <td class="label">Condition</td>
                    <td><input type="text" name="condition71" required value="<?=$student["condition_71"];?>" readonly></td>
                    <td><input type="text" name="condition72" required value="<?=$student["condition_72"];?>" readonly></td>
                    <td><input type="text" name="condition73" required value="<?=$student["condition_73"];?>" readonly></td>
                    <td><input type="text" name="condition74" required value="<?=$student["condition_74"];?>" readonly></td>
                    <td><input type="text" name="condition75" required value="<?=$student["condition_75"];?>" readonly></td>
                </tr>   
            </table>

            <br>
            <table class="assessment">
                <tr>
                    <th class="label">Date of Examination</th>
                    <td colspan="2"><input type="date" name="date1" required value="<?=$student["date_1"];?>" readonly></td>
                    <td colspan="2"><input type="date" name="date2" required value="<?=$student["date_2"];?>" readonly></td>
                    <td colspan="2"><input type="date" name="date3" required value="<?=$student["date_3"];?>" readonly></td>
                    <td colspan="2"><input type="date" name="date4" required value="<?=$student["date_4"];?>" readonly></td>
                    <td colspan="2"><input type="date" name="date5" required value="<?=$student["date_5"];?>" readonly></td>
                    <td colspan="2"><input type="date" name="date6" required value="<?=$student["date_6"];?>" readonly></td>
                    <td colspan="2"><input type="date" name="date7" required value="<?=$student["date_7"];?>" readonly></td>
                </tr>

                <tr>
                    <th class="label">Age Last Birthday</th>
                    <td colspan="2"><input type="text" name="ageLastBday1" required value="<?=$student["age_1"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="ageLastBday2" required value="<?=$student["age_2"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="ageLastBday3" required value="<?=$student["age_3"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="ageLastBday4" required value="<?=$student["age_4"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="ageLastBday5" required value="<?=$student["age_5"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="ageLastBday6" required value="<?=$student["age_6"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="ageLastBday7" required value="<?=$student["age_7"];?>" readonly></td>
                </tr>

                <tr>
                    <th class="label">Presence of Dental Caries</th>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDentalCaries7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDentalCaries7" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Gingivitis</th>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptGingivitis7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptGingivitis7" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Periodontal Pocket</th>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptPeriodontal7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptPeriodontal7" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Oral Debris</th>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptOralDebris7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptOralDebris7" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Calculus</th>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptCalculus7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptCalculus7" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Neoplasm</th>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptNeoplasm7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptNeoplasm7" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                </tr>

                <tr>
                    <th class="label">Presence of Dento-facial Anomaly</th>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly1" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly1" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly2" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly2" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly3" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly3" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly4" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly4" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly5" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly5" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2"> 
                        <input type="radio" name="promptDFAnomaly6" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly6" value="<?=$student[""];?>" readonly>
                        <label>No</label>
                    </td>
                    <td colspan="2">
                        <input type="radio" name="promptDFAnomaly7" value="<?=$student[""];?>" readonly>
                        <label>Yes</label>
                        <br>
                        <input type="radio" name="promptDFAnomaly7" value="<?=$student[""];?>" readonly>
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
                    <td><input type="text" name="teeth1" value="<?=$student["teeth1"];?>" readonly></td>
                    <td><input type="text" name="teeth2" value="<?=$student["teeth2"];?>" readonly></td>
                    <td><input type="text" name="teeth3" value="<?=$student["teeth3"];?>" readonly></td>
                    <td><input type="text" name="teeth4" value="<?=$student["teeth4"];?>" readonly></td>
                    <td><input type="text" name="teeth5" value="<?=$student["teeth5"];?>" readonly></td>
                    <td><input type="text" name="teeth6" value="<?=$student["teeth6"];?>" readonly></td>
                    <td><input type="text" name="teeth7" value="<?=$student["teeth7"];?>" readonly></td>
                    <td><input type="text" name="teeth8" value="<?=$student["teeth8"];?>" readonly></td>
                    <td><input type="text" name="teeth9" value="<?=$student["teeth9"];?>" readonly></td>
                    <td><input type="text" name="teeth10" value="<?=$student["teeth10"];?>" readonly></td>
                    <td><input type="text" name="teeth11" value="<?=$student["teeth11"];?>" readonly></td>
                    <td><input type="text" name="teeth12" value="<?=$student["teeth12"];?>" readonly></td>
                    <td><input type="text" name="teeth13" value="<?=$student["teeth13"];?>" readonly></td>
                    <td><input type="text" name="teeth14" value="<?=$student["teeth14"];?>" readonly></td>

                </tr>

                <tr>
                    <td class="label">Caries Indicated for Filling</td>
                    <td><input type="text" name="cariesFilling1" value="<?=$student["caries_filling1"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling2" value="<?=$student["caries_filling2"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling3" value="<?=$student["caries_filling3"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling4" value="<?=$student["caries_filling4"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling5" value="<?=$student["caries_filling5"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling6" value="<?=$student["caries_filling6"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling7" value="<?=$student["caries_filling7"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling8" value="<?=$student["caries_filling8"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling9" value="<?=$student["caries_filling9"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling10" value="<?=$student["carries_filling10"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling11" value="<?=$student["carries_filling11"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling12" value="<?=$student["carries_filling12"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling13" value="<?=$student["carries_filling13"];?>" readonly></td>
                    <td><input type="text" name="cariesFilling14" value="<?=$student["carries_filling14"];?>" readonly></td>
                </tr>

                <tr>
                    <td class="label">Caries Indicated for Extraction</td>
                    <td><input type="text" name="carriesExtract1" value="<?=$student["indicated_extraction1"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract2" value="<?=$student["indicated_extraction2"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract3" value="<?=$student["indicated_extraction3"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract4" value="<?=$student["indicated_extraction4"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract5" value="<?=$student["indicated_extraction5"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract6" value="<?=$student["indicated_extraction6"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract7" value="<?=$student["indicated_extraction7"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract8" value="<?=$student["indicated_extraction8"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract9" value="<?=$student["indicated_extraction9"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract10" value="<?=$student["indicated_extraction10"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract11" value="<?=$student["indicated_extraction11"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract12" value="<?=$student["indicated_extraction12"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract13" value="<?=$student["indicated_extraction13"];?>" readonly></td>
                    <td><input type="text" name="carriesExtract14" value="<?=$student["indicated_extraction14"];?>" readonly></td>
                </tr>

                <tr>
                    <td class="label">Root Fragment</td>
                    <td><input type="text" name="rootFragment1" value="<?=$student["rootFragment1"];?>" readonly></td>
                    <td><input type="text" name="rootFragment2" value="<?=$student["rootFragment2"];?>" readonly></td>
                    <td><input type="text" name="rootFragment3" value="<?=$student["rootFragment3"];?>" readonly></td>
                    <td><input type="text" name="rootFragment4" value="<?=$student["rootFragment4"];?>" readonly></td>
                    <td><input type="text" name="rootFragment5" value="<?=$student["rootFragment5"];?>" readonly></td>
                    <td><input type="text" name="rootFragment6" value="<?=$student["rootFragment6"];?>" readonly></td>
                    <td><input type="text" name="rootFragment7" value="<?=$student["rootFragment7"];?>" readonly></td>
                    <td><input type="text" name="rootFragment8" value="<?=$student["rootFragment8"];?>" readonly></td>
                    <td><input type="text" name="rootFragment9" value="<?=$student["rootFragment9"];?>" readonly></td>
                    <td><input type="text" name="rootFragment10" value="<?=$student["rootFragment10"];?>" readonly></td>
                    <td><input type="text" name="rootFragment11" value="<?=$student["rootFragment11"];?>" readonly></td>
                    <td><input type="text" name="rootFragment12" value="<?=$student["rootFragmemt12"];?>" readonly></td>
                    <td><input type="text" name="rootFragment13" value="<?=$student["rootFragment13"];?>" readonly></td>
                    <td><input type="text" name="rootFragment14" value="<?=$student["rootFragment14"];?>" readonly></td>
                </tr>

                <tr>
                    <td class="label">Missing Due to Caries</td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries1" value="<?=$student["missingCaries1"];?>" readonly></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries2" value="<?=$student["missingCaries2"];?>" readonly></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries3" value="<?=$student["missingCaries3"];?>" readonly></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries4" value="<?=$student["missingCaries4"];?>" readonly></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries5" value="<?=$student["missingCaries5"];?>" readonly></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries6" value="<?=$student["missingCaries6"];?>" readonly></td>
                    <td>X</td>
                    <td><input type="text" name="missingCaries7" value="<?=$student["missingCaries7"];?>" readonly></td>
                </tr>

                <tr>
                    <td class="label">Filled or Restored</td>
                    <td><input type="text" name="filledRestored1" value="<?=$student["filledRestored1"];?>" readonly></td>
                    <td><input type="text" name="filledRestored2" value="<?=$student["filledRestored2"];?>" readonly></td>
                    <td><input type="text" name="filledRestored3" value="<?=$student["filledRestored3"];?>" readonly></td>
                    <td><input type="text" name="filledRestored4" value="<?=$student["filledRestored4"];?>" readonly></td>
                    <td><input type="text" name="filledRestored5" value="<?=$student["filledRestored5"];?>" readonly></td>
                    <td><input type="text" name="filledRestored6" value="<?=$student["filledRestored6"];?>" readonly></td>
                    <td><input type="text" name="filledRestored7" value="<?=$student["filledRestored7"];?>" readonly></td>
                    <td><input type="text" name="filledRestored8" value="<?=$student["filledRestored8"];?>" readonly></td>
                    <td><input type="text" name="filledRestored9" value="<?=$student["filledRestored9"];?>" readonly></td>
                    <td><input type="text" name="filledRestored10" value="<?=$student["filledRestored10"];?>" readonly></td>
                    <td><input type="text" name="filledRestored11" value="<?=$student["filledRestored11"];?>" readonly></td>
                    <td><input type="text" name="filledRestored12" value="<?=$student["filledRestored12"];?>" readonly></td>
                    <td><input type="text" name="filledRestored13" value="<?=$student["filledRestored13"];?>" readonly></td>
                    <td><input type="text" name="filledRestored14" value="<?=$student["filledRestored14"];?>" readonly></td>
                </tr>

                <tr>
                    <td class="label">Total df and DMF Teeth</td>
                    <td><input type="text" name="totaldfDMF1" value="<?=$student["df_DMF1"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF2" value="<?=$student["df_DMF2"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF3" value="<?=$student["df_DMF3"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF4" value="<?=$student["df_DMF4"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF5" value="<?=$student["df_DMF5"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF6" value="<?=$student["df_DMF6"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF7" value="<?=$student["df_DMF7"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF8" value="<?=$student["df_DMF8"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF9" value="<?=$student["df_DMF9"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF10" value="<?=$student["df_DMF10"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF11" value="<?=$student["df_DMF11"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF12" value="<?=$student["df_DMF12"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF13" value="<?=$student["df_DMF13"];?>" readonly></td>
                    <td><input type="text" name="totaldfDMF14" value="<?=$student["df_DMF14"];?>" readonly></td>
                </tr>

                <tr>
                    <td class="label">Fluoride Application</td>
                    <td colspan="2"><input type="text" name="fluorideApplication1" value="<?=$student["fluoride_application1"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="fluorideApplication2" value="<?=$student["fluoride_application2"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="fluorideApplication3" value="<?=$student["fluoride_application3"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="fluorideApplication4" value="<?=$student["fluoride_application4"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="fluorideApplication5" value="<?=$student["fluoride_application5"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="fluorideApplication6" value="<?=$student["fluoride_application6"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="fluorideApplication7" value="<?=$student["fluoride_application7"];?>" readonly></td>
                    
                </tr>

                <tr>
                    <td class="label">Examiner</td>
                    <td colspan="2"><input type="text" name="examinerName1" value="<?=$student["examiner_name1"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="examinerName2" value="<?=$student["examiner_name2"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="examinerName3" value="<?=$student["examiner_name3"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="examinerName4" value="<?=$student["examiner_name4"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="examinerName5" value="<?=$student["examiner_name5"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="examinerName6" value="<?=$student["examiner_name6"];?>" readonly></td>
                    <td colspan="2"><input type="text" name="examinerName7" value="<?=$student["examiner_name7"];?>" readonly></td>
                </tr>

            </table>

            <button type="submit">Submit</button>
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