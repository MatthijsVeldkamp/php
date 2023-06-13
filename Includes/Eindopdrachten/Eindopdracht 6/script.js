const stats = document.getElementById("stats");
const imagecontainer = document.getElementById("imagecontainer");
const statsbutton = document.getElementById("statsbutton");
const imagebutton = document.getElementById("imagebutton");
const container = document.getElementById("container");
var isToggled = false;
var isToggled2 = false;
stats.style.display = "none";
imagecontainer.style.display = "none";

function togglestats()
{
    isToggled = !isToggled;
    console.log(isToggled);
    if (isToggled != true && isToggled2 != true)
    {
        container.style.display = "flex";
    }
    if(isToggled)
    {
        statsbutton.innerHTML = "Hide Stats";
        stats.style.display = "flex";
        stats.style.animation = "fadein 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) forwards";
        imagecontainer.style.display = "none";
        imagebutton.innerHTML = "Show Image";
        imagecontainer.style.animation = "fadeout 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) forwards";
        isToggled2 = false;
        container.style.display = "none";
    }
    else
    {
        statsbutton.innerHTML = "Show Stats";
        stats.style.animation = "fadeout 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) forwards";
    }
}
function toggleimage()
{
    isToggled2 = !isToggled2;
    console.log(isToggled2);
    if (isToggled != true && isToggled2 != true)
    {
        container.style.display = "flex";
    }
    if(isToggled2)
    {
        imagebutton.innerHTML = "Hide Image";
        imagecontainer.style.display = "block";
        imagecontainer.style.animation = "fadein 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) forwards";
        stats.style.display = "none";
        statsbutton.innerHTML = "Show Stats";
        stats.style.animation = "fadeout 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) forwards";
        isToggled = false;
        container.style.display = "none";
    }
    else
    {
        imagebutton.innerHTML = "Show Image";
        imagecontainer.style.animation = "fadeout 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) forwards";
    }
}