// determine username and player
const getUserInfo = () => {
    $.get('/get_info.php').done((result) => {
        if (result.error !== undefined) {
            $('#example-form').show();
            $('#user-info').hide();
        } else {
            $('#user-info').show();
            $('#example-form').hide();

            $('#username').html(`Jouw gebruikersnaam is ${result.data.username}`);
            $('#player-id').html(`Je bent speler: ${result.data.playerId}`);
            // set playerid as class body.
            document.body.className = `player${result.data.playerId}`;
        }
    });
}

// form action
$(function() {
    $('#example-form').hide();
    $('#user-info').hide();

    $('#example-form').on('submit', function(event) {
        event.preventDefault();
        console.log('You clicked on me!');

        let formData = $('#example-form').serialize();

        $.post('handler.php', formData).done(function() {
            getUserInfo();
        });
    });
    $('#rmve').on('click', function(event) {
        event.preventDefault();
        $.post('remove.php').done(function() {
            getUserInfo();
        });
    })

    getUserInfo();
});
