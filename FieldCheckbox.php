<?php
namespace Pandora3\Widgets\FieldCheckbox;

use Pandora3\Widgets\FormField\FormField;

/**
 * Class FieldCheckbox
 * @package Pandora3\Widgets\FieldCheckbox
 */
class FieldCheckbox extends FormField {

	/**
	 * {@inheritdoc}
	 */
	protected function getView(): string {
		return __DIR__.'/Views/Widget';
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function beforeRender(array $context): array {
		if ($context['id'] ?? '') {
			$attribs = $context['attribs'] ?? '';
			$context['attribs'] = $attribs.' id="'.$context['id'].'"';
		}
		return $context;
	}

	/**
	 * {@inheritdoc}
	 */
	protected function getContext(): array {
		return array_replace( parent::getContext(), [
			'isChecked' => (bool) $this->getValue()
		]);
	}

}