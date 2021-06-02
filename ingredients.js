var ajaxRequest;



var checkboxes = document.querySelectorAll('.checky');

for(var i = 0; i < checkboxes.length; i++) 
{
    var checkboxe = checkboxes[i];
    checkboxe.addEventListener('click', function(e) 
    {
        if(window.XMLHttpRequest) 
        {
            ajaxRequest = new XMLHttpRequest();
        }
        else 
        {
            ajaRequest = ActiveXObject("Microsoft.XMLHTTP");
        }

        if(ajaxRequest.readyState === 4) 
        {
            if(ajaxRequest.status === 200) 
            {
                
            }
            else 
            {
                console.log("Can't contact server");
            }
        }

        ajaxRequest.open('POST', '/insert-ingredient.php', true);
        ajaxRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        ajaxRequest.send("name='Champagne'&have=1");
    })
}



