Dropzone.options.addImages = {
   maxFilesize: 2, // Max File Limit which 2mb
   acceptedFiles: "image/*",  //accept images only
   success: function(file,response){
      if (file.status=='success'){
         handleDropzoneFileUpload.handleSuccess(response);
      } else{
         handleDropzoneFileUpload.handleError(response);
      }

   }
};

var handleDropzoneFileUpload = {
   handleError: function(response) {
      console.log(response);

   },

   handleSuccess: function (response) {


      var imageList = $('#gallery-images ul');
      var imageScr = baseUrl + '/' + response.file_path;
      $(imageList).append(' <li> <a href = "' + imageScr + '"  ><img src="' + imageScr + '"> </a> <li> ');
   }

};




$(function(){

   console.log("Document is ready!!!");

});