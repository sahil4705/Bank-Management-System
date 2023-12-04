$(document).ready(function () {
  $("#btn").click(function (e) {
    console.log("clicked");

    var user = $("#user").val();
    var pwd = $("#pwd").val();
    if (user != "" && pwd != "") {
      $.ajax({
        url: "action/userlogin.php",
        method: "POST",
        data: {
          user: user,
          pwd: pwd,
        },
        success: function (response) {
          if (response == "no") {
            // $("#loginform")[0].reset();
            $("#loginform").trigger("reset");
            alert("username and password is wrong");
          } else {
            window.location.href = "action/useraction.php";
          }
        },
      });
    } else {
      alert("Both Fields Are equired");
    }
    return false;
  });

  $("#sbtn").click(function (e) {
    var suser = $("#suser").val();
    var spwd = $("#spwd").val();
    if (suser != "" && spwd != "") {
      $.ajax({
        url: "action/stafflogin.php",
        method: "POST",
        data: {
          suser: suser,
          spwd: spwd,
        },
        success: function (response) {
          if (response == "no") {
            // $("#stafffrom")[0].reset();
            $("#stafffrom").trigger("reset");
            alert("username and password is wrong");
          } else {
            window.location.href = "action/staffaction.php";
          }
        },
      });
    } else {
      alert("Both Fields Are Required");
    }
    return false;
  });
  $("#signupbtn").click(function (e) {
    var username = $("#username").val();
    var semail = $("#semail").val();
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    if (username != "" && semail != "" && password != "" && cpassword != "") {
      $.ajax({
        url: "action/user_add.php",
        method: "POST",
        data: {
          username: username,
          semail: semail,
          password: password,
          cpassword: cpassword,
        },
        success: function (response) {
          if (response == "PasswordNotSame") {
            alert("Both Password Must Be Same");
          } else if (response == "UsernameNotavAvailable") {
            $("#username").val("");
            alert("This Username Is Alredy Taken Change Your Username");
          } else if (response == "EmailNotavAvailable") {
            $("#semail").val("");
            alert("This Email Is Alredy Taken Change Your Email");
          } else if (response == "Sucess") {
            closeModal();
            location.reload(true);
            alert("Signup Sucessfully Complete");
          } else {
            alert(response);
          }
        },
      });
    } else {
      alert("All Fields Are Required");
    }
    return false;
  });
});
