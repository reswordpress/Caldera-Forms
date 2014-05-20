<div class="<?php echo $field_wrapper_class; ?> cf-toggle-switch">
	<?php echo $field_label; ?>
	<div class="caldera-config-field init_field_type" data-type="toggle_button">
		<div class="cf-toggle-group-buttons btn-group">
			<?php
			if(empty($field['config']['option'])){ ?>
					
					<button type="button" id="<?php echo $field_id; ?>_1" class="button" data-value="true"><?php echo __('Enable', 'caldera-forms'); ?></button>

			<?php }else{
				foreach($field['config']['option'] as $option_key=>$option){
					?><button type="button" id="<?php echo $field_id.'_'.$option_key; ?>" class="btn btn-default" data-value="<?php echo $option['value']; ?>"><?php echo $option['label']; ?></button><?php
				}
			} ?>		
		</div>
		<div style="display:none;">
		<?php
		if(!empty($field['config']['option'])){
			foreach($field['config']['option'] as $option_key=>$option){
				?>
				<input type="radio" id="<?php echo $field_id . '_' . $option_key; ?>" data-ref="<?php echo $field_id.'_'.$option_key; ?>" class="cf-toggle-group-radio" name="<?php echo $field_name; ?>" value="<?php echo $option['value']; ?>" {{#if <?php echo $field['slug'].'_'.$option['value']; ?>}}checked="true"{{/if}}>
				<?php
			}
		}
		?></div>
		<?php echo $field_caption; ?>
	</div>
</div>