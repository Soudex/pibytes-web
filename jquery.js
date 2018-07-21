$(document).ready(function()
{
   $('.button').click(function()
   {
        $.ajax(
        {
            type: 'POST',
            url: 'handleCommands.php', 
            data: 
            {
                command: "demo",
                value: "web"
            }
        }).done(function(response)
        {
            response = JSON.parse(response);
            console.log(response);
        });
   }); 
});