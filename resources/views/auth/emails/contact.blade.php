
<div style=" width=100%; background-color: #8B93A8; padding:50px; color:white;">

        <div>
            <h2 style="padding-top:50px;">Thank you for contacting us, {{ $data['name'] }}!</h2>
            <h3>We will be in contact with you soon.</h3>
            <h3 style="padding-bottom:50px;">Cheers,</h3>
            <img src="{{ $message->embed(public_path() . '/assets/emaillogo.png') }}" alt="logo" width="250" />
        </div>
</div>

