function sendMail() {
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "cuhcseprincelal2@gmail.com",
        Password : "DAC2BBBAB405AD26B9A2088412ABBC39C2E9",
        To : 'cipetprincelal@gmail.com',
        From : "cuhcseprincelal2@gmail.com",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
};
// const sendMail = () => {
//     Email.send({
//         Host : "smtp.gmail.com",
//         Username : "cuhcseprincelal2@gmail.com",
//         Password : "Prince@2001",
//         To : "cipetprincelal@gmail.com",
//         From : "cuhcseprincelal2@gmail.com",
//         Subject : "New Contact Us form filled",
//         Body : `Name: ${document.getElementById("contact-name").value} <br/> 
//                 Phone Number: ${document.getElementById("phone-number").value} <br/>
//                 Email Address: ${document.getElementById("email-address").value} <br/>
//                 Message: ${document.getElementById("message").value}`
//     }).then(
//         alert("Message Sent Successfully")
//     );
// };

// window.onload = function() {
//     document.getElementById('submit').addEventListener('click', (event) => {
//         event.preventDefault();
        
//         if (!validateForm()) {
//             return false;
//         } else {
//             sendmail();
//             resetForm();
//         };
//     });
// }
