$(document).ready(function(){
    $('.selectLogo').show();
    $('.dashboardForm').hide();
    $('.selectProduct').hide();
    $('.preview').hide();
    $('.congrats').hide();
});

function changeToDetails(){
    $('.selectLogo').hide();
    $('.dashboardForm').show();
    $('#iconStore').addClass('active');
}

function goBackToLogo(){
    $('.selectLogo').show();
    $('.dashboardForm').hide();
    $('#iconStore').removeClass('active');
}

function goToProduct(){
    $('.dashboardForm').hide();
    $('.selectProduct').show();
    $('#iconProduct').addClass('active');
}

function backToDashboard(){
    $('.dashboardForm').show();
    $('.selectProduct').hide();
    $('#iconProduct').removeClass('active');
}

function goToPreview(){
    $('.preview').show();
    $('.selectProduct').hide();
    $('#iconPreview').addClass('active');
}

function gotoCongrats(){
    $('.congrats').show();
    $('.preview').hide();
}

function backToProducts(){
    $('.preview').hide();
    $('.selectProduct').show();
    $('#iconPreview').removeClass('active');
}
