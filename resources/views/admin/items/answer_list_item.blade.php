<ol class="dd-list" data-question="{{ $answer->question_id }}">
    <li class="dd-item dd3-item" data-id="{{ $answer->id }}" data-type="answer">
        <div class="dd3-content">
            <span class="pull-right"><a id="delete-answer-{{ $answer->id }}" data-id="{{ $answer->id }}" class="fa fa-times m-r-md js-delete-answer"></a></span>
            <span class="editable_answer">{{ $answer->answer }}</span>
        </div>
    </li>
</ol>