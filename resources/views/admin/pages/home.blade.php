@extends('admin.layouts.app')

@section('title', 'Home')
@section('header-title', 'Home')





@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Home Page Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.home.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $homeSettings['page_title'] ?? '' }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="hero_title">Hero Title</label>
                                <input type="text" name="hero_title" id="hero_title" class="form-control" value="{{ $homeSettings['hero_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="hero_subtitle">Hero Subtitle</label>
                                <input type="text" name="hero_subtitle" id="hero_subtitle" class="form-control" value="{{ $homeSettings['hero_subtitle'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="hero_button_text">Hero Button Text</label>
                                <input type="text" name="hero_button_text" id="hero_button_text" class="form-control" value="{{ $homeSettings['hero_button_text'] ?? '' }}">
                            </div>
                            <hr>
                            <h4>Hero Card Section</h4>
                            <div class="form-group">
                                <label for="hero_card_description">Description</label>
                                <input type="text" name="hero_card_description" id="hero_card_description" class="form-control" value="{{ $homeSettings['hero_card_description'] ?? '' }}">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hero_card_one_title">Card 1 Title</label>
                                        <input type="text" name="hero_card_one_title" id="hero_card_one_title" class="form-control" value="{{ $homeSettings['hero_card_one_title'] ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="hero_card_one_value">Card 1 Value</label>
                                        <input type="text" name="hero_card_one_value" id="hero_card_one_value" class="form-control" value="{{ $homeSettings['hero_card_one_value'] ?? '' }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="hero_card_one_description">Card 1 Description</label>
                                        <input type="text" name="hero_card_one_description" id="hero_card_one_description" class="form-control" value="{{ $homeSettings['hero_card_one_description'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hero_card_two_title">Card 2 Title</label>
                                        <input type="text" name="hero_card_two_title" id="hero_card_two_title" class="form-control" value="{{ $homeSettings['hero_card_two_title'] ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="hero_card_two_value">Card 2 Value</label>
                                        <input type="text" name="hero_card_two_value" id="hero_card_two_value" class="form-control" value="{{ $homeSettings['hero_card_two_value'] ?? '' }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="hero_card_two_description">Card 2 Description</label>
                                        <input type="text" name="hero_card_two_description" id="hero_card_two_description" class="form-control" value="{{ $homeSettings['hero_card_two_description'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hero_card_three_title">Card 3 Title</label>
                                        <input type="text" name="hero_card_three_title" id="hero_card_three_title" class="form-control" value="{{ $homeSettings['hero_card_three_title'] ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="hero_card_three_value">Card 3 Value</label>
                                        <input type="text" name="hero_card_three_value" id="hero_card_three_value" class="form-control" value="{{ $homeSettings['hero_card_three_value'] ?? '' }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="hero_card_three_description">Card 3 Description</label>
                                        <input type="text" name="hero_card_three_description" id="hero_card_three_description" class="form-control" value="{{ $homeSettings['hero_card_three_description'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                             <div class="form-group">
                                <label for="search_title">Search Title</label>
                                <input type="text" name="search_title" id="search_title" class="form-control" value="{{ $homeSettings['search_title'] ?? '' }}">
                            </div>
                            <hr>
                            <h4>Services Section</h4>
                            <div class="form-group">
                                <label for="services_title">Services Title</label>
                                <input type="text" name="services_title" id="services_title" class="form-control" value="{{ $homeSettings['services_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="services_description">Services Description</label>
                                <textarea name="services_description" id="services_description" class="form-control" rows="5">{{ $homeSettings['services_description'] ?? '' }}</textarea>
                            </div>
                             <hr>
                            <h4>Software Section</h4>
                            <div class="form-group">
                                <label for="software_title">Software Title</label>
                                <input type="text" name="software_title" id="software_title" class="form-control" value="{{ $homeSettings['software_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="software_description">Software Description</label>
                                <textarea name="software_description" id="software_description" class="form-control" rows="5">{{ $homeSettings['software_description'] ?? '' }}</textarea>
                            </div>
                            <hr>
                            <h4>Projects Section</h4>
                            <div class="form-group">
                                <label for="projects_title">Projects Title</label>
                                <input type="text" name="projects_title" id="projects_title" class="form-control" value="{{ $homeSettings['projects_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="projects_description">Projects Description</label>
                                <textarea name="projects_description" id="projects_description" class="form-control" rows="5">{{ $homeSettings['projects_description'] ?? '' }}</textarea>
                            </div>
                            <hr>
                            <h4>Contact Section</h4>
                             <div class="form-group">
                                <label for="contact_title">Contact Title</label>
                                <input type="text" name="contact_title" id="contact_title" class="form-control" value="{{ $homeSettings['contact_title'] ?? '' }}">
                            </div>
                            <hr>
                            <h4>Client Reviews Section</h4>
                             <div class="form-group">
                                <label for="client_reviews_title">Client Reviews Title</label>
                                <input type="text" name="client_reviews_title" id="client_reviews_title" class="form-control" value="{{ $homeSettings['client_reviews_title'] ?? '' }}">
                            </div>
                             <div class="form-group">
                                <label for="client_reviews_description">Client Reviews Description</label>
                                <input type="text" name="client_reviews_description" id="client_reviews_description" class="form-control" value="{{ $homeSettings['client_reviews_description'] ?? '' }}">
                            </div>
                            <hr>
                            <h4>Values Section</h4>
                            <div class="form-group">
                                <label for="values_title">Title</label>
                                <input type="text" name="values_title" id="values_title" class="form-control" value="{{ $homeSettings['values_title'] ?? '' }}">
                            </div>
                             <hr>
                            <h4>Working Process Section</h4>
                             <div class="form-group">
                                <label for="working_process_title">Title</label>
                                <input type="text" name="working_process_title" id="working_process_title" class="form-control" value="{{ $homeSettings['working_process_title'] ?? '' }}">
                            </div>
                             <hr>
                            <h4>FAQ Section</h4>
                            <div class="form-group">
                                <label for="faq_title">Title</label>
                                <input type="text" name="faq_title" id="faq_title" class="form-control" value="{{ $homeSettings['faq_title'] ?? '' }}">
                            </div>
                             <hr>
                            <h4>Articles Section</h4>
                             <div class="form-group">
                                <label for="articles_title">Title</label>
                                <input type="text" name="articles_title" id="articles_title" class="form-control" value="{{ $homeSettings['articles_title'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="articles_description">Description</label>
                                <input type="text" name="articles_description" id="articles_description" class="form-control" value="{{ $homeSettings['articles_description'] ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
