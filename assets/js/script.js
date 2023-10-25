$("#submit-question").on("click", function(e) {
    e.preventDefault();
    var question = $("#question").val();

    $.ajax({
        type: "POST",
        url: "../includes/submit_question.php",
        data: { question: question },
        dataType: "json", // 指定响应类型为JSON
        success: function(data) {
            var index = 0;

            // 清空答案区域
            $("#answer").html('');

            // 获取答案内容
            var response = data.answer;

            // 使用 setInterval 逐字显示答案
            var intervalId = setInterval(function() {
                $("#answer").append(response.charAt(index));
                index++;

                if (index >= response.length) {
                    clearInterval(intervalId);
                }
            }, 100);  // 这里的100表示每100ms显示一个字符

            $("#question").val('');
        }
    });
});
