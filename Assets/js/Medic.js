class MedicJs {
    insertMedic() {
        var object = new FormData(document.querySelector('#insert_Medic'));

        fetch('MedicController/insertMedic', {
            method: 'POST',
            body: object
        })
            .then((resp) => resp.text())
            .then(function (response) {
                document.querySelector('#content').innerHTML = response;

                toastr.success('Registro Guardado');
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    updateMedic() {
        var object = new FormData(document.querySelector('#update_Medic'));

        fetch('MedicController/updateMedic', {
            method: 'POST',
            body: object
        })
            .then((resp) => resp.text())
            .then(function (response) {
                document.querySelector('#content').innerHTML = response;

                toastr.success('Registro Guardado');
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    showMedic(id) {
        var object = new FormData();

        object.append('id', id);

        fetch('MedicController/showMedic', {
            method: 'POST',
            body: object
        })
            .then((resp) => resp.text())
            .then(function (response) {
                $('#my_modal').modal('show');

                document.querySelector('#modal_title').innerHTML = "Actualizar Pa&iacute;s";

                document.querySelector('#modal_content').innerHTML = response;
            })
            .catch(function (error) {
                console.log(error);
            });
    }
}

var Medic = new MedicJs();