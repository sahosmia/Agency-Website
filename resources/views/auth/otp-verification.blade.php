{{-- TODO: Time Start --}}
@extends('frontend.layouts.app')
@section('title', 'Otp-verification')

@section('content')
    <div class="container">
        <div class="w-4/12 text-center m-auto pt-20">
            <h1 class="heading-text-bold-large text-secondary-950">OTP Verification</h1>
            <p class="body-text-regular-medium text-secondary-600  mt-2"> Enter your verification code. We will send your E-mail address. If you do not find the OTP, then check the spam box. </p>
        </div>

        <form action="">
            <div class="flex w-4/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
                <div class="flex gap-2 flex-col ">
                    <label class="inpul-label text-secondary-600" for="">One time passcode (OTP) </label>
                    <div class="flex gap-7 ">
                        <input type="text" class="w-12 otp-code h-12 text-center border rounded-lg" value="" maxlength="1">
                        <input type="text" class="w-12 otp-code h-12 text-center border rounded-lg" value="" maxlength="1">
                        <input type="text" class="w-12 otp-code h-12 text-center border rounded-lg" value="" maxlength="1">
                        <input type="text" class="w-12 otp-code h-12 text-center border rounded-lg" value="" maxlength="1">
                        <input type="text" class="w-12 otp-code h-12 text-center border rounded-lg" value="" maxlength="1">
                        <input type="text" class="w-12 otp-code h-12 text-center border rounded-lg" value="" maxlength="1">
                    </div>
                </div>

                <div class="flex gap-2 justify-between items-center mt-6">
                    <div class="flex  gap-2 items-center">
                        <p class="label-text-regular-xsmall text-secondary-600">Didn't get it? </p>
                        <button class="button-label px-2 ">Resend code</button>
                    </div>

                    <p class="text-secondary">Time: 0:00</p>
                </div>

                <button class="btn-outline-full my-6">Verify OTP</button>

                <p class="text-center label-text-regular-small text-secondary-600  ">Is the email address correct? <span class="label-text-bold-small">Back to change E-mail address</span></p>

            </div>
        </form>

    </div>

@endsection

@section('extra-js')
    <script>
        // TODO: Time Start for otp time
    </script>
@endsection
