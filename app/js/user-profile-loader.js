function setupActiveNavigation(navSelector = '#mainNav') {
    $(`${navSelector} .nav-link`).click(function() {
        $(`${navSelector} .nav-item`).removeClass('active');
        $(this).closest('.nav-item').addClass('active');
    });

    const currentPage = location.pathname.split('/').pop();
    $(`${navSelector} .nav-link`).each(function() {
        if ($(this).attr('href').endsWith(currentPage)) {
            $(this).closest('.nav-item').addClass('active');
            return false;
        }
    });
}


$(document).ready(function() {
    const userData = JSON.parse(localStorage.getItem('user_info'));
    
    if (userData) {
        const generateInitials = (name) => {
            if (!name) return 'A';
            
            const names = name.split(' ');
            let initials = names[0].charAt(0).toUpperCase();
            
            if (names.length > 1) {
                initials += names[names.length - 1].charAt(0).toUpperCase();
            }
            
            return initials;
        };

        const initials = generateInitials(userData.Nombre);
        
        $('.navbar-nav .nav-link.dropdown-toggle').text(initials);

        $('.dropdown-header').text(userData.Nombre || 'Usuario');

        $('.dropdown-item-text.small').text(userData.Rol || 'Rol no definido');
    } else {
        console.error('No se encontraron datos del usuario en localStorage');
    }

    setupActiveNavigation();
});