var Answers = (function($, undefined) {
    var cache = {
        editableAnswer: '.editable_answer',
        deleteAnswer: '.js-delete-answer',
        addAnswer: '.js-add-answer'
    };

     function init () {
        bindUIActions();
    }

    function bindUIActions() {

        $(document).on('click', cache.editableAnswer, function (e) {
            $(this).editable(function (value, settings) {
                return editAnswer(e, value, settings);
            });
        });

        $(document).on('click', cache.addAnswer, function (e) {
            addAnswer(e);
        });

        $(document).on('click', cache.deleteAnswer, function (e) {
            deleteAnswer(e);
        });
    }


    function editAnswer(e, value, settings) {
        var questionId = $(e.target).closest("ol").data('question');
        var answerId = $(e.target).closest("li").data('id');
        $.ajax({
            url: ssApp.settings.apiRoot + '/answer/' + answerId,
            data: {
                questionId: questionId,
                answerId: answerId,
                answer: value
            },
            dataType: "json",
            method: "put",
            complete: function (data) {
                ssApp.displayNotification(data.responseJSON.messages);
                console.log('value: '+value)
            }
        });
        return(value);
    }

    function addAnswer(e){
        console.log(e.target);
        console.log($(e.target).closest("ol"));

        var questionId = $(e.target).data('id');
        console.log('question id: '+questionId);
        var data = {
            questionId: questionId
        };
        $.ajax({
            url: ssApp.settings.apiRoot + '/answer',
            data: data,
            dataType: "json",
            method: "post",
            complete: function (data) {
                console.log(data);
                console.log(e);
                // using returned questionID, request questionListItem html to append
                var route = ssApp.settings.apiRoot + '/html/answer/' + data.responseJSON.data.answerId;
                $.get(route)
                    .done(function (returnData) {
                        $(e.target).closest("li").append(returnData);
                        ssApp.displayNotification(data.responseJSON.messages);
                    }
                );
            }
        });
    }

    function deleteAnswer(e) {
        var dataId = $(e.target).data('id');
        $.ajax({
            url: ssApp.settings.apiRoot + '/answer/' + dataId,
            dataType: 'json',
            method: 'delete',
            complete: function (data) {
                console.log(data);
                console.log(e);
                $(e.target).closest("ol").remove();
                ssApp.displayNotification(data.responseJSON.messages);
            }
        });
    }

    // revealing pattern
    return {
        init: init
    };

})(jQuery);

Answers.init();