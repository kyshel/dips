<script type="text/javascript">

$(document).ready(function(){
    // Variable to hold request
    var request;

    // Bind to the submit event of our form
    $("#foo").submit(function(event){

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // ! not work, Serialize the data in the form
        //var serializedData = $form.serialize();

        //formdata
        var fd = new FormData(document.getElementById("foo"));

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "upload_file.php",
            type: "post",
            data: fd,
            processData: false,  // tell jQuery not to process the data
            contentType: false   // tell jQuery not to set contentTypedata: formData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log("Hooray, it worked!");

            document.getElementById("process_container").innerHTML=response;

        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
                );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

        // Prevent default posting of form
        event.preventDefault();
    });
});






function name_to_result(){
    // Variable to hold request
    var request;

    // Bind to the submit event of our form
    $("#process_form").submit(function(event){

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // ! not work, Serialize the data in the form
        var serializedData = $form.serialize();

        //formdata
        //var fd = new FormData(document.getElementById("process_form"));

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "smooth.php",
            type: "post",
            data: serializedData
            //processData: false,  // tell jQuery not to process the data
            //contentType: false   // tell jQuery not to set contentTypedata: formData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log("Hooray, it worked!");

            document.getElementById("processed_img").innerHTML=response;

        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
                );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

        // Prevent default posting of form
        event.preventDefault();
    });
};

function process(op){

        var request;
        var uploaded_name = $("#uploaded_name").val();

        var dt={
            "operate":op,
            "uploaded_name":uploaded_name
        }

        request = $.ajax({
            url: "smooth.php",
            type: "post",
            data: dt
            //processData: false,  // tell jQuery not to process the data
            //contentType: false   // tell jQuery not to set contentTypedata: formData
        });


        request.done(function (response, textStatus, jqXHR){
            console.log("Hooray, it worked!");
            document.getElementById("processed_img").innerHTML=response;

        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
                );
        });


    
};




</script>