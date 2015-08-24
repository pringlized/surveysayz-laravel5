<li class="dd-item" data-id="{{ $question->id }}">
    <div class="dd-handle">
        @if ($editable == true)
            <span class="pull-right"><i class="fa fa-times m-r-md"></i></span>
        @endif
        <span class="pull-right"><i class="fa fa-eye m-r-md"></i></span>
        <span class="label label-info"><i class="fa {{ questionTypeIcon($question->question_type) }}"></i></span> {{ $question->question }}
    </div>
</li>