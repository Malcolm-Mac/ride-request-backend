<p> Hi {{ $user->name }}</p>
<p>You have been invited to {{ config('app.name' )}} on {{ config('app.url')}}</p>

<p>Please find below your credentials</p>

<p>U: {{ $user->email }}</p>

<p>Regards,</p>
<p>System Admin.</p>
