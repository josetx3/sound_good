<?php
class PatientsView
{
    function paginatePatients($array_Patients)
    {

?>

        <div class="col-xxl-12 col-xl-12">

        <div class="card">
            <div class="card-header">
                Registar Paciente
            </div>
            <div class="card-body">
                <form id="insert_Medic">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nombre" name="Nombre">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Apellido" name="Apellido">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Documento" name="Documento">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Direccion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Direccion" name="Direccion">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Email" name="Email">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexo" id="Masculino" value="option1" checked>
                                <label class="form-check-label" for="Masculino">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexo" id="Femenino" value="option2">
                                <label class="form-check-label" for="Femenino">
                                    Femenino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Sexo" id="Otro" value="option3">
                                <label class="form-check-label" for="Otro">
                                    Otro
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="Celular" name="Celular">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Pais</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Pais" name="Pais">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Departamento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Departamento" name="Departamento">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Ciudad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Ciudad" name="Ciudad">
                        </div>
                    </div>

                    <div class="mb-12 text-center">
                    <button type="button" class="btn btn-primary float-right" onclick="Medic.insertMedic()">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    </div>
                </form>
            </div>
        </div>

        </div><!-- End Customers Card -->

<?php
    }
}
?>