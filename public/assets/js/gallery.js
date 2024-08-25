
    let scrollContainer = document.querySelector(".gallery");
    let backBtns = document.getElementById("backBtn");
    let nextBtns = document.getElementById("nextBtn");
    scrollContainer.addEventListener("wheel" ,(evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto";
    });
    nextBtns.addEventListener('click', ()=>{
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 900;
    });

    backBtns.addEventListener('click', ()=>{
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 900;
    });

    