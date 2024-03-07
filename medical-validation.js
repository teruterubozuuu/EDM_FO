// Validation for "Should your child need to go home during the day and we need to contact you, is there someone at your house who would care for the child?"
var noAvailableGuardian = document.getElementById("noAvailableGuardian");
var yesAvailableGuardian = document.getElementById("yesAvailableGuardian");
var availableGuardianName = document.getElementById("AvailableGuardianName");
var availableGuardianTelno = document.getElementById("AvailableGuardianTelno");

noAvailableGuardian.addEventListener("change", function() {
    if (noAvailableGuardian.checked) {
        availableGuardianName.disabled = true;
        availableGuardianTelno.disabled = true;
    } 
});

yesAvailableGuardian.addEventListener("change",function(){
    if(yesAvailableGuardian.checked) {
        availableGuardianName.disabled = false;
        availableGuardianTelno.disabled = false;
    }
});

//Validation for "Has your child been tested positive for COVID 19?"
var yesTestedPositive = document.getElementById("yesTestedPositive");
var noTestedPositive = document.getElementById("noTestedPositive");
var dateTestedPositive = document.getElementById("dateTestedPositive");

noTestedPositive.addEventListener("change", function() {
    if (noTestedPositive.checked) {
        dateTestedPositive.disabled = true;
    } 
});

yesTestedPositive.addEventListener("change",function(){
    if(yesTestedPositive.checked) {
        dateTestedPositive.disabled = false;
    }
});

//Validation for "Does your child bruise easily or bleed excessively after injury or tooth extraction?"
var yesEasilyExcessively = document.getElementById("yesEasilyExcessively");
var noEasilyExcessively = document.getElementById("noEasilyExcessively");
var BruiseBleedInitialMngmt = document.getElementById("BruiseBleedInitialMngmt");

noEasilyExcessively.addEventListener("change", function() {
    if (noEasilyExcessively.checked) {
        BruiseBleedInitialMngmt.disabled = true;
    } 
});

yesEasilyExcessively.addEventListener("change",function(){
    if(yesEasilyExcessively.checked) {
        BruiseBleedInitialMngmt.disabled = false;
    }
});

//Validation for "Does your child have history of medical problems or disabilities about which Aquinas school should know?"
var yesHistoryMedicalProb = document.getElementById("yesHistoryMedicalProb");
var noHistoryMedicalProb = document.getElementById("noHistoryMedicalProb");
var HistoryMedicalProbInitialMngmt = document.getElementById("HistoryMedicalProbInitialMngmt");

noHistoryMedicalProb.addEventListener("change", function() {
    if (noHistoryMedicalProb.checked) {
        HistoryMedicalProbInitialMngmt.disabled = true;
    } 
});

yesHistoryMedicalProb.addEventListener("change",function(){
    if(yesHistoryMedicalProb.checked) {
        HistoryMedicalProbInitialMngmt.disabled = false;
    }
});

//Validation for "Does your child have any allergies to medications,foods or insects bites?"
var hasAllergies = document.getElementById("hasAllergies");
var noAllergies = document.getElementById("noAllergies");
var AllergiesInitialMngmt = document.getElementById("AllergiesInitialMngmt");

noAllergies.addEventListener("change", function() {
    if (noAllergies.checked) {
        AllergiesInitialMngmt.disabled = true;
    } 
});

hasAllergies.addEventListener("change",function(){
    if(hasAllergies.checked) {
        AllergiesInitialMngmt.disabled = false;
    }
});

//Validation for "Has your child been admitted for the past 6 months or sought consultation due to significant complaints?"
var Admitted = document.getElementById("Admitted");
var notAdmitted = document.getElementById("notAdmitted");
var admittedSpecify = document.getElementById("admittedSpecify");

notAdmitted.addEventListener("change", function() {
    if (notAdmitted.checked) {
        admittedSpecify.disabled = true;
    } 
});

Admitted.addEventListener("change",function(){
    if(Admitted.checked) {
        admittedSpecify.disabled = false;
    }
});

//Validation fpr "IMMUNIZATION"
var completeImmunization = document.getElementById("completeImmunization");
var incompleteImmunization = document.getElementById("incompleteImmunization");
var specifyImmunization = document.getElementById("specifyImmunization");

completeImmunization.addEventListener("change", function() {
    if (completeImmunization.checked) {
        specifyImmunization.disabled = true;
    } 
});

incompleteImmunization.addEventListener("change",function(){
    if(incompleteImmunization.checked) {
        specifyImmunization.disabled = false;
    }
});

function toggleRequired() {
    var checkbox = document.querySelector('input[type="checkbox"]');

    // Set or remove the 'required' attribute based on checkbox state
    if (checkbox.checked) {
        checkbox.removeAttribute("required");
    } 
}
