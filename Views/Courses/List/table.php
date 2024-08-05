<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-03-15 05:18:10
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Courses\List\table.php]
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
    'data-url' => '/sie/api/courses/json/list/' . lpk(),
    'buttons' => array(
        'create' => array('icon' => ICON_ADD, 'text' => lang('App.Create'), 'href' => '/sie/courses/create/' . lpk(), 'class' => 'btn-secondary'),
    ),
    'cols' => array(
        'course' => array('text' => lang('App.Course'), 'class' => 'text-center'),
        'details' => array('text' => lang('App.Details'), 'class' => 'text-left'),
        'program' => array('text' => lang('App.Program'), 'class' => 'text-center', 'visible' => false),
        'module' => array('text' => lang('App.Module'), 'class' => 'text-center', 'visible' => false),
        'teacher' => array('text' => lang('App.Teacher'), 'class' => 'text-center', 'visible' => false),
        'name' => array('text' => lang('App.Name'), 'class' => 'text-center', 'visible' => false),
        'description' => array('text' => lang('App.Description'), 'class' => 'text-center', 'visible' => false),
        'maximum_quota' => array('text' => lang('App.Quota'), 'class' => 'text-center', 'visible' => false),
        'start' => array('text' => lang('App.Start'), 'class' => 'text-center', 'visible' => false),
        'end' => array('text' => lang('App.End'), 'class' => 'text-center', 'visible' => false),
        'period' => array('text' => lang('App.Period'), 'class' => 'text-center', 'visible' => false),
        'space' => array('text' => lang('App.Space'), 'class' => 'text-center', 'visible' => false),
        'author' => array('text' => lang('App.Author'), 'class' => 'text-center', 'visible' => false),
        'created_at' => array('text' => lang('App.created_at'), 'class' => 'text-center', 'visible' => false),
        'updated_at' => array('text' => lang('App.updated_at'), 'class' => 'text-center', 'visible' => false),
        'deleted_at' => array('text' => lang('App.deleted_at'), 'class' => 'text-center', 'visible' => false),
        'options' => array('text' => lang('App.Options'), 'class' => 'text-center fit px-2'),
    ),
    'data-page-size' => 10,
    'data-side-pagination' => 'server'
));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("card-view-service", array(
    "title" => lang('Courses.list-title'),
    "header-back" => $back,
    "content" => $table,
));
echo($card);
?>
