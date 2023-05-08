$(document).ready(function () {
    // add event listener to hamburger button
    $('#hamburger-btn').click(function () {
        // toggle the visibility of the side nav
        $('#sidenav').toggle();
        // toggle the left position to show or hide the side nav
        if ($('#sidenav').is(':visible')) {
            $('#sidenav').animate({ left: '0px' }, 300);
        } else {
            $('#sidenav').animate({ left: '-300px' }, 300);
        }
    });
});

