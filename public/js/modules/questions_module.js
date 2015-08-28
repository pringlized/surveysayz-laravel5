var Questions = (function($, undefined) {
    var cache = {
        questionOrder: [],
        addQuestionButton: $("#btnAddQuestion"),
        nestableSortOrder: $("#nestable2"),
        questionInput: $("#questionInput"),
        addQuestionForm: $("#frmAddQuestion"),
        editableQuestion: '.editable_question',
        deleteQuestion: '.js-delete-question'
    };

    function init() {
        bindUIActions();
    }

    function bindUIActions() {

        cache.addQuestionButton.on('click', function(e) {
            addQuestion(e);
            return false;
        });

        cache.questionInput.keydown(function(e) {
            questionInputKeypress(e);
        });

        cache.nestableSortOrder.nestable({
            group: 1,
            maxDepth: 2
        }).on('change', updateOutput);

        $(document).on('click', cache.editableQuestion, function(e) {
            $(this).editable(function(value, settings) {
                return editQuestion(e, value, settings);
            })
        });

        $(document).on('click', cache.deleteQuestion, function(e) {
            deleteQuestion(e);
        });
    };

    function addQuestion(e) {
        e.preventDefault();
        var formVars = cache.addQuestionForm.serialize();
        $.ajax({
            url: ssApp.settings.apiRoot + '/question/',
            data: formVars,
            method: 'POST',
            complete: function(data) {
                var route = ssApp.settings.apiRoot + '/html/question/' + data.responseJSON.data.questionId;
                $.get(route)
                    .done(function(returnData) {
                        $("#nestable2 > ol:first-child").append(returnData);
                        ssApp.displayNotification(data.responseJSON.messages);
                        // clear question box and set focus
                        cache.questionInput.val('').focus();
                    }
                );
            }
        });
        return false;
    }

    function editQuestion(e, value, settings) {
        var issueId = cache.nestableSortOrder.data('issue');
        var questionId = $(e.target).closest("li").data('id');
        $.ajax({
            url: ssApp.settings.apiRoot + '/question/' + questionId,
            data: {
                issueId: issueId,
                questionId: questionId,
                question: value
            },
            dataType: "json",
            method: "put",
            complete: function(data) {
                ssApp.displayNotification(data.responseJSON.messages);
            }

        });
        return(value);
    }

    function deleteQuestion(e) {
        var dataId = $(e.target).data('id');
        $.ajax({
            url: ssApp.settings.apiRoot + '/question/' + dataId,
            dataType: 'json',
            method: 'delete',
            complete: function(data) {
                $(e.target).closest( "li").remove();
                ssApp.displayNotification(data.responseJSON.messages);
            }
        });
    }

    function questionInputKeypress(e) {
        if(e.keyCode == 13) {
            addQuestion(e);
        }
    }

    function updateOutput (e) {
        var questionIds = [];
        cache.nestableSortOrder.each(function() {
            $(e.target).find('li').each(function() {
                var current = $(this);
                if (current.data('type') == 'question') {
                    questionIds.push(current.data('id'));
                }
            });
        });
        // if order has been changed
        if (!ssApp.arraysAreIdentical(cache.questionOrder, questionIds)) {
            // cache the sort order
            cache.questionOrder = questionIds;
            var issueId = cache.nestableSortOrder.data('issue');
            var data = {issueId: issueId, sortOrder: questionIds};
            $.ajax({
                url: ssApp.settings.apiRoot + '/util/sort/questions',
                data: data,
                dataType: "json",
                method: "post",
                complete: function(data) {
                    ssApp.displayNotification(data.responseJSON.messages);
                }
            });
        }
    }

    // PUBLIC INTERFACE
    return {
        init: init
    };


})(jQuery);

Questions.init();