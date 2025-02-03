@extends('admin.sections.base')
@section('title')Terms and Policy @endsection

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Terms and Policy</h1>
        <p>Welcome to the Employee Survey Portal! These terms and policies govern your access and use of our platform. Please read them carefully before proceeding:</p>
        <h3>1. Data Collection and Privacy</h3>
        <p>
            We value your privacy. All data collected during surveys will be securely stored and used strictly for organizational analysis and improvement.
        </p>
        <h3>2. Responsibilities</h3>
        <p>
            Users are responsible for maintaining the confidentiality of their login credentials. Sharing credentials or accessing unauthorized areas of the portal is prohibited.
        </p>
        <h3>3. Usage Guidelines</h3>
        <p>
            The portal is designed for organizational purposes only. Any misuse or tampering with data will result in immediate suspension and possible legal action.
        </p>
        <h3>4. Changes to Policies</h3>
        <p>
            We reserve the right to update these terms and policies at any time. Continued use of the platform indicates your agreement to the updated terms.
        </p>
        <h3>Contact Us</h3>
        <p>
            For any questions or concerns regarding these terms, please contact the administrator.
        </p>
        <div class="text-center">
            <a href="{{ route('admin.signup') }}" class="btn btn-primary mt-3">Back to Signup</a>
        </div>
    </div>
@endsection
