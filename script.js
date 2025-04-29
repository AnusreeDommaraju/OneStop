const header = document.querySelector('header');
function fixedNavbar(){
	header.classList.toggle('scrolled',window.pageYOffset > 0)
}
fixedNavbar();
window.addEventListener('scroll', fixedNavbar);

let userBtn = document.querySelector('#user-btn');

userBtn.addEventListener('click', function(){
	let userBox = document.querySelector('.user-box');
	userBox.classList.toggle('active');
})

document.getElementById("subscribeBtn").addEventListener("click", function () {
  const email = document.getElementById("emailInput").value;
  const successMessage = document.getElementById("successMessage");

  if (email.trim() !== "") {
      successMessage.textContent = "You have successfully subscribed!";
      successMessage.style.display = "block";
  } else {
      successMessage.textContent = "Please enter a valid email address.";
      successMessage.style.display = "block";
      successMessage.style.color = "red";
  }
});


