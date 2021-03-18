<?php
if ( post_password_required() ) {
	# code...
	return;
}

if ( have_comments() ) {
	# code...
	foreach ($comments as $comment) {
		# code...
		?>
		<div class="comentario">

			<div cclass="comentario_foto">
				<?php echo get_avatar($comment, 60); ?>
			</div>
			<div class="comentario_area">
				<strong><?php comment_author(); ?></strong> - 

				<?php comment_date(); ?><br><br>

				<?php comment_text(); ?>
				
			</div>

		</div>

		<?php
	}

	the_comments_pagination();

}

	comment_form(array(
		'comment_field' => 'Comentários:<br> <textarea name="comment"></textarea>',

		'fields' => array(
			'author' => '<input type="text" name="author" placeholder="Digite seu nome" />',
			'email' => '<input type="email" name="email" placeholder="Digite seu e-mail"/>',
			'url' => '<input type="text" name="url" placeholder="Digite seu site"/>'
		),
		'class_submit' => 'botao',
		'label_submit' => 'Envie seu comentário',
		'title_reply' => 'Deixe seu comentário'
	));


?>