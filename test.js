$(document).ready(function () {
    $('#bthide').css('display','none');
    $("#pickup").change(function () {
        $("#drop option").prop('disabled', false);
        $('#drop option[value="' + $("#pickup").val() + '"]').prop('disabled', 'disabled');
    });
    $('#drop').change(function () {
        $('#pickup option').prop('disabled', false);
        $('#pickup option[value="' + $("#drop").val() + '"]').prop('disabled', 'disabled');
    });
});

function hide() {
    var cabtype = document.getElementById('cabtype').value;
    if (cabtype == "CedMicro") {
        document.getElementById('lw').disabled = true;
        document.getElementById('l').style.visibility = "hidden";
        // document.getElementById('msg').innerHTML = "Luggage facility is not available";
        console.log(cabtype);
    }
    else {
        document.getElementById('lw').disabled = false;
        document.getElementById('l').style.visibility = "visible";
        // document.getElementById('msg').style.visibility = "hidden";
    }
}

function book() {
    var pickup = document.getElementById('pickup').value;
    var drop = document.getElementById('drop').value;
    var cabtype = document.getElementById('cabtype').value;
    var lw = document.getElementById('lw').value;

    if (lw < 0) {
        alert("Please Enter value of luggage between 0-999 kg.");
    }
    else {
        console.log(pickup);
        console.log(drop);
        console.log(cabtype);
        console.log(lw);

        $.ajax({
            url: 'fare.php',
            type: 'POST',
            data: {
                pickup: pickup,
                drop: drop,
                cabtype: cabtype,
                lw: lw,
            },
            success: function (result) {
                console.log(result);
                $("#price").html(result);
                $('#submit').css('display','none');
                $('#bthide').css('display','block');

              

            }
        });

    }


    
}










