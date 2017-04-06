$(document).ready(function(){
    $("input[type='password']").keyup(function(){
        if($("#pass").val()===$("#repeate-pass").val())
        {
            $("#btnSubmit").attr("disabled",null);
        }else
        {
            $("#btnSubmit").attr("disabled",true);
        }
    });
});
function checkRepeatPass()
{
     if($("#pass").val()===$("#repeate-pass").val())
    {
        return true
    }
    alert('正しく入力してください');
    return false;
}

