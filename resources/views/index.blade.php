@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col s12">
            <h4>Your Tasks {{ date('d/m/Y') }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="fixed-action-btn direction-top">
            <button id="open-modal" class="btn-floating btn-large waves-effect waves-light red">
                <i class="material-icons">add</i>
            </button>
        </div>
    </div>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="row">
                <h5 class="col s12">Create your task</h5>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="task" class="materialize-textarea"></textarea>
                    <label for="task">Task</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="modal-close waves-effect waves-green btn-flat">
                Save
            </button>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {

            $('.modal').modal();

            $('#open-modal').click(function () {

                $('.modal').modal('open');
            });
            ;
        });
    </script>
@endsection