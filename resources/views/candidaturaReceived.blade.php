@component('mail::message')
<h3>Olá! </h3>

<h4>Enviamos este email para te notificar que foi recebida uma candidatura para a {{$data['announcementName']}}
    para a posição de {{$data['announcementPosition']}}!</h4>
<h4>Podes aceder à lista de candidatos a este anúncio através da plataforma na aba "Meus Anúncios" para saberes mais
    detalhes!</h4>

@component('mail::button', ['url' => url('http://127.0.0.1:8000/checkCandidaturas/{{$data[idAnuncio]}}',)])
Check it!
@endcomponent

<h5>Melhores Cumprimentos,</h5>
<h6>Support Team</h6>

@endcomponent