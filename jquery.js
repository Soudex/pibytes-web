$(document).ready(function()
{
   $('.button').click(function()
   {
        $.ajax(
        {
            type: 'POST',
            url: 'php/handleCommands.php', 
            data: 
            {
                command: $(this).attr('command'),
                value: "web"
            }
        }).done(function(response)
        {
            response = JSON.parse(response);
            console.log(response);
        });
   }); 
});