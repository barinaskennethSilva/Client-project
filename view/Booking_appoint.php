
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <title>Booking Form</title>
</head>
<body>
  <style>
  body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.container {
  width: 100%;
  margin: 10px auto;
  height: 300px;
  background-color: dodgerblue;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  
}
#step2, #step3,#step4,#step5 {
  display: none;
}
       .button-navigation{
     background-color: transparent;
     border: 1px solid #111;
     position: absolute;
     right: 10px;
     top: 125px;
     font-size: 25px;
     outline: none;
     border-radius: 50%;
     height: 50px;
     width: 50px;
   }
.button-navigation:hover {
  background-color: #45a049;
  color: #fff;
}
#bookingForm{
  width: 100%;
    position: absolute;
    left: 0px;
    
}
/* Step 1 process */
  .form1{
      background-color:#fff ;
     height: 225px;
      margin-top: 5px;
      padding: 10px;
         }
    .form1-header{
      padding: 10px;
      color: #111;
      font-size: 18px;
      font-weight: 700;
      background-color: #fff;
      width: 100%;

    }
      .form1 .agent-User{
      height: 200px;
      width: 80%;
      text-align: center;
      display: block;
      flex-direction: column;
      padding: 10px;
      border-radius: 5px;
      background-color: #fff;
      animation: fadeIn 0.5s ease-in-out;
    position: absolute;
    left: 5px;
    top: 60;
    transition: 0.5s;
    cursor: pointer;
    }
         .agent-User i{
       font-size: 65px;
     }
  /* Step 2 */
  .form2, .form3,.form4{
  background-color:#fff ;  
  margin-top: 5px;
padding: 10px;
  }
  .form5{
    background-color:#fff ;  
  margin-top: 5px;
  }
  /* navigation form */
  .form-footer{
align-items: center;
justify-content: center;
display: flex;
margin-top: 80px;
  }
     .navigation-btn{
       display: flex;
       flex-direction: row;
       margin: 20px 80px;
     }
        .navigate{
     border-radius: 50%;
     width: 15px;
     height: 15px;
     margin-left: 10px;
     border: 1px solid #111;
   }
   .process-label{
     font-size: 18px;
     font-weight: 700;
   }
  .result{
   width: 100%;
   
 }
 .result1{
   list-style-type: none;
   font-size: 18px;
   margin-top: 5px;
  /* padding: 5px;*/
   width: 100% !important;
 }
 .btnForm{
   padding: 10px;
 }
  </style>
    <?php include("../Test/Header.php") ?>
  <div class="container">
    <form id="bookingForm">
      <!-- Step 1 -->
      <div class="step" id="step1">
    <div class="form1-header text-center">
   <h2>  Therapist Agent </h2>
   </div>        
            <div class="form1" id="form1">
   <button class="button-navigation" type="button" onclick="showNextOffer()"><i class="fa fa-angle-right"></i></button>
   <div class="form-container">
 <div class="agent-User shadow"id="agent-User" data-custom="Xiaolang" >
   <i class="fa fa-user"></i><br>
   <input type="radio" value="Xiaolong" id="agent-therapist" name="Therapist_agent" class="btn-radio form-check-input" onclick="nextStep(2)">
   <label class="name-agent fw-bold">Xiaolong</label>

   <p>Therapist Specialist</p>
 </div>    

  <div  class="agent-User shadow" id="agent-User" data-custom="Maviel" >
   <i class="fa fa-user"></i><br>
    <input type="radio" value="Maviel" id="agent-therapist" name="Therapist_agent" class="btn-radio form-check-input" onclick="nextStep(2)">
   <label class="name-agent fw-bold">Maviel</label>
     <p>Therapist Specialist</p>
 </div>   

   <div class="agent-User shadow" id="agent-User" data-custom="Katherine" >
   <i class="fa fa-user"></i><br>
  <input type="radio" value="Katherine" id="Therapist_agent" name="Therapist_agent" class="btn-radio form-check-input" onclick="nextStep(2)" >
   <label class="name-agent fw-bold">Katherine</label>
  <p>Therapist Specialist</p>
 </div>  
          </div>
          </div>  
 
      </div>

      <!-- Step 2 -->
      <div class="step" id="step2">
   <div class="form1-header text-center"> <h2>Personal Information</h2>
   </div>
   
     <div class="form2 p-2" id="form2">
    <div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname">
  </div>
    <div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname">
  </div>
    <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
      <select id="gender" name="gender" required class="form-control">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
   <option value="Other">Other</option>
    </select>
  </div>

  </div>   
   <div class="d-flex">
       <button class="btn btn-primary ms-3 w-50" type="button" onclick="prevStep(1)">Previous</button>
    <button class=" me-3 ms-3 btn btn-primary w-50" type="button" onclick="nextStep(3)">Next</button> 
   </div>
      </div>

      <!-- Step 3 -->
      <div class="step" id="step3">
   <div class="form1-header text-center">   <h2>Booking Details</h2>
</div>
  <div class="form3">
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">Contact Number</label>
    <input type="tel" class="form-control" id="contact_Num" maxlength="11" name="contact_Num">
  </div>
  
    <div class="mb-3">
    <label for="Services" class="form-label">Types of Services</label>
          <div class="d-flex">
  <select class="form-control w-50" id="Type_service"  name="Type_service">
   <option value="Single Services">Single Services</option>
  <option value="Packages">Packages</option>
  <option value="Combo Package">Combo Package</option>
     </select>  
     
     <select class="form-control ms-2 w-50" id="Mass_type" name="Mass_type">
   <option value="1hr Full Body Massage">1hr Full Body Massage</option>
  <option value="1hr Foot Reflex">1hr Foot Reflex</option>
  <option value="Foot Spa">Foot Spa</option>
     </select>  
 </div>
  </div>
   </div>

     <div class="d-flex">   
        <button type="button" class="btn btn-primary ms-3 w-50" onclick="prevStep(2)">Previous</button>
      <button class=" me-3 ms-3 btn btn-primary w-50" type="button" onclick="nextStep(4)">Next</button>      </div>
       </div>
          <!-- Step 4 -->
      <div class="step" id="step4">
   <div class="form1-header text-center">   <h2>Booking Details</h2>
</div>
   <div class="form4">
     
        <div class="mb-3">
    <label for="Date_arr" class="form-label" >Date of Arrival</label>
    <input type="date" class="form-control" id="Date_arr" name="Date_arr" >
  </div>
     
    <div class="mb-3">
    <label for="Time_arr" class="form-label">Time of Arrival</label>
    <input type="time" class="form-control" id="Time_arr" name="Time_arr" >
     </div>
     
         <div class="mb-3">
    <label for="time" class="form-label">Time Interval</label>
   <select class="form-control" id="Time_inter" id="Time_inter" >
   <option value="1 hrs">1 hrs</option>
  <option value="2 hrs">2 hrs</option>
  <option value="3 hrs">3 hrs</option>
     </select>  
     </div>
     
          <div class="d-flex">   
        <button type="button" class="btn btn-primary ms-3 w-50" onclick="prevStep(3)">Previous</button>
  
      <button class=" me-3 ms-3 btn btn-primary w-50" type="button" onclick="nextStep(5)">Next</button>
  </div>
  </div>
   </div>
   
             <!-- Step 5 -->
      <div class="step" id="step5">
   <div class="form1-header text-center">   <h2>Process Details</h2>
</div>
   <div class="form5" id="form5">

  </div>
   </div>
</div>
    
    
    </form>
  
      <div class="form-footer ">
          <div id="responseMessage"></div>
    <div class="navigation-btn">
  <div class="navigate step" id="navigate1"></div>
<div class="navigate step" id="navigate2"></div>
<div class="navigate step" id="navigate3"></div>
<div class="navigate step" id="navigate4"></div>
<div class="navigate step" id="navigate5"></div>
      </div>
    </div>
  </div>
  
  </div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>

     

     
function signUp(){
    var data = {
  Therapist_agent: $('input[name="Therapist_agent"]:checked').val(),
          fname: $("#fname").val(),
        lname: $("#lname").val(),
       gender: $("#gender").val(),
        email: $("#email").val(),
        contact_Num: $("#contact_Num").val(),
       Type_service: $("#Type_service").val(),
        Mass_type: $("#Mass_type").val(),
         Date_arr: $("#Date_arr").val(),
         Time_arr: $("#Time_arr").val(),
           Time_inter: $("#Time_inter").val(),
      };
 
  $.ajax({
    method:'post',
    url:'Book_func.php',
    data:data,
    success: function(response){
      if (response === 'Success') {
         window.location.href = 'Home.php';
        } 
        else{
        $('#responseMessage').text(response);
        } 
    }
  })
}
let currentStep = 1;
let currentNavStep = 1;

function showStep(step, navigate) {
  document.getElementById(`step${currentStep}`).style.display = 'none';
  document.getElementById(`step${step}`).style.display = 'block';

  for (let i = 1; i <= 5; i++) {
    document.getElementById(`navigate${i}`).style.backgroundColor = "";
  }

  document.getElementById(`navigate${navigate}`).style.backgroundColor = "green";

  currentStep = step;
  currentNavStep = navigate;
}
function nextStep(element, step) {
    let nextStep = currentStep < 5 ? currentStep + 1 : 1;
    let nextNavStep = currentNavStep < 5 ? currentNavStep + 1 : 1;
    showStep(nextStep, nextNavStep);

    /* This Step is Under Maintenance */
    var processDetails = document.getElementById("form5");
var selectedTherapist = document.querySelector('input[name="Therapist_agent"]:checked');

    if (!selectedTherapist) {
        alert("Please choose an agent therapist");
        return;
    }
  
    var form5 = document.getElementById('form5');
    
    var Therapist_agent = selectedTherapist.value;
    
    var Type_service = document.getElementById("Type_service").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("gender").value;
    var Date_arr = document.getElementById("Date_arr").value;
    var Time_arr = document.getElementById("Time_arr").value;
    var Time_inter = document.getElementById("Time_inter").value;
    
 const [hours, minutes] = Time_arr.split(':');
const dateObj = new Date();
            dateObj.setHours(hours);
            dateObj.setMinutes(minutes);
const formattedTime = dateObj.toLocaleTimeString('en-US', { timeZone: 'Asia/Manila', hour: '2-digit', minute: '2-digit' });

   var userObject = {
        "Agent Therapist":Therapist_agent,
        "Types of Services": Type_service,
        "Date of Arrival": Date_arr,
        "Time of Arrival": formattedTime,
        "Time of Interval": Time_inter
    };
var ulContent = "<ul class='result'>";
var BtnContent = "<div></div>";
for (var key in userObject) {
        if (userObject.hasOwnProperty(key)) {
          var li = document.createElement("li");
            ulContent += "<li class='result1'>" + key + ": " + userObject[key] + "</li>" + " <li class='result1'>" +"</li>"
         
        }
        
    }
    BtnContent +=" <div class='d-flex btnForm mt-4'>"+   
       " <button type='button' class='btn btn-primary ms-3 w-50' onclick='prevStep(3)'>Previous</button>"+
     "<button class='btn btn-primary ms-3 w-50 me-3' onclick='signUp()' type='button'>Submit</button> </div>";
   BtnContent +=" </div>" ;
    ulContent += "</ul>";

    processDetails.innerHTML = ulContent + BtnContent;
}


function prevStep() {
  let prevStep = currentStep > 1 ? currentStep - 1 : 5;
  let prevNavStep = currentNavStep > 1 ? currentNavStep - 1 : 5;
  showStep(prevStep, prevNavStep);
  

}


document.getElementById('bookingForm').addEventListener('submit', function (event) {
  event.preventDefault();
  alert('Form submitted successfully!');
});

let currentOfferIndex = 0;
function showNextOffer() {
    const offers = document.querySelectorAll('.agent-User');
    
    if (currentOfferIndex < offers.length - 1) {
        offers[currentOfferIndex].style.display = 'none';
        currentOfferIndex++;
        offers[currentOfferIndex].style.display = 'block';
    } else {
        offers[currentOfferIndex].style.display = 'none';
        currentOfferIndex = 0;
        offers[currentOfferIndex].style.display = 'block';
    }
}

</script>
</body>
</html>