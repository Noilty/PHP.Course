//Основной JS файл

$(function() {
    var obj = {};
    var el = document.querySelectorAll('.comment-gallery-edit');
    // console.log(el);

    for (var i = 0; i < el.length; i++) {
        el[i].addEventListener('click', (e) => {
            obj.id = e.target.id;
            if (!$('#' + obj.id).has('.edit-message').length) {
                $('<div class="edit-message"> Form: ' + obj.id + '</div>').appendTo('#' + obj.id);
                // $('#' + obj.id).append('<div class="edit-message"> Form: ' + obj.id + '</div>');
            } else {
                $('.edit-message').remove();
            }

            // console.log(obj.id);
        });
    }

    // $('#').click(function() {
    //     if (!$(this).has('.work').length) {
    //         $('<div class="work">Work</div>').appendTo('#');
    //     } else {
    //         $('.work').remove();
    //     }
    // });
});