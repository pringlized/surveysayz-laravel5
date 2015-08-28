<li class="dd-item dd3-item" data-id="{{ $question->id }}" data-type="question">
    <div class="dd-handle dd3-handle">
    <span class="label label-info"><i class="fa {{ questionTypeIcon($question->question_type) }}"></i></span>
    </div>
    <div class="dd3-content">
        @if ($editable == true)
            <span class="pull-right"><a id="delete-question-{{ $question->id }}" data-id="{{ $question->id }}" class="fa fa-times m-r-md js-delete-question"></a></span>
        @endif
        @if ($question->question_type != 'essay')
            <span class="pull-right"><a id="add-answer-{{ $question->id }}" data-id="{{ $question->id }}" class="fa fa-plus m-r-md js-add-answer"></a></span>
        @endif
        <span class="editable_question">{{ $question->question }}</span>
    </div>
    @foreach ($question->answers as $answer)
        @include('admin.items.answer_list_item')
    @endforeach
</li>