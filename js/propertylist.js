window.addEventListener("load",function()
{
    var is_interested_image=document.getElementsByClassName("is-interested_image");
    Array.from(is_interested_image).forEach(element =>{
        element.addEventListener("click",function(event)
        {
            var XHR=new XMLHttpRequest();
            XHR.addEventListener("load",toggle_interested_success);
            XHR.addEventListener("error",on_error);
            XHR.open("GET","api/toggle_interested.php?property_id="+property_id);
            XHR.send();
            document.getElementById("loading").style.display = 'block';
            event.preventDefault();
        });
    });
});
var toggle_interested_success=function(event){
    document.getElementById("loading").style.display = 'none';
    var response=JSON.parse(event.target.responseText);
    if (response.success) {
        var property_id=response.property_id;

        var is_interested_image=document.querySelectorAll(".property-id-"+property_id+".is_interested_image")[0];
        var is_interested_count=document.querySelectorAll(".property-id-"+property_id+".interested_user_count")[0];
        if (response.is_interested) {
            is_interested_image.classList.add("fas");
            is_interested_image.classList.remove("far");
            interested_user_count.innerHTML = parseFloat(interested_user_count.innerHTML) + 1;
        }else{
            is_interested_image.classList.add("far");
            is_interested_image.classList.remove("fas");
            interested_user_count.innerHTML = parseFloat(interested_user_count.innerHTML) - 1;
        }
    }else if (!response.success && !response.is_logged_in) {
        window.$("#login-modal").modal("show");
    }
};