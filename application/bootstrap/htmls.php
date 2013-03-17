<?php

/**
 * Macro to render grid table.
 *
 * @var string
 */
HTML::macro('table_grid', function(array $data, $path = null, $actions = array('add', 'edit', 'delete'))
{
	$content = '';

	if (count($data)) foreach ($data as $record)
	{
		$content .= '<tr>';
		$content .= '<td>'. $record['id'] .'</td>';
		$content .= '<td>'. $record['name'] .'</td>';
		$content .= '</tr>';
	}

	$html = '
		<table>
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Actions</th>
			</thead>
			<tbody>
				'. $content .'
			</tbody>
		</table>
	';

	return $html;
});