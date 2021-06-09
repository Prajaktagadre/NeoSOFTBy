/*=========================================================================================
    File Name: wizard-steps.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit
    Version: 1.2
    Author: ThemeSelection
    Author URL: https://themeselection.com/
==========================================================================================*/

// Wizard tabs with numbers setup
$(".number-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Wizard tabs with icons setup
$(".icons-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

var is_async_step = false;
// Vertical tabs form wizard setup
$(".vertical-tab-steps1").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onStepChanging: function (event, currentIndex, newIndex) {
        //USED TO SEND USER TO NEXT STEP IS ASYNC REQUEST IS PRESENT - FOR AJAX CALL 
        if (is_async_step) {
            is_async_step = false;
            //ALLOW NEXT STEP
            return true;
        }

        if (currentIndex == 0) {  
            // var myDropzone = Dropzone.forElement("#dpz-remove-thumb");              
            // myDropzone.processQueue(); 
            var files = $('#book_thumb')[0].files[0];
            var form_store_edit = $('#form_store_edit').val();
            var formData = new FormData();
            formData.append('file', files);
            formData.append('product_name', $('#product_name').val());
            formData.append('ISBN_no', $('#ISBN_no').val());
            formData.append('publishing_date', $('#publishing_date').val());
            formData.append('publisher_id', $('#publisher_id').val());
            formData.append('type_id', $('#type_id').val());
            formData.append('price', $('#price').val());
            formData.append('is_featured', $('#is_featured').is(':checked'));
            formData.append('is_popular', $('#is_popular').is(':checked'));
            formData.append('status', $('#status').val()); 
            $.ajax({
                type: 'POST',
                url: form_store_edit,
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                data: formData,
                 contentType: false, //this is requireded please see answers above
                 processData: false,
                 cache: false,
                success: function (data) {
                    // move = data.d;

                    //Add below 2 lines for every Index(Steps).                            
                    is_async_step = true;
                    //This will move to next step.
                    $('#product_create').steps("next");
                    $('#file_path').val(data.path);
                    $('#success_redirect').val(data.success_redirect);
                },
                error:function(reject){
                    if( reject.status === 422 ) {
                        var errors = reject.responseJSON;
                        $.each(errors.errors, function (key, val) {
                        
                        });
                    }
                },

            });
        }
         //Return false to avoid to move to next step
         return false;
    },
    onFinished: function (event, currentIndex) {
        // var file_path = document.getElementById('file_path');
        // if (file_path != null || file_path != '') {
            // document.getElementById("submitForm").submit(); 
            $("#submitForm").submit();
        // }else{
        //     alert('server file path not found');
        // }
    }
});

$(".vertical-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Validate steps wizard

// Show form
var form = $(".steps-validation").show();

$(".steps-validation").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            return false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});

// Initialize validation

// $(".steps-validation").validate({
//     ignore: 'input[type=hidden]', // ignore hidden fields
//     errorClass: 'danger',
//     successClass: 'success',
//     highlight: function(element, errorClass) {
//         $(element).removeClass(errorClass);
//     },
//     unhighlight: function(element, errorClass) {
//         $(element).removeClass(errorClass);
//     },
//     errorPlacement: function(error, element) {
//         error.insertAfter(element);
//     },
//     rules: {
//         email: {
//             email: true
//         }
//     }
// });


// Initialize plugins
// ------------------------------

// Date & Time Range
// $('.datetime').daterangepicker({
//     timePicker: true,
//     timePickerIncrement: 30,
//     locale: {
//         format: 'MM/DD/YYYY h:mm A'
//     }
// });