<?php
//[models]--------------------------------------------------------------------------------------------------------------
$mregistrations = model("App\Modules\Sie\Models\Sie_Registrations");
$mcountries = model("App\Modules\Sie\Models\Sie_Countries");
$mregions = model("App\Modules\Sie\Models\Sie_Regions");
$mcities = model("App\Modules\Sie\Models\Sie_Cities");
//[vars]----------------------------------------------------------------------------------------------------------------
$registrations = $mregistrations->get_RegistrationByIdentification($oid);
$place = $mcities->get_City($registrations['place_of_birth']);
$registrations['regions_birth'] = $place['region'];
$registrations['countries_birth'] = $place['country'];
//[data]----------------------------------------------------------------------------------------------------------------
if (is_array($registrations)) {
    echo json_encode($registrations);
} else {
    // Si no se encontraron datos, devuelve un error
    echo json_encode(['error' => 'No se encontraron datos para el número de identificación proporcionado']);
}

?>