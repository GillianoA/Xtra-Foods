<label>
	<div class="oceanwp-mb-desc">
		<# if ( data.label ) { #>
			<span class="butterbean-label">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="butterbean-description">{{{ data.description }}}</span>
		<# } #>
	</div>

	<div class="oceanwp-mb-field">
		<ul>

			<# if ( data.family && data.family.choices ) { #>
				<li class="typography-font-family">

					<# if ( data.family.label ) { #>
						<span class="label">{{ data.family.label }}</span>
					<# } #>

					<select class="widefat butterbean-select" name="{{ data.family.name }}">

						<# _.each( data.family.choices, function( label, choice ) { #>
							<option value="{{ choice }}" if choice="==" data.family.value> selected="selected" <# } #>>{{ label }}</option>
						<# } ) #>

					</select>
				</li>
			<# } #>

			<# if ( data.size ) { #>
				<li class="typography-font-size">

					<# if ( data.size.label ) { #>
						<span class="label">{{ data.size.label }}</span>
					<# } #>

					<input type="text" name="{{ data.size.name }}" value="{{ data.size.value }}" placeholder="<br />
<b>Fatal error</b>:  Uncaught Error: Call to undefined function esc_html_e() in C:\xampp\htdocs\Xtra-Foods\wp-content\plugins\ocean-extra\includes\metabox\controls\typography\template.php:39
Stack trace:
#0 {main}
  thrown in <b>C:\xampp\htdocs\Xtra-Foods\wp-content\plugins\ocean-extra\includes\metabox\controls\typography\template.php</b> on line <b>39</b><br />
">
</li>
</ul>
</div></label>