<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-07-18 06:39:28
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Spaces\Creator\index.php]
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
return [
    // - Spaces fields
    "label_space" => "Código del espacio",
    "label_headquarter" => "Sede",
    "label_type" => "Tipo",
    "label_block" => "Bloque",
    "label_name" => "Nombre",
    "label_description" => "Descripción",
    "label_area" => "Area",
    "label_static_capacity" => "Capacidad estática",
    "label_dynamic_capacity" => "Capacidad dinámica",
    "label_tv" => "TV",
    "label_split_wall" => "Proyector de pared",
    "label_split_ceiling" => "Proyector de techo",
    "label_videobeam" => "Videobeam",
    "label_sound" => "Sonido",
    "label_author" => "author",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_space" => "space",
    "placeholder_headquarter" => "headquarter",
    "placeholder_type" => "type",
    "placeholder_block" => "block",
    "placeholder_name" => "name",
    "placeholder_description" => "description",
    "placeholder_area" => "area",
    "placeholder_static_capacity" => "static_capacity",
    "placeholder_dynamic_capacity" => "dynamic_capacity",
    "placeholder_tv" => "tv",
    "placeholder_split_wall" => "split_wall",
    "placeholder_split_ceiling" => "split_ceiling",
    "placeholder_videobeam" => "videobeam",
    "placeholder_sound" => "sound",
    "placeholder_author" => "author",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_space" => "space",
    "help_headquarter" => "headquarter",
    "help_type" => "type",
    "help_block" => "block",
    "help_name" => "name",
    "help_description" => "description",
    "help_area" => "area",
    "help_static_capacity" => "static_capacity",
    "help_dynamic_capacity" => "dynamic_capacity",
    "help_tv" => "tv",
    "help_split_wall" => "split_wall",
    "help_split_ceiling" => "split_ceiling",
    "help_videobeam" => "videobeam",
    "help_sound" => "sound",
    "help_author" => "author",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Spaces creator
    "create-denied-title" => "Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos espacios, por favor póngase en contacto con el administrador del sistema o en su efecto contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar presioné la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo espacio",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "create-duplicate-title" => "¡espacio existente!",
    "create-duplicate-message" => "Este espacio ya se había registrado previamente, presioné continuar en la parte inferior de este mensaje para retornar al listado general de espacios.",
    "create-success-title" => "¡espacio registrada exitosamente!",
    "create-success-message" => "La espacio se registró exitosamente, para retornar al listado general de espacios presioné continuar en la parte inferior de este mensaje.",
    // - Spaces viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para visualizar espacios en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Spaces editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para actualizar espacios en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar espacio!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que actualizar no existe o se elimino previamente, para retornar al listado general de espacios presioné continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Espacio actualizado!",
    "edit-success-message" => "Los datos de espacio se <b>actualizaron exitosamente</b>, para retornar al listado general de espacios presioné el botón continuar en la parte inferior del presente mensaje.",
    // - Spaces deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para eliminar espacios en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar espacio!",
    "delete-message" => "Para confirmar la eliminación del espacio <b>%s</b>, presioné eliminar, para retornar al listado general de espacios presioné cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "\El elemento que intenta eliminar no existe o se elimino previamente, para retornar al listado general de espacios presioné continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Espacio eliminad@ exitosamente!",
    "delete-success-message" => "La espacio se elimino exitosamente, para retornar al listado de general de espacios presioné el botón continuar en la parte inferior de este mensaje.",
    // - Spaces list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para acceder al listado general de espacios en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de espacios",
];

?>