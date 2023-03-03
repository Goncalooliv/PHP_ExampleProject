@component('mail::message')
<h3>Olá, {{$data['nomeCandidato']}}! </h3>

<h4>Enviamos este email para te notificar da receção da tua candidatura e agradecemos desde já o teu interesse na
    {{$data['nome']}}!</h4>
<h4>Nós vamos rever o teu perfil e contactar-te assim que o processo esteja concluido.</h4>

<h5>Mais uma vez agradecemos o teu interesse e esperamos que tenhas um bom dia!</h5>

<h5>Melhores Cumprimentos,</h5>
<h6>Equipa de recrutamento da {{$data['nome']}}</h6>

@endcomponent