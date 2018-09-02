@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col s12">
            <h4>My Tasks {{ $date != '' ? $date : date('d/m/Y') }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col s3">
            <label for="date_selected"> Select another day</label>
            <input type="text" class="datepicker" id="date_selected" value="">
        </div>
    </div>
    <div class="row">
        @foreach($tasks as $task)
            @php
                $color = is_null($task->date_finished) ? 'red': 'green';
            @endphp
            <div class="col s12 m6">
                    <div class="card {{$color}} darken-1">
                        <div class="card-content white-text">
                            <p>
                                {{$task->task}}
                            </p>
                        </div>
                        <div class="card-action">
                            <button class="btn {{$color}} darken-1 white-text"><i
                                        class="material-icons left">check</i>Mark
                                as
                                complete
                            </button>
                            <button class="btn {{$color}} darken-1 white-text"><i
                                        class="material-icons left">delete_forever</i>Delete
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        <h5 class="col s12">Create Task</h5>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="task" class="materialize-textarea"></textarea>
                            <label for="task">Task</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-save" class="modal-close waves-effect waves-green btn-flat">
                        Save
                    </button>
                </div>
            </div>
            @endsection
        @section('javascript')
            <script>
                $(document).ready(function () {

                    $('#modal1').modal();

                    $('.datepicker').datepicker({
                        'format': 'dd/mm/yyyy',
                        'setDefaultDate': true,
                        'defaultDate': new Date()
                    });

                    $('#open-modal').click(function () {

                        $('#modal1').modal('open');
                    });

                    $('#btn-save').click(function () {

                        var task = $('#task').val();

                        $.ajax({
                            url: "/task/store",
                            method: "POST",
                            data: {task: task}
                        }).done(function () {

                            location.reload();
                        });
                    });

                    $('.datepicker').change(function () {

                        location.replace("?date=" + $('.datepicker').val());
                    });

                    if('{{$date}}' != ''){

                        $('.datepicker').val('{{$date}}');
                    }
                });
            </script>
@endsection