$('.refresh-page').click(function(event){

    event.preventDefault();
    location.reload();

});

function deleteResource(id, route) {

    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        url: '/admin/' + route +  '/' + id,
        type: 'POST',
        data: {
            image_id: id,
            _method: 'DELETE',
            _token: token
        },
        success: function(data) {
            cosole.log(data);
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

}

function activateSidebar(menu, item)
{
    toggleSubmenu(menu);
    activateMenuItem(menu + '_' + item);
}

function toggleSubmenu(submenu)
{
    $('#' + submenu).addClass("toggled");
    // $('#' + submenu + ' li:first-of-type').addClass("active");
    $('#' + submenu + ' ul').css("display", 'block');
}

function activateMenuItem(menuitem)
{
    $('#' + menuitem).addClass("active");
}
