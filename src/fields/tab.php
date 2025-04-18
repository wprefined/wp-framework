<?php
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class RD_Tab extends RD_Field
{
    /**
    * @var string
    */
    public string $type = 'tab';

    /**
     * @param array $fields
     *
     * @return $this
     */
    public function fields( ...$fields ): static
    {
        $this->fields = rd_validate_fields( $fields );

        return $this;
    }

	/**
	 * Render the field.
	 *
	 * @return void
	 */
    public function render(): void
    {
		?>
	    <div class="rd-tab" data-tab-content="<?php echo $this->get_id(); ?>">
    	    <?php
            foreach( $this->fields as $field ):
                echo $field->set()->render();
            endforeach;
            ?>
	    </div>
        <?php
    }
}