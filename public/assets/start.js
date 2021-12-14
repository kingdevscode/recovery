/* $('#sweet').click(
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        console.log(result);
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
); */

//const { forEach } = require("lodash");

function alertDeleteElement(id, path) {
    swal.fire({
        title: 'Etes vous sur ?',
        text: "Cette action est irreversible!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonClass: '#3085d6',
        cancelButtonClass: '#d33',
        confirmButtonText: 'Oui, Supprimer!'
    }).then((result) => {
        console.log(result)
        if (result.isConfirmed) {
            var data = {
                // "_token": $('input[name=_token]').val(),
                "id": id
            }
            $.ajax({
                type: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: path,
                data: data,
                success: function(response) {
                    swal.fire(
                        'Supprimer!',
                        response,
                        'success'
                    ).then((result) => {
                        location.reload();
                        toastr.success("Element supprimer avec success", '', { timeOut: 3000 });
                    });
                }
            });
        } else {
            swal.fire({
                type: 'erreur',
                title: 'Oops...',
                text: 'Quelque chose s"est mal passe',
            })
        }
    });

}


///////////for stepper




function loadElementEngin(select, path) {
    var selectE = document.getElementById("engin_id");

    for (let i = selectE.options.length - 1; i >= 0; i--) {
        console.log(i);
        selectE.removeChild(selectE.options[i]);
    }

    if (select.value.trim().length > 0) {
        $.ajax({
            type: "GET",
            url: path + select.value,
            data: [],
            success: function(response) {

                response.forEach(item => {
                    var op = document.createElement('option');
                    op.appendChild(document.createTextNode(item.immatriculation));
                    op.value = item.id;
                    selectE.appendChild(op);
                });
            }
        });
    }



}

function loadElementSite(select, path) {
    var selectE = document.getElementById("site_id");

    for (let i = selectE.options.length - 1; i >= 0; i--) {
        console.log(i);
        selectE.removeChild(selectE.options[i]);
    }

    if (select.value.trim().length > 0) {
        $.ajax({
            type: "GET",
            url: path + select.value,
            data: [],
            success: function(response) {

                response.forEach(item => {
                    var op = document.createElement('option');
                    op.appendChild(document.createTextNode(item.nom_site));
                    op.value = item.id;
                    selectE.appendChild(op);
                });
            }
        });
    }

}

function changeLanguage(lang) {
    swal.fire({
        title: 'Etes vous sur ?',
        text: "changement en cour ...!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonClass: '#3085d6',
        cancelButtonClass: '#d33',
        confirmButtonText: 'Oui, changer!'
    }).then((result) => {
        console.log(result)
        if (result.isConfirmed) {

            $.ajax({
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'locale/' + lang,
                data: [],
                success: function(response) {
                    swal.fire(
                        'Chengement effectué?',
                        response,
                        'success'
                    ).then((result) => {
                        location.reload();
                        //toastr.success("Element supprimer avec success", '', { timeOut: 3000 });
                    });
                }
            });
        } else {
            swal.fire({
                type: 'erreur',
                title: 'Oops...',
                text: 'Quelque chose s"est mal passe',
            })
        }
    });
}
