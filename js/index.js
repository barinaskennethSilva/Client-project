<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
//TNT: 09108916639
<script type="text/javascript">
  function submitData(){
    $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: '../LoginForm.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }
</script>