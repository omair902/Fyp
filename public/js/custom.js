$(document).ready(function()
{
    $('.remove-item').click(function()
    {
        var url=$(this).attr('data-url');
        $('.form').attr('action',url);
    });
});