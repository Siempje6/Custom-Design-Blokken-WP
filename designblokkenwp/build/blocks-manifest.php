<?php
// This file is generated. Do not modify it manually.
return array(
	'blok-inner-row' => array(
		'apiVersion' => 2,
		'name' => 'designblokkenwp/inner-row',
		'title' => 'Inner Row',
		'category' => 'layout',
		'icon' => 'columns',
		'description' => 'Een rij die je binnen een Row/Section kunt gebruiken.',
		'supports' => array(
			'html' => false
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./editor.scss',
		'style' => 'file:./style.scss'
	),
	'blok-row' => array(
		'apiVersion' => 2,
		'name' => 'designblokkenwp/row',
		'title' => 'Row / Section',
		'category' => 'Layout',
		'icon' => 'columns',
		'descriptiom' => 'Een sectie die andere blokken kan bevatten',
		'supports' => array(
			'html' => false
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:/editor.scss',
		'style' => 'file:./style.scss',
		'example' => array(
			
		)
	),
	'designblokkenwp' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/designblokkenwp',
		'version' => '0.1.0',
		'title' => 'Design Blokken Wp',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'designblokkenwp',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
