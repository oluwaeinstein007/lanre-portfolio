    /*-------about section tabs------*/
    (()=>{
        const aboutSection = document.querySelector(".about-section"),
        tabsContainer = document.querySelector('.about-tabs');
        tabsContainer.addEventListener("click", (event)=>{
            /*if event target is a 'tab-item' class and not contains 'active'*/
            if(event.target.classList.contains("tab-item") && !event.target.classList.contains("active")){
                const target = event.target.getAttribute("data-target");
                //deactivate existing active 'tab-item'
                tabsContainer.querySelector(".active").classList.remove("active","outer-shadow");
                //deactivate existing active 'tab-content'
                aboutSection.querySelector(".tab-content.active").classList.remove("active");
                //activate clicked 'tab-content'
                aboutSection.querySelector(target).classList.add("active");
            }
        })
    })();