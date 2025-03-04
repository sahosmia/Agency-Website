@extends('frontend.layouts.app')
@section('title', 'Create new password')

@section('content')
<div class="container">
    <div class="w-8/12 text-center m-auto pt-20">
        <h1 class="heading-text-bold-large text-secondary-950">Create new Password</h1>
        <p class="sub-title-medium-regular text-secondary-600 pt-8">Your identity has been verified. Set your new password
        </p>


    </div>

    <form action="">
        <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">


            <div class="flex gap-2 flex-col"><label class="inpul-label" for="">New password</label><input
                    type="text" name="" id="" placeholder="Enter your password" value="">
            </div>
            <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Confirm password</label><input
                    type="text" name="" id="" placeholder="Enter your password" value="">
            </div>



            <div class="flex  gap-2 flex-col text-secondary-600">
                    <li>At least 1 upper case letter (A-Z)</li>
                    <li>At least 1 number (0-9)</li>
                    <li>At least 8 characters</li>

            </div>

            <div class="flex  gap-2 ">
                <input type="checkbox" name="" id="">
                <span class="label-text-regular-medium text-secondary-950">Remember Me</span>
            </div>

            <button class="btn-outline-full">Confirm</button>


            <p></p>

        </div>
    </form>

</div>

@endsection
