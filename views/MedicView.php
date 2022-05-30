<?php
class MedicView
{
    function paginateMedic($array_medic)
    {
?>
        <div class="card">
            <div class="card-header">
                Registar Medico
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
                        <label for="inputEmail" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Documento" name="Documento">
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
                        <label for="inputEmail" class="col-sm-2 col-form-label">Especialidad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Especialidad" name="Especialidad">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px"></textarea>
                        </div>
                    </div>


                    <button type="button" class="btn btn-primary float-right" onclick="Medic.insertMedic()">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                </form>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header bg-info text-black">
                Listar pa&iacute;s
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Documento </th>
                                <th>Sexo</th>
                                <th>Celular</th>
                                <th>Especializacion</th>
                                <th style="text-align:center;">Acci&oacute;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($array_medic as $object_medicos) {
                                $medi_id = $object_medicos->medi_id;
                                $medi_nombre = $object_medicos->medi_nombre;
                                $medi_documento = $object_medicos->medi_documento;
                                $medi_sexo = $object_medicos->medi_sexo;
                                $medi_celular = $object_medicos->medi_celular;
                                $medi_especialidad = $object_medicos->medi_especialidad;
                            ?>
                                <tr>
                                    <td><?php echo $medi_id; ?></td>
                                    <td><?php echo $medi_nombre; ?></td>
                                    <td> <?= $medi_documento; ?> </td>
                                    <td> <?= $medi_sexo; ?></td>
                                    <td> <?= $medi_celular; ?></td>
                                    <td> <?= $medi_especialidad; ?></td>
                                    <td style="text-align:center;">
                                        <i class="bi bi-box-arrow-in-down-right" onclick="Medic.showMedic('<?php echo $medi_id; ?>');"></i>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    }
    function showMedic($array_Medic)
    {
        $medi_id = $array_Medic[0]->medi_id;
        $medi_nombre = $array_Medic[0]->medi_nombre;
        $medi_documento = $array_Medic[0]->medi_documento;
        $medi_sexo = $array_Medic[0]->medi_sexo;
        $medi_celular = $array_Medic[0]->medi_celular;
        $medi_especialidad = $array_Medic[0]->medi_especialidad;

    ?>

        <div class="card">
            <div class="card-body">
                <form id="update_Medic">

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?= $medi_nombre; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Documento" name="Documento" value=" <?= $medi_documento; ?> ">
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
                            <input type="text" class="form-control" id="Celular" name="Celular" value=" <?= $medi_celular; ?> ">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Especialidad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Especialidad" name="Especialidad" value=" <?= $medi_especialidad; ?> ">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px"></textarea>
                        </div>
                    </div>



                    <input type="hidden" id="id" name="id" value="<?php echo $medi_id; ?>">
                    <button type="button" class="btn btn-primary text-center" onclick="Medic.updateMedic()">
                        <i class="bi bi-check-square"></i> Guardar
                    </button>

                </form>
            </div>
        </div>
<?php
    }
}
?>