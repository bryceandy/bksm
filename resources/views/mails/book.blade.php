Hello, <br />
There is a new booking request and the following are the details:<br /><br />

<div>
The client <b>{{$client->name}}</b> booked for <i>{{$client->day}}</i> with an email <b>{{$client->email}}</b><br />
and phone number as <i>{{$client->number}}</i>. The services required by the client are;<br /><br />

{{$client->serv}}
<br /><br />
Get back to the client to finalize the appointment!

</div>



