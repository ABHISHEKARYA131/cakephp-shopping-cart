<h2>Admin Edit Productmod</h2>

<br />

<div class="row">
<div class="col-sm-4">

<?php echo $this->Form->create('Productmod'); ?>

<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('product_id', array('class' => 'form-control')); ?>
<?php echo $this->Form->input('sku', array('class' => 'form-control')); ?>
<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
<?php echo $this->Form->input('weight', array('class' => 'form-control')); ?>
<?php echo $this->Form->input('price', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('active', array('type' => 'checkbox')); ?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>

</div>
</div>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Productmod.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Productmod.id'))); ?>

<br />
<br />