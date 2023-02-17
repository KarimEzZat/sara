<div class="mail">
    <h2 class="mt-5">{{ config('app.name') }}</h2>
    <div class="contact-info">
        <h3><strong>Name:</strong> {{ $data['name'] }}</h3>
        <h5><strong>Email:</strong> {{ $data['email'] }}</h5>
        <h5><strong>Subject:</strong> {{ $data['subject'] }}</h5>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    </div>
    <strong>Thanks,</strong><br>
    {{ config('app.name') }}
</div>
