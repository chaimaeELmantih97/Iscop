@component('mail::message')

<div style="width:100%; display: flex; align-items: center; justify-content: center">
<img src="https://scontent.ffez1-1.fna.fbcdn.net/v/t1.0-9/120804736_2721310004639191_5719712741680394135_n.jpg?_nc_cat=102&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEd39YBpH25UoFtzFALhOOYhsGeN9X165SGwZ431fXrlFTZ6KmlMdgLrjABZqni1tn1cYAqPANEfJFkNScpFeSS&_nc_ohc=vOWVO5PE7tkAX9WOcxF&_nc_ht=scontent.ffez1-1.fna&oh=2ca6c42776ba100c94bc906f4aed3c6a&oe=601F17FF" style="width:50%; margin-left:25%" alt="">
</div>

<p style="margin-top: 10px;">
    une nouvelle inscription a été effectuée sur votre site web
        de  {{$name}}  pour la formataion : {{$formation}} <br>
        Email : {{$email}} , <br>
        Numéro du télephone : {{$tel}} .


Merci,<br>
</p>
{{ config('app.name') }}
@endcomponent
