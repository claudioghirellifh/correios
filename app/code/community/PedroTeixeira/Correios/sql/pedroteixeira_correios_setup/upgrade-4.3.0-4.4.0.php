<?php

/**
 * This source file is subject to the MIT License.
 * It is also available through http://opensource.org/licenses/MIT
 *
 * @category  PedroTeixeira
 * @package   PedroTeixeira_Correios
 * @author    Pedro Teixeira <hello@pedroteixeira.io>
 * @copyright 2014 Pedro Teixeira (http://pedroteixeira.io)
 * @license   http://opensource.org/licenses/MIT MIT
 * @link      https://github.com/pedro-teixeira/correios
 */

/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$codigo = 'postmethods';
$config = array(
    'position' => 1,
    'required' => 0,
    'label'    => 'Serviços de Entrega',
    'type'     => 'varchar',
    'input'    => 'multiselect',
    'source'   => 'pedroteixeira_correios/source_postMethods',
    'apply_to' => 'simple,bundle,grouped,configurable',
    'note'     => 'Selecione os serviços apropriados para o produto.'
);

$setup->addAttribute('catalog_product', $codigo, $config);

$codigo = 'fit_size';
$config = array(
    'position' => 1,
    'required' => 0,
    'label'    => 'Diferença do Encaixe (cm)',
    'type'     => 'varchar',
    'input'    => 'text',
    'apply_to' => 'simple,bundle,grouped,configurable',
    'note'     => 'Caso o produto possa ser encaixado, especifique a diferença de tamanho do encaixe (Exemplo: Um item mede 10cm de altura. Dois itens encaixados medem 11cm. A diferença é de 1cm.)'
);

$setup->addAttribute('catalog_product', $codigo, $config);

$installer->endSetup();
