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


// $(document).ready(function () {
//   // Summernote, edit enter key
//   $.summernote.addPlugin({
//     name : 'myenter',
//     events : {
//       // redefine insertParagraph 
//       'insertParagraph' : function(event, editor, layoutInfo) {

//         // custom enter key
//         var newLine = '<br />';
//         pasteHtmlAtCaret(newLine);

//         // to stop default event
//         event.preventDefault();
//       }
//     }
//   });
// });

// function pasteHtmlAtCaret(html) {
//     var sel, range;
//     if (window.getSelection) {
//         // IE9 and non-IE
//         sel = window.getSelection();
//         if (sel.getRangeAt && sel.rangeCount) {
//             range = sel.getRangeAt(0);
//             range.deleteContents();

//             // Range.createContextualFragment() would be useful here but is
//             // only relatively recently standardized and is not supported in
//             // some browsers (IE9, for one)
//             var el = document.createElement("div");
//             el.innerHTML = html;
//             var frag = document.createDocumentFragment(), node, lastNode;
//             while ( (node = el.firstChild) ) {
//                 lastNode = frag.appendChild(node);
//             }
//             range.insertNode(frag);

//             // Preserve the selection
//             if (lastNode) {
//                 range = range.cloneRange();
//                 range.setStartAfter(lastNode);
//                 range.collapse(true);
//                 sel.removeAllRanges();
//                 sel.addRange(range);
//             }
//         }
//     } else if (document.selection && document.selection.type != "Control") {
//         // IE < 9
//         document.selection.createRange().pasteHTML(html);
//     }
// }