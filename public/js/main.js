// EmailJS
function validate() {
    let name = document.querySelector('.name')
    let email = document.querySelector('.email')
    let msg = document.querySelector('.message')
    let sendBtn = document.querySelector('.send-btn')

    sendBtn.addEventListener('click', (e) => {
        e.preventDefault();
        if (name.value == "" || email.value == "" || msg.value == "") {
            emptyerror();
        }else {
            sendmail (name.value, email.value, msg.value);
            success();
        }
    })
}
validate();

function sendmail(name,email,msg) {
    emailjs.send("service_x8cyodx","template_f43xlhm",{
        from_name: email,
        to_name: name,
        message: msg,
        });
}

function emptyerror() {
    swal({
        title: "Mmmm...",
        text: "Anda belum mengisinya!",
        icon: "error",
      });
}
function success() {
    swal({
        title: "Email telah terkirim",
        text: "Kami akan mengjawab dalam 24 jam",
        icon: "success",
      });
}


