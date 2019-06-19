var recivedID;
var firstname;
var lastname;

function send(id) {
    $.ajax({
        async: false,
        type: "POST",
        url: "mamale",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        data: { id: id },
        dataType: "json",
        success: function(id) {
            recivedID = id[0]['idnumber'];
            firstname = id[0]['firstname'];
            lastname = id[0]['lastname'];
            var tr_str = "<tr>" +
                "<td align='center'><h2><b> " + recivedID + " &nbsp; </h2></b> </td>" +
                "<td align='center'><h2><b> " + firstname + " &nbsp; </h2></b> </td>" +
                "<td align='center'><h2><b>" + lastname + " &nbsp; </h2></b> </td>" +
                "</tr>";

            $("#userTable tbody").append(tr_str);



        },
        error: function(id) {
            //console.log(id);
            console.log("Not Found.");
        }

    });
    return { recivedID, firstname, lastname };
}

$('button[name=submitbutton]').click(function(event) {
    var id = $(this).closest('div').find('input[name="id"]').val();
    if (id.length >= 8 && id.length <= 10) {
        send(id);

        if (id != undefined && firstname != undefined && lastname != undefined) {
            $("#first").attr('hidden', 'hidden');
            $("#detailss").removeAttr('hidden');

            $("#webcam").webcam({
                width: 320,
                height: 240,
                mode: "callback",
                swffile: "download/jscam_canvas_only.swf",
                onTick: function(remain) {

                    if (0 == remain) {
                        jQuery("#status").text("Cheese!");
                    } else {
                        jQuery("#status").text(remain + " seconds remaining...");
                    }
                },

                onSave: function(data) {


                    $("#canvas").append("<li>" + img + "</li>");

                    // Work with the picture. Picture-data is encoded as an array of arrays... Not really nice, though =/
                },

                onCapture: function() {
                    webcam.save('/upload.php');
                    $("#webcam").attr('hidden', 'hidden');
                    $("#canvas").append("<?php $str = file_get_contents('php://input'); file_put_contents(' / tmp / upload.jpg ', pack('H * ', $str));' ?>)");



                    // Show a flash for example
                },

                debug: function(type, string) {
                    // Write debug information to console.log() or a div, ...
                },

                onLoad: function() {
                    // Page load
                    var cams = webcam.getCameraList();
                    for (var i in cams) {
                        jQuery("#cams").append("<li>" + cams[i] + "</li>");
                    }
                }
            });

        }
    } else {
        alert("Too Long or too short id.");
    }



    $("span").text("Not valid!").show().fadeOut(1000);
    event.preventDefault();
});