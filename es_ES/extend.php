<?php

return array(

	'extend' => 'Extender',

	'fields' => 'Campos personalizados',
	'fields_desc' => 'Crear campos adicionales',

	'variables' => 'Variables de la página web',
	'variables_desc' => 'Crear metadatos adicionales',

	'create_field' => 'Crear nuevo campo',
	'editing_custom_field' => 'Editando el campo &ldquo;%s&rdquo;',
	'nofields_desc' => 'Aún no hay campos',

	'create_variable' => 'Crear nueva variable',
	'editing_variable' => 'Editando la variable &ldquo;%s&rdquo;',
	'novars_desc' => 'Aún no hay variables',

	// form fields
	'type' => 'Tipo',
	'type_explain' => 'El tipo de contenido al que quieres añadir este campo.',

	'field' => 'Campo',
	'field_explain' => 'Tipo de entrada HTML',

	'key' => 'Clave única',
	'key_explain' => 'La clave única para tu campo',
	'key_missing' => 'Por favor, introduce una clave única',
	'key_exists' => 'Esta clave ya está siendo usada',

	'label' => 'Etiqueta',
	'label_explain' => 'Nombre leíble (por humanos) para tu campo',
	'label_missing' => 'Por favor, introduce una etiqueta',

	'attribute_type' => 'Tipos de archivo',
	'attribute_type_explain' => 'Lista de tipos de archivo aceptados, separados por coma. Vacíar para aceptarlos todos.',

	// images
	'attributes_size_width' => 'Máxima anchura de imagen',
	'attributes_size_width_explain' => 'Las imágenes serán redimensionadas si superan el tamaño máximo',

	'attributes_size_height' => 'Máxima altura de imagen',
	'attributes_size_height_explain' => 'Las imágenes serán redimensionadas si superan el tamaño máximo',

	// custom vars
	'name' => 'Nombre',
	'name_explain' => 'Un nombre único',
	'name_missing' => 'Por favor, introduce un nombre único',
	'name_exists' => 'Este nombre ya está siendo usado',

	'value' => 'Valor',
	'value_explain' => 'Los datos que quieres almacenar (hasta 64kb)',
	'value_code_snipet' => 'Fragmento para insertar en tu plantilla:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Tu variable ha sido creada',
	'variable_updated' => 'Tu variable ha sido actualizada',
	'variable_deleted' => 'Tu variable ha sido eliminada',

	'field_created' => 'Tu campo ha sido creado',
	'field_updated' => 'Tu campo ha sido actualizado',
	'field_deleted' => 'Tu campo ha sido eliminado'

);
