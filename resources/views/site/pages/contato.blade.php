@extends('site.templates.master')
@section('conteudo')

<div class="contact text-center">
	<h1 class="title">Entre em Contato</h1>
	<h2 class="sub-title">Tenha todas as suas Dúvidas esclarecidas pela nossa equipe.</h2>

	<form class="form form-contact">
		<div class="row">
			<div class="col-md-6">
				<input type="text" name="nome" placeholder="Nome:">
			</div>
			<div class="col-md-6">
				<input type="email" name="email" placeholder="E-mail:">
			</div>
			<div class="col-md-12">
				<input type="text" name="assunto" placeholder="Assunto:">
			</div>
			<div class="col-md-12">
				<textarea placeholder="Mensagem:" name="mensagem" rows="6"></textarea>
			</div>

			<div class="col-md-12">
				<button class="btn-contact">Enviar</button>
			</div>
		</div>
	</form>
</div>

@endsection