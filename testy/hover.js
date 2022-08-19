//Moved btn text into variable so it can be changed more easily
var btn_text = {
    default: "Add To Favs",
    added: "Selection Added",
    remove: "Remove Selection"
}


$('.fav_btn')
//set initial text and classes
.removeClass('remove added')
.html(btn_text.default)
//The click toggles the 'default' and 'added' states
.on('click', function(e) {

    //Toogle the 'added' class
    $(this).toggleClass('added');

    //Swap the text
    if ($(this).is('.added')) {
        $(this).html(btn_text.added);
    } else {
        $(this)
            .removeClass('remove added')
            .html(btn_text.default)
    }
})
.on('mouseover', function(){
    //If it has the 'added' class...add the 'remove' text 
    if ($(this).is('.added')) {
        $(this)
        .addClass('remove')
        .html(btn_text.remove)
        .on('mouseout', function() {

            //Get rid of the 'remove' class
            $(this).removeClass('remove');

            //Swap out the 'remove' text
            if ($(this).is('.added')) {
                $(this).html(btn_text.added);
            } else {
                $(this).html(btn_text.default);
            }  
        });
    }
});