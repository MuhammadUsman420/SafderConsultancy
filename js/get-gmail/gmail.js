function sendEmail(){
    debugger;

Email.send({
    Host : "smtp.elasticemail.com",
    Username : "m32usman12@gmail.com",
    Password : "98851B3FAC0B1E345B0FA0AB31DFE357EF68",
    To : 'm32usman12@gmail.com',
    From : document.getElementById("email").value,
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);

}

