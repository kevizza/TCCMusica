class UserNavbar{
    constructor(userMenu, menu){
        this.userMenu = document.querySelector(userMenu);
        this.menu = document.querySelector(menu);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    // animateLinks() {
    //     this.menu.forEach((link) => {
    //         link.style.animation
    //         ? (link.style.animation = "")
    //         : (link.style.animation = `navLinkFade 0.5s ease forwards 0.3s`);
    //     });
    // }

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();
    }


    addClickEvent() {
        this.userMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if(this.userMenu) {
            this.addClickEvent();
        }
        return this;
    }
}
mobileNavbar.init();