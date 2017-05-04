
<h1 style="padding-bottom:50px;">Hi there!</h1>

Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>


<p style="padding-bottom:20px;">Cheers,</p>


<a href="http://we05.galeano.victoria.yoobee.net.nz/"><img src="{{ $message->embed(public_path() . '/assets/emaillogo.png') }}" alt="logo" width="250" /></a>