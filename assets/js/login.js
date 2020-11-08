$(document).ready(function() {

    $("#btnLogin").click(function(e) {
        e.preventDefault();

        var user = $("#inputUser").val().trim();
        var pass = $("#inputPassword").val().trim();

        console.log(user + " " + pass);

        mostrarDato();
    });


    async function mostrarDato() {
        const data = new FormData(document.getElementById('formulario'));

        await fetch('assets/data/login.php', {
            method: 'POST',
            body: data

        })

        .then(response => response.json())
            .then(response => {
                console.log();
            })

        .catch(err => {
            console.log(err);
        });

    }
});