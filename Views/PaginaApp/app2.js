class UserNavbar{
    constructor(userMenu, navList, navLinks){
        this.userMenu = document.querySelector(userMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link) => {
            link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = `navLinkFade 0.5s ease forwards 0.3s`);
        });
    }

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

const mobileNavbar = new MobileNavbar(
    ".user",
    ".nav-list",
    ".nav-list li",

);
mobileNavbar.init();