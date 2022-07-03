<?php

namespace Drupal\ckeditor_placeholder\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "Editor placeholder" plugin.
 *
 * @CKEditorPlugin(
 *   id = "editorplaceholder",
 *   label = @Translation("Editor placeholder")
 * )
 */
class EditorPlaceholder extends CKEditorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getButtons(): array {
    return [
      'EditorPlaceholder' => [
        'label' => $this->t('Editor Placeholder'),
        'image' => $this->getModulePath('ckeditor_placeholder') . '/icons/placeholder.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return $this->getModulePath('ckeditor_placeholder') . '/js/plugins/editorplaceholder/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor): array {
    return [
      'editorplaceholder' => 'test placeholder',
    ];
  }

}
