const profile = document.querySelector("#settings");

const username = document.querySelector("#username-setting");
const email = document.querySelector("#email-setting");

username.setAttribute("value", profile.getAttribute("data-username"));
email.setAttribute("value", profile.getAttribute("data-email"));
