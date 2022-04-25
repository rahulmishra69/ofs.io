const search = () =>
{
    let searchbox = document.getElementById("search-item").value.toUpperCase();
    let storeitems = document.getElementById("food-slider")
    let product = storeitems.querySelectorAll(".food-card")
    let pname = document.getElementsByTagName("h2")

    for (var i = 0; i < pname.length; i++)
    {
        let match = product[i].getElementsByTagName('h2')[0];
        
        if(match)
        {
           let textvalue =  match.textContent || match.innerHTML
           if(textvalue.toUpperCase().indexOf(searchbox) > -1)
           {
               product[i].style.display ="";
           }
           else 
           {
            product[i].style.display ="none";
           }
        }
    }
}