$(function() {
    $(document).on('click', '#logoutButton', function(e) {
        e.preventDefault();
        localStorage.removeItem('jwt_token');
        localStorage.removeItem('user_info');

        document.cookie = 'jwt_token=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT; secure; samesite=strict';

        $.post('logout.php').always(function() {
            window.location.href = 'index.php';
        });
    });
});
