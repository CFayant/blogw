<?php $this->layout('layout', ['title' => 'A propos']) ?> 
<!-- Le title est passé en variable -->

<?php $this->start('main_content') ?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae veritatis odio autem explicabo dicta voluptatum, nulla qui repudiandae, cupiditate neque, placeat reprehenderit rem nemo a similique? Animi, eveniet neque voluptatum.</p>
<?php $this->stop('main_content') ?>

<?php $this->start('footer') ?>
	<strong>footer</strong>
<?php $this->stop('footer') ?>