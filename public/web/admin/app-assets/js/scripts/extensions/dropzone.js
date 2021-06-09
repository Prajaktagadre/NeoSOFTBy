/*=========================================================================================
    File Name: dropzone.js
    Description: dropzone
    --------------------------------------------------------------------------------------
    Item Name: Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit
    Version: 1.2
    Author: ThemeSelection
    Author URL: https://themeselection.com/
==========================================================================================*/

Dropzone.options.dpzSingleFile = {
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 1,
    init: function() {
        this.on("maxfilesexceeded", function(file) {
            this.removeAllFiles();
            this.addFile(file);
        });
    }
};

/********************************************
*               Multiple Files              *
********************************************/
Dropzone.options.dpzMultipleFiles = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 0.5, // MB
    clickable: true
}


/****************************************************************
*               Limit File Size and No. Of Files                *
****************************************************************/
Dropzone.options.dpzFileLimits = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 0.5, // MB
    maxFiles: 5,
    maxThumbnailFilesize: 1, // MB
}


/********************************************
*               Accepted Files              *
********************************************/
Dropzone.options.dpAcceptFiles = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 1, // MB
    acceptedFiles: 'image/*'
}


/************************************************
*               Remove Thumbnail                *
************************************************/

Dropzone.options.dpzRemoveThumb = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 1, // MB
    addRemoveLinks: true,
    autoProcessQueue: false,
    dictRemoveFile: " Trash"
    
}

// Dropzone.options.dpzRemoveThumb = {
//     url: "create",
//     autoProcessQueue: false,
//     uploadMultiple: false,
//     // addRemoveLinks: false,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     maxFileSize: 1000,
//     thumbnailWidth: 100,
//     thumbnailHeight: 100,
//     dictResponseError: "Ha ocurrido un error en el server",
//     acceptedFiles: ".jpeg,.jpg,.png,.gif",
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//     },
//     // autoDiscover = false,
//     init: function () {
//         //append the data in the formData object.
//         this.on("sending", function (file, xhr, formData, e) {
//             formData.append("product_name", $('#product_name').val());
//             formData.append("ISBN_no", $('#ISBN_no').val());
//             formData.append("publishing_date", $('#publishing_date').val());
//             formData.append("publisher_id", $('#publisher_id').val());
//             formData.append("type_id", $('#type_id').val()); 
//             formData.append("price", $('#price').val()); 
//             formData.append("is_featured", $('#is_featured').is(':checked')); 
//             formData.append("is_popular", $('#is_popular').is(':checked')); 
//         });
//     },
//     success: function(file,response){
//             is_async_step = true;
//             $(".vertical-tab-steps1").steps("next");
//             $('#file_path').val(response.path);
//     }
// }

/*
* edit preview image
*/
// function previewThumbailFromUrl(opts) {
//     // var imgDropzone = Dropzone.forElement("#" + opts.selector);
//     var imgDropzone = Dropzone.forElement("#" + opts.selector);
//     var mockFile = {
//         name: opts.fileName,
//         size: 12345,
//         accepted: true,
//         kind: 'image'
//     };
//     imgDropzone.emit("addedfile", mockFile);
//     imgDropzone.files.push(mockFile);
//     imgDropzone.createThumbnailFromUrl(mockFile, opts.imageURL, function() {
//         imgDropzone.emit("complete", mockFile);
//     });
// }

// Dropzone.options.dpzRemoveThumb = {
//     init: function() {
//       let myDropzone = this;
  
//       // If you only have access to the original image sizes on your server,
//       // and want to resize them in the browser:
//       let mockFile = { name: "Filename 2", size: 12345 };
//       myDropzone.displayExistingFile(mockFile, "https://i.picsum.photos/id/959/600/600.jpg");
  
//       // If the thumbnail is already in the right size on your server:
//       let mockFile = { name: "Filename", size: 12345 };
//       let callback = null; // Optional callback when it's done
//       let crossOrigin = null; // Added to the `img` tag for crossOrigin handling
//       let resizeThumbnail = false; // Tells Dropzone whether it should resize the image first
//       myDropzone.displayExistingFile(mockFile, "https://i.picsum.photos/id/959/120/120.jpg", callback, crossOrigin, resizeThumbnail);
  
//       // If you use the maxFiles option, make sure you adjust it to the
//       // correct amount:
//       let fileCountOnServer = 2; // The number of files already uploaded
//       myDropzone.options.maxFiles = myDropzone.options.maxFiles - fileCountOnServer;
//     }
//   };


// Dropzone.options.dpzRemoveThumb = {
//     addRemoveLinks: true,
//     autoProcessQueue: false,
//     uploadMultiple: true,
//     parallelUploads: 100,
//     maxFiles: 3,
//     paramName: 'file',
//     clickable: true,
//     url: 'create',
//     init: function () {

//         var myDropzone = this;
//         // Update selector to match your button
//         $('#submit_form').click(function (e) {
//             e.preventDefault();
//                 myDropzone.processQueue();

//             // return false;
//         });

//         this.on('sending', function (file, xhr, formData) {
//             // Append all form inputs to the formData Dropzone will POST
//             var data = $('#product-create').serializeArray();
//             console.log(data);
//             $.each(data, function (key, el) {
//                 formData.append(el.name, el.value);
//             });
//             console.log(formData);

//         });
//     },
//     error: function (file, response){
//         if ($.type(response) === "string")
//             var message = response; //dropzone sends it's own error messages in string
//         else
//             var message = response.message;
//         file.previewElement.classList.add("dz-error");
//         _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
//         _results = [];
//         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
//             node = _ref[_i];
//             _results.push(node.textContent = message);
//         }
//         return _results;
//     },
//     successmultiple: function (file, response) {
//         console.log(file, response);
//     },
//     completemultiple: function (file, response) {
//         console.log(file, response, "completemultiple");
//         //$modal.modal("show");
//     },
//     reset: function () {
//         console.log("resetFiles");
//         this.removeAllFiles(true);
//     }
// };

/*****************************************************
*               Remove All Thumbnails                *
*****************************************************/
Dropzone.options.dpzRemoveAllThumb = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 1, // MB
    init: function() {

        // Using a closure.
        var _this = this;

        // Setup the observer for the button.
        $("#clear-dropzone").on("click", function() {
            // Using "_this" here, because "this" doesn't point to the dropzone anymore
            _this.removeAllFiles();
            // If you want to cancel uploads as well, you
            // could also call _this.removeAllFiles(true);
        });
    }
}