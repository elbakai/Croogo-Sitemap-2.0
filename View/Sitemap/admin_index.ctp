<h2> <?php echo __('Sitemap - Options', true); ?> </h2>

<?php
echo $this->Form->create('Settings', array('url' => array('plugin' => 'sitemap', 'controller' => 'sitemap', 'action' => 'index', 'admin' => true)));
echo $this->Form->input('Sitemap.changefreq.value', array('default' => $inputs['changefreq']['value'], 'label' => 'Changefreq'));
echo $this->Form->input('Sitemap.changefreq.id', array('type' => 'hidden', 'default' => $inputs['changefreq']['id']));
echo $this->Form->input('Sitemap.priority.value', array('default' => $inputs['priority']['value'], 'label' => 'Priority'));
echo $this->Form->input('Sitemap.priority.id', array('type' => 'hidden', 'default' => $inputs['priority']['id']));
echo $this->Form->input('Sitemap.types.value', array('default' => $inputs['types']['value'], 'label' => 'Node types'));
echo $this->Form->input('Sitemap.types.id', array('type' => 'hidden', 'default' => $inputs['types']['id']));
echo $this->Form->input('Sitemap.order.value', array('default' => $inputs['order']['value'], 'label' => 'Order'));
echo $this->Form->input('Sitemap.order.id', array('type' => 'hidden', 'default' => $inputs['order']['id']));
echo $this->Form->end(__('Submit', true));
?>

