const Url = 'https://hyrimoz-launch.live/index.php/form/register/2';
var request = new XMLHttpRequest();
// var now = new Date();
// var current_year = now.getFullYear();
// var next_year = current_year + 1;
// var target_date = new Date("Jan 1, " + next_year).getTime();

// var days, hours, minutes, seconds;

// var $days = document.getElementById("d");
// var $hours = document.getElementById("h");
// var $minutes = document.getElementById("m");
// var $seconds = document.getElementById("s");

var countDownDate = new Date("Sept 09, 2021 19:00:00").getTime();
var x = setInterval(function () {

    // Get today's date and time
    var d = new Date()
    var now = d.getTime();

    var offset = d.getTimezoneOffset() * (60 * 1000);
    var utc = new Date(now + offset);
    var riyadh = new Date(utc.getTime() + (3 * 60 * 60 * 1000));

    // Find the distance between now and the count down date
    var distance = countDownDate - riyadh;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("d").innerHTML = days < 10 ? '0' + days : days;
    document.getElementById("h").innerHTML = hours < 10 ? '0' + hours : hours;
    document.getElementById("m").innerHTML = minutes < 10 ? '0' + minutes : minutes;
    document.getElementById("s").innerHTML = seconds < 10 ? '0' + seconds : seconds;
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("d").innerHTML = 0;
        document.getElementById("h").innerHTML = 0;
        document.getElementById("m").innerHTML = 0;
        document.getElementById("s").innerHTML = 0;
    }
}, 1000);

document.getElementById("form_submit").addEventListener("click", function () {
    var inpObj1 = document.getElementById("firstName");
    var inpObj2 = document.getElementById("lastName");
    var inpObj3 = document.getElementById("email");
    var inpObj4 = document.getElementById("saudiCoun");
    var inpObj5 = document.getElementById("phone");
    // var inpObj6 = document.getElementById("pharma");
    var inpObj7 = document.getElementById("speciality").value;
    var inpObj8 = document.getElementById("hospitalName");
    var inpObj9 = document.getElementById("channel").value;
    var inpObj10 = document.getElementById("confirm").checked;
    var inpObj11 = document.getElementById("terms").checked;


    if (!inpObj1.checkValidity()) {
        document.getElementById("demo1").innerHTML = inpObj1.validationMessage;
    } else {
        document.getElementById("demo1").innerHTML = "";
    }
    if (!inpObj2.checkValidity()) {
        document.getElementById("demo2").innerHTML = inpObj2.validationMessage;
    } else {
        document.getElementById("demo2").innerHTML = "";
    }
    if (!inpObj3.checkValidity()) {
        document.getElementById("demo3").innerHTML = inpObj3.validationMessage;
    } else {
        document.getElementById("demo3").innerHTML = "";

    }
    if (!inpObj4.checkValidity()) {
        document.getElementById("demo4").innerHTML = inpObj4.validationMessage;
    } else {
        document.getElementById("demo4").innerHTML = "";
    }
    if (!inpObj5.checkValidity()) {
        document.getElementById("demo5").innerHTML = inpObj5.validationMessage;
    } else {
        document.getElementById("demo5").innerHTML = "";
    }
    // if (!inpObj6.checkValidity()) {
    //   document.getElementById("demo6").innerHTML = inpObj6.validationMessage;
    // } else {
    //   document.getElementById("demo6").innerHTML = "";

    // }
    if (inpObj7 == "undefined") {
        document.getElementById("demo7").innerHTML = "please select speciality";
    } else {
        document.getElementById("demo7").innerHTML = "";
    }

    if (!inpObj8.checkValidity()) {
        document.getElementById("demo8").innerHTML = "please Enter hospital";
    } else {
        document.getElementById("demo8").innerHTML = "";
    }

    if (inpObj9 == "undefined") {
        document.getElementById("demo9").innerHTML = "Please select channel";
    } else {
        document.getElementById("demo9").innerHTML = "";
    }
    if (!inpObj10) {
        document.getElementById("demo10").innerHTML = "Please checkbox the confirm";
    } else {
        document.getElementById("demo10").innerHTML = "";
    }
    if (!inpObj11) {
        document.getElementById("demo11").innerHTML = "Please accept the terms";
    } else {
        document.getElementById("demo11").innerHTML = "";
    }

    if (inpObj1.checkValidity() && inpObj2.checkValidity() && inpObj3.checkValidity() && inpObj5.checkValidity() && inpObj7 != "undefined" && inpObj8.checkValidity()) {

        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var hospitalName = document.getElementById("hospitalName").value;
        // var pharmacy = document.getElementById("pharma").value;
        var saudiCoun = document.getElementById("saudiCoun").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var speciality = document.getElementById("speciality").value;
        var channel = document.getElementById("channel").value;
        var speaker = document.getElementById("speaker").value;

        var data = {
            api_key: "9047c51e-9fa8-4002-8831-b0076dd36942",
            webinar_id: 217,
            schedule: 269,
            first_name: firstName + ' ' + lastName,
            last_name: hospitalName + '*' + speciality + '*' + saudiCoun + '*'+ channel + '*' +speaker,
            email: email,
            phone: phone,
            channel: channel,
            speciality: speciality,
            hospitalName: hospitalName,
            saudiCoun: saudiCoun,
            question: speaker,
        }
        request.open("POST", Url);
        request.setRequestHeader("Content-Type", "application/json");
        request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));

        request.send(JSON.stringify(data))
        request.onreadystatechange = (e) => {
            if (request.status >= 200 && request.status < 300) {
                $('#register-modal').modal('hide');
                document.getElementById("form-id").reset();
                document.getElementById("demo1").innerHTML = "";
                document.getElementById("demo3").innerHTML = "";
                document.getElementById("demo4").innerHTML = "";
                document.getElementById("demo5").innerHTML = "";
                // document.getElementById("demo6").innerHTML = "";
                document.getElementById("demo7").innerHTML = "";
                document.getElementById("demo8").innerHTML = "";

                var respData = JSON.parse(request.responseText)
                window.location.replace(respData.user.thank_you_url);
            }
        }
    }

});

document.getElementById("close-modal").addEventListener("click", function () {
    document.getElementById("form-id").reset();
    document.getElementById("demo1").innerHTML = "";
    document.getElementById("demo2").innerHTML = "";
    document.getElementById("demo3").innerHTML = "";
    document.getElementById("demo4").innerHTML = "";
    document.getElementById("demo5").innerHTML = "";
    // document.getElementById("demo6").innerHTML = "";
    document.getElementById("demo7").innerHTML = "";
    document.getElementById("demo8").innerHTML = "";


});

$('#register-modal').on('hidden.bs.modal', function () {
    document.getElementById("form-id").reset();
    document.getElementById("demo1").innerHTML = "";
    document.getElementById("demo2").innerHTML = "";
    document.getElementById("demo3").innerHTML = "";
    document.getElementById("demo4").innerHTML = "";
    document.getElementById("demo5").innerHTML = "";
    // document.getElementById("demo6").innerHTML = "";
    document.getElementById("demo7").innerHTML = "";
    document.getElementById("demo8").innerHTML = "";

})

// function update() {
//   var current_date = new Date().getTime();
//   var seconds_left = (target_date - current_date) / 1000;

//   days = parseInt(seconds_left /1600200);
//   seconds_left = seconds_left % 86400;

//   hours = parseInt(seconds_left / 3600);
//   seconds_left = seconds_left % 3600;

//   minutes = parseInt(seconds_left / 60);
//   seconds = parseInt(seconds_left % 60);

//   $days.innerHTML = pad(days, 2);
//   $hours.innerHTML = pad(hours, 2);
//   $minutes.innerHTML = pad(minutes, 2);
//   $seconds.innerHTML = pad(seconds, 2);
// }


// update();

// setInterval(update, 1000);

function pad(num, size) {
    var s = num + "";
    while (s.length < size) s = "0" + s;
    return s;
}

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});
//Click event to scroll to top
$('.scrollToTop').click(function () {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
});




