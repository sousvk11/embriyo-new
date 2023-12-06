 function openDrawer(){
    $('.proPopup').toggleClass('show menu-dropdown');
    $('.popupBox').toggleClass('show');
}

$(document).ready(function(){
    $('#gridId').show()
    $('#listId').hide()
    $('#uploadFileModal').hide()
    $('#productModal').hide()
    $('#gridbtn').addClass('active')


    Dropzone.autoDiscover = false;
    const dropzoneElement = document.getElementById("my-awesome-dropzone");

    // Check if a Dropzone instance is already attached
    if (dropzoneElement.dropzone) {
        // If a Dropzone instance exists, destroy it before reinitializing
        dropzoneElement.dropzone.destroy();
    }

    // Initialize Dropzone with addRemoveLinks set to true
    const myDropzone = new Dropzone(dropzoneElement, {
        paramName: "file",
        maxFilesize: 2,
        maxFiles: 5,
        acceptedFiles: ".png, .jpg, .jpeg, .gif",
        dictDefaultMessage: "Drop files here or click to upload",
        dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
        dictFileTooBig: "File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.",
        dictInvalidFileType: "You can't upload files of this type.",
        dictMaxFilesExceeded: "You can only upload {{maxFiles}} files.",
        addRemoveLinks: true,
        init: function () {
            this.on("success", function (file, response) {
                console.log(response);
            });

            // Define the removedfile event to handle removal
            this.on("removedfile", function (file) {
                // Add your logic here to handle the removal
                console.log("File removed:", file);
            });
        }
    });
});

function gridView(e){
    $('#gridId').show()
    $('#listId').hide()
    if(!$('#gridbtn').hasClass('active')){
        $('#gridbtn').addClass('active')
        $('#listbtn').removeClass('active')
    }


}

function listView(e){
    $('#gridId').hide()
    $('#listId').show()
    if(!$('#listbtn').hasClass('active')){
        $('#gridbtn').removeClass('active')
        $('#listbtn').addClass('active')
    }
}

function openUploadModal(){
    const modal = document.getElementById('myModal');
    modal.classList.remove('hidden');
    const fileList = document.getElementById('fileList');

}

function closeUploadModal(){
    $('#myModal').addClass('hidden')
}


function openOptionDrawer(){
    $('.gridDotDetailsBox').toggleClass('show')
}


function closeOptionDrawer(){
    $('.headFilterBtn').attr('data-open',0)
    $('.gridDotDetailsBox').hide()
}

function closeDrawer(){
    $('.gridDotDetailsBox').hide()
}

function headFilterBtn(e){
    $('.filterBox').toggleClass('show')
}

function openDetailBox(){
    $('#productModal').modal('toggle')
}

function closeDetailModal(){
    $('#productModal').hide()
}

function closeLogoModal(){
    $('#productModal').modal('toggle')
}

function openLogoOption(e){
    if($(e).attr('data-dot-open') == 0){
        $(e).attr('data-dot-open',1)
        $('#detailsBox1').show()
    }else{
        $(e).attr('data-dot-open',0)
        $('#detailsBox1').hide()
    }
}

function openActionPopup(e){
    if($(e).attr('data-action-popup') == 0){
        $(e).attr('data-action-popup',1)
        $('.actionBtnGroup').show();
    }else{
        $(e).attr('data-action-popup',0)
        $('.actionBtnGroup').hide();
    }
}

function openLogoDigitizedDetails(e){
    const id = $('#digitizedBox').attr('data-target')
    $(id).toggleClass('show')

}
