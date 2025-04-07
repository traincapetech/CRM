@component('mail::message')
# New Contact Form Submission

A new contact form submission has been received from the website.

**Details:**
- Name: {{ $contact->name }}
- Email: {{ $contact->email }}
- Phone: {{ $contact->phone }}
- Subject: {{ $contact->subject }}

**Message:**
{{ $contact->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent 