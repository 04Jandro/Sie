<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-05-01 08:14:05
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Registrations\List\table.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2023 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 * █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 * █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 * █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 * █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @var object $parent Trasferido desde el controlador
 * █ @var object $authentication Trasferido desde el controlador
 * █ @var object $request Trasferido desde el controlador
 * █ @var object $dates Trasferido desde el controlador
 * █ @var string $component Trasferido desde el controlador
 * █ @var string $view Trasferido desde el controlador
 * █ @var string $oid Trasferido desde el controlador
 * █ @var string $views Trasferido desde el controlador
 * █ @var string $prefix Trasferido desde el controlador
 * █ @var array $data Trasferido desde el controlador
 * █ @var object $model Modelo de datos utilizado en la vista y trasferido desde el index
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/

//[services]------------------------------------------------------------------------------------------------------------
$bootstrap = service("bootstrap");
//[vars]----------------------------------------------------------------------------------------------------------------
$back = "/sie";
$table = $bootstrap->get_DynamicTable(array(
    'id' => 'table-' . lpk(),
    'data-url' => '/sie/api/registrations/json/list/' . lpk(),
    'buttons' => array(
        'create' => array('icon' => ICON_ADD, 'text' => lang('App.Create'), 'href' => '/sie/registrations/create/' . lpk(), 'class' => 'btn-secondary'),
    ),
    'cols' => array(
        'registration' => array('text' => "Preinscrito", 'class' => 'text-center'),
        'agreement' => array('text' => "Convenio", 'class' => 'text-center'),
        'journey' => array('text' => "Jornada", 'class' => 'text-center', 'visible' => false),
        'program' => array('text' => "Programa", 'class' => 'text-center', 'visible' => false),
        'full_name' => array('text' => lang('App.Name'), 'class' => 'text-start'),
        'first_name' => array('text' => "Primer nombre", 'class' => 'text-start', 'visible' => false),
        'second_name' => array('text' => "Segundo nombre", 'class' => 'text-start', 'visible' => false),
        'first_surname' => array('text' => "Primera apellido", 'class' => 'text-start', 'visible' => false),
        'second_surname' => array('text' => "Segundo apellido", 'class' => 'text-start', 'visible' => false),
        //'status' => array('text' => lang('App.Status'), 'class' => 'text-center'),
        'email_address' => array('text' => lang('App.Email'), 'class' => 'text-start', 'visible' => false),
        'phone' => array('text' => lang('App.Phone'), 'class' => 'text-start', 'visible' => false),
        'address' => array('text' => lang('App.Address'), 'class' => 'text-start', 'visible' => false),
        'identification_type' => array('text' => "Tipo de documento", 'class' => 'text-center', 'visible' => false),
        'identification_number' => array('text' => "Documento", 'class' => 'text-center', 'visible' => false),
        'date' => array('text' => "Fecha", 'class' => 'text-center'),
        //'created_at' => array('text' => lang('App.Created'), 'class' => 'text-center'),
        'options' => array('text' => lang('App.Options'), 'class' => 'text-center fit px-2'),
    ),
    'data-page-size' => 10000,
    'data-side-pagination' => 'server'
));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("card-view-service", array(
    "title" => lang('Registrations.list-title'),
    "header-back" => $back,
    "alert" => array("icon" => ICON_INFO, "type" => "info", "title" => lang('Registrations.message-list-title'), "message" => lang('Registrations.message-list-description')),
    "content" => $table,
));
echo($card);
echo(get_sie_help_registrations());

?>