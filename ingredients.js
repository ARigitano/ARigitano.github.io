var ajaxRequest;

if(window.XMLHttpRequest) 
{
    ajaxRequest = new XMLHttpRequest();
}
else 
{
    ajaRequest = ActiveXObject("Microsoft.XMLHTTP");
}

var checkboxes = document.querySelectorAll('.checky');

checkboxes.addEventListener('click', function(e) 
{

})

if(ajaxRequest.readyState === 4) 
{
    //data

    if(ajaxRequest.status === 200) 
    {
        //more data
    }
    else 
    {
        console.log("Can't contact server");
    }
}

ajaxRequest.open('POST', '/insert-ingredient.php', true);
ajaxRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
ajaxRequest.send("name=dsd"+"&have=0");