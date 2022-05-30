<?php
class AppointmentView
{
    function paginateAppointment($array_Appointment)
    {

?>

        <div class="col-xxl-12 col-xl-12">

            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">CITAS <span>| sound good</span></h5>

                            <form id="insert_Appointment">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Fecha</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="Fecha" name="Fecha">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Hora</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" id="Hora" name="Hora">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Consultorio</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" id="Consultorio" name="Consultorio">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Documento paciente</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="Documento_paciente" name="Documento_paciente">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Documento_medico</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Documento_medico" name="Documento_medico">
                                    </div>
                                </div>


                                <button type="button" class="btn btn-primary float-right" onclick="Medic.insertMedic()">
                                    <i class="fas fa-save"></i> Guardar
                                </button>
                            </form>
             
                </div>
            </div>

        </div><!-- End Customers Card -->

<?php
    }
}
?>