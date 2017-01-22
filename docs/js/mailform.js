/// <reference path="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js" />
/// <reference path="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js" />
/// <reference path="jquery.scrollTo-1.4.2-min.js" />
/// <reference path="hint.js" />

$(document).ready(function () {
    setAgreeCheckingAction();
    setHintText();

    var $inputModeControls = $('.input_mode');
    var $confirmModeControls = $('.confirm_mode');
    $('#backButton').click(function () {
        $confirmModeControls.hide();
        $inputModeControls.show();
        setHintText();
    });

    var $form = $('#mailForm');
    $('#confirmButton').click(function () {
        removeHintText();   // 検証前にヒントを削除しないとヒントが入力値として処理されてしまう

        $form.validate({
            rules: {
                fullname: "required",
                furigana: "required",
                age: {
                    required: true,
                    digits: true,
                    maxlength: 2
                },
                firstmail: {
                    required: true,
                    email: true
                },
                secondmail:
                        {
                            required: true,
                            email: true,
                            equalTo: "#firstmail"
                        }
            },
            messages: {
                fullname: "必須項目です",
                furigana: "必須項目です",
                age: {
                    required: "必須項目です",
                    digits: "半角数字を入力してください",
                    maxlength: "2文字以内で入力してください"
                },
                firstmail: {
                    required: "必須項目です",
                    email: "正しいメールアドレスを入力してください"
                },
                secondmail: {
                    required: "必須項目です",
                    email: "正しいメールアドレスを入力してください",
                    equalTo: "入力されたメールアドレスが違います"
                }
            }
        });

        if ($form.valid()) {
            setConfirmationMode();
            $confirmModeControls.show();
            $inputModeControls.hide();
            $.scrollTo($('#fullname_span').get(0), 800);    // 先頭にスクロール
        }
        else {
            setHintText();                  // ヒントを再設定
            $('input.error:first').focus(); // 検証失敗したコントロールにフォーカス
        }
    });

    $('#submitButton').click(function () {
        $form.submit();
    });
});

/* 同意するチェック */
function setAgreeCheckingAction() {
    var $button = $('#submitButton');
    $('#agreeCheck').click(function () {
        var agreed = $(this).is(':checked');
        $button.attr("disabled", !agreed);
    });
    $button.attr("disabled", true);
}

/* テキストボックスにヒントを設定 */
function setHintText() {
    $('input:text').hint();
}

/* ヒントを表示中のコントロールからヒントを除去 */
function removeHintText() {
    $('.blur').each(function () {
        $(this).removeClass("blur");
        $(this).val("");
    });
}

/* 確認用にSPANに値を設定 */
function setConfirmationMode() {
    removeHintText();

    $('#fullname_span').text($('#fullname').val());
    $('#furigana_span').text($('#furigana').val());
    $('#sex_span').text($("[name='sex']:checked").val());
    $('#age_span').text($('#age').val());
    $('#mail_span').text($('#firstmail').val());
}