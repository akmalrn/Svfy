<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with reCAPTCHA v2</title>
</head>

<body>
    <h1>Contact Form</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('submit.form') }}" method="POST">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>
        </div>

        <div>
            <label for="email_address">Email Address:</label>
            <input type="email" id="email_address" name="email_address" value="{{ old('email_address') }}" required>
        </div>

        <div>
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
        </div>

        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
        </div>

        <!-- Google reCAPTCHA v2 -->
        <!-- Site key -->
        <div class="g-recaptcha" data-sitekey="6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd"></div>



        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <!-- Load reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
