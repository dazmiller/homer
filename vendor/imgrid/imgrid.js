/* IMGRID ~ adobewordpress.com */
//$('#imgrid').prepend('<div class="imgrid-header"><span class="result"></span><a class="button unselect" style="display:none">Unselect All</a><a class="button selectall">Select All</a></div>');

var selectedOnes = 0;
checkSelected();
$("div.image-selection div").click(function() {
    if ( $(this).find('img').hasClass('selected')){
        $(this).find('img').removeAttr('class')
        selectedOnes--;
        checkSelected();
    }
    else{
        selectedOnes++;
        checkSelected();
        if ( $(this).parent('div').attr("data-selection") == 'single' ) {
            $("div[data-selection='single']  img").removeClass('selected');
            $(this).find('img').toggleClass('selected');
        } else {
            $(this).find('img').toggleClass('selected');
        }
    }

    if ( $('div.image-selection div.gallery-item img').length != $('div.image-selection div.gallery-item img.selected').length ) {
        $("a.selectall").show();
    }
    else{
        $("a.selectall").hide();
    }

    if ( $('div.image-selection div.gallery-item img.selected').length>0 ) {
        $("a.delete").show();
    } 
    else{
        $("a.delete").hide();
    }

    echoResult();
});


function checkSelected(){
    if ( selectedOnes > 0 ) {$("a.unselect").show();}
    else{$("a.unselect").hide();}
}

    /* Gallery Sizes */
    $("div[data-image-size='large'] div").addClass('large');
    $("div[data-image-size='medium'] div").addClass('medium');
    $("div[data-image-size='small'] div").addClass('small');

/* Disable Dragging an Image */
$("div.image-selection img").mousedown(function(){
    return false;
});

$("a.delete").click(function() {
    $("img.selected").parents('div.gallery-item').remove();
    selectedOnes=0;
    checkSelected();

    if ( $('div.image-selection div.gallery-item img').length==0 ) {
        $(".image-selection").append('<p>No item.</p>');
        $("a.delete").hide();
    }
    echoResult();
});

$("a.unselect").click(function() {
    $("img.selected").removeClass('selected');
    $("a.unselect").hide();
    $("a.delete").hide();   
    $("a.selectall").show();
    selectedOnes=0;
    echoResult();
});

$(".selectall").click(function() {
    selectedOnes=$('div.image-selection div').length;
    $("div.image-selection div img").addClass('selected');
    checkSelected();
    $(".selectall").hide();
    $("a.delete").show();
    echoResult();
});

function echoResult(){
    if ( $('div.image-selection div.gallery-item img.selected').length>0 && $("div.image-selection").attr('data-selection') != 'single') {
            $("span.result").html(selectedOnes+' item(s) selected.');
    } 
    else{
        $("span.result").html('');
    }
}

$( document ).ready(function() {
    if ($("div.image-selection").attr('data-selection') == 'single') {
        $("a.selectall").remove();
        $("a.unselect").remove();
    } 
});