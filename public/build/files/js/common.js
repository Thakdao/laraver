
document.addEventListener("DOMContentLoaded", function (e) {

	$(".reg_btn span , .box_reg .btn_close").click(function () {
		$(".overlay").toggleClass("active");
	});

  $(".box_post .pop_post , .form_post .btn_close").click(function () {
		$(".form_post").toggleClass("active");
	});
// validation form login
// const inputUsername = document.querySelector(".input-login-username");
// const inputPassword = document.querySelector(".input-login-password");
// const btnLogin = document.querySelector(".login__signInButton");

// validation form login

// btnLogin.addEventListener("click", (e) => {
//   e.preventDefault();
//   if (inputUsername.value === "" || inputPassword.value === "") {
//     alert("vui lòng không để trống");
//   } else {
//     const user = JSON.parse(localStorage.getItem(inputUsername.value));
//     if (
//       user.username === inputUsername.value &&
//       user.password === inputPassword.value
//     ) {
//       alert("Đăng Nhập Thành Công");
//       window.location.href = "index.php";
//     } else {
//       alert("Đăng Nhập Thất Bại");
//     }
//   }
// });


// validation form register and register user local storage
// const inputUsernameRegister = document.querySelector(".input-signup-username");
// const inputPasswordRegister = document.querySelector(".input-signup-password");
// const btnRegister = document.querySelector(".signup__signInButton");

// validation form register and register user local storage

// btnRegister.addEventListener("click", (e) => {
//   e.preventDefault();
//   if (
//     inputUsernameRegister.value === "" ||
//     inputPasswordRegister.value === ""
//   ) {
//     alert("vui lòng không để trống");
//   } else {
//     // array user
//     const user = {
//       username: inputUsernameRegister.value,
//       password: inputPasswordRegister.value,
//     };
//     let json = JSON.stringify(user);
//     localStorage.setItem(inputUsernameRegister.value, json);
//     alert("Đăng Ký Thành Công");
//   }
// });
});