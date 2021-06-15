// The characters a player can 'be'
var characters = [
    "Sinterklaas",
    "Mark Rutte",
    "Tandenfee",
    "Adele",
    "Donald Trump",
    "Smurfin",
    "Britney Spears",
    "Katy Perry",
    "Rihanna",
    "Mark Zuckenberg",
    "de Kerstman",
    "Rene Froger",
    "Yolanthe Cabeau van Kasbergen",
    "Jan Smit",
    "Simba",
    "Elsa van Frozen",
    "Batman",
    "Roodkapje",
    "Albert Einstein",
    "Sherlock Holmes",
    "Pikachu",
    "Rembrandt Van Rijn",
    "Nicki Minaj",
    "Michael Jackson",
    "Greta Thunberg",
    "Mahatma Gandhi",
    "Nelson Mandela",
    "William Shakespeare",
    "Marie Antoinette",
    "Aristotle",
    "Galileo Galilei",
    "Marie Curie",
    "Madonna",
    "Spongebob SquarePants",
    "Patrick Ster",
    "Lady Gaga",
    "Prince",
    "Elvis Presley",
    "Memphis Depay",
    "Frank de Boer",
    "Stijn Eikelboom",
    "Arjan Schelhaas"
]

//returns a random element from the
get_random_element = function (list) {
    return list[Math.floor((Math.random()*list.length))];
}

// unload event
$(function () {
    $("#player").text(get_random_element(characters))
    console.log(get_random_element(characters))
});

// sends answer to chat
function update_questions() {
    $.get('scripts/get_question.php').done(function(data) {
        console.log(data)
        $('.topcontainer').replaceWith(data)
    });
}

var updateChatPeriodically = window.setInterval(function (){
    update_questions();
    update_active_player();
}, 500);
//possibly: stop the interval with clearInterval(updateChatPeriodically)


//get value of text area
function send_question() {
    $.get('/get_info.php').done((result) => {
        if (result.error !== undefined) {
        } else {
            let question = {question:$("#question").val(), playerId:`${result.data.playerId}`};
            let path = "scripts/save_question.php";
            $.post(path, question).done(function(data) {
            console.log(data)
            update_questions();
        }
    );
    console.log(question);
        }
    });

}

// clear chat
function clear_chat() {
    let path = "scripts/start_over.php";
    $.post(path, "").done(function(data) {
            update_questions();
        }
    );
}

$(function() {
    $("#send_chat").on("click", function () {
        send_question();
    })
})

$(function() {
    $("#start_over").on("click", function () {
        clear_chat();

    })
})

// redirect to youwon.php
$(function() {
    $("#winner").on("click", function () {
        clear_chat();
        location.href = "youwon.php";
        clear_session();
    })
})

function clear_session() {
    let path = "scripts/new_session.php";
    $.post(path, "").done(function(data) {
        clear_session()
    });
}

// active player
function update_active_player() {
    $.get('scripts/active_player.php').done(function(data) {
        console.log(data)
        $('.activeplayer').replaceWith(data)
    });
}


