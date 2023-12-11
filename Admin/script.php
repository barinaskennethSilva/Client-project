<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(){
    $(document).ready(function(){
      var data = {
   usertype: $("#usertype").val(),
   user_profile: $("#user_profile").val(),
        First_Name: $("#First_Name").val(),
        Last_Name: $("#Last_Name").val(),
        email: $("#email").val(),
       contact_Num: $("#contact_Num").val(),
        username: $("#username").val(),
       ad_position: $("#ad_position").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          $('#responseMessage').text(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }
</script>