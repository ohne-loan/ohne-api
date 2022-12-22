$(document).ready(function () {

    /* show submenu itens */
    $('.has-submenu').click(function (e) {
        e.preventDefault();
        var $submenu = $('.has-submenu');
        if (!$(this).hasClass('sidebar-active')) {
            $submenu.find('ul').slideUp();
            $submenu.removeClass('sidebar-active');
            $('#sidebar > ul > li').removeClass('sidebar-active');
            $(this).addClass('sidebar-active');
            $(this).children('ul').slideDown();
        }
    });

    /* Open childrens from selected menu item after load page */
    $('.sidebar-active').children('ul').slideDown();

    $('.submenu-link').click(function () {
        window.location.href = $(this).attr('href');
    });

    /* Open sidebar */
    $('#sidebar-menu-button').click( function () {
        openSidebar();
        toggleSidebarArrowButton();
    })

    /* close sidebar */
    $('#overlay').click( function () {
        closeSidebar();
        $('#sidebar-menu-button').toggle('show');
    });

    /* close sidebar when navbar button clicked */
    $('.navbar-toggler').click( function () {
        if ($(this).attr('data-toggle')) {
            closeSidebar();
            if ( $('#navbarSupportedContent').hasClass('show') ) {
                showSidebarArrowButton();
            } else {
                hideSidebarArrowButton();
            }
        }
    })
});

/* Open sidebar function */
function closeSidebar() {
    var $menu = $('#sidebar');
    $menu.hide('fast');
    $menu.siblings('#overlay').css('display', 'none');
}

/* close sidebar function */
function openSidebar() {
    var $menu = $('#sidebar');
    $menu.addClass('sidebar-open');
    $menu.show('fast');
    $menu.siblings('#overlay').css('display', 'block');
}

/* toggle sidebar arrow button function */
function toggleSidebarArrowButton() {
    $('#sidebar-menu-button').toggle();
}

/* hide sidebar arrow button function */
function hideSidebarArrowButton() {
    $('#sidebar-menu-button').hide();
}

/* show sidebar arrow button function */
function showSidebarArrowButton() {
    $('#sidebar-menu-button').show();
}