$(function () {
    console.log("dom załadowany");
    
    $('form').validate({
        rules: {
            song: {
                accept: 'audio/mp3'
            }
        },
        messages: {
            song: {
                accept: 'To nie jest format .mp3'
            }
        }
    })
})

