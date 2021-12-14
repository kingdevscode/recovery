function alertDeleteElement(path) {
    swal.fire({
        title: "Confirmer La Suppression?",
        text: "Cette action est irreversible!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonClass: '#3085d6',
        cancelButtonClass: '#d33',
        confirmButtonText: "Oui, Supprimer!",
        cancelButtonText: "Non, Annuler!",
        reverseButtons: !0
    }).then((results) => {
        if (results.isConfirmed) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'DELETE',
                url: path,
                data: { _token: CSRF_TOKEN },
                dataType: 'JSON',
                success: function (response) {
                    if (response.status === 200) {
                        swal.fire(
                            "Done!",
                            response.message,
                            "success",
                            2000
                        ).then(
                            function (e) {
                                location.reload();
                            }
                        );
                    }


                },
            });
        } else {
            swal.fire({
                type: 'erreur',
                title: 'Oops...',
                text: 'Quelque chose s\'est mal passe',
            })
        }
    });
}

