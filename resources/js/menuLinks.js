export default [
    {
        title: "Home",
        image: "/images/home-icon.svg",
        links: [
            {
                name: "Dashboard",
                url: "/",
            },
            {
                name: "Favorites",
                url: "/favorites",
            },
            {
                name: "Notifications",
                url: "/notifications",
            },
        ],
        isOpen: true,
    },
    {
        title: "Procurements",
        image: "/images/document.svg",
        links: [
            {
                name: "Procurement processes",
                url: "/procurements",
            },
            {
                name: "Our proposals",
                url: "/procurements/offers",
            },
            {
                name: "Orders",
                url: "/procurements/orders",
            },
        ],
        isOpen: window.location.pathname.includes("/procurements")
            ? true
            : false,
    },
    {
        title: "E-commerce",
        image: "/images/cart-icon.svg",
        links: [
            {
                name: "Catalog",
                url: "/catalog",
            },
            {
                name: "Our products",
                url: "/catalog/our",
            },
        ],
        isOpen: window.location.pathname.includes("/catalog") ? true : false,
    },
    {
        title: "Social",
        image: "/images/social.svg",
        links: [
            {
                name: "Companies",
                url: "/companies",
            },
            {
                name: "Chat and calls",
                url: "/chat",
            },
            {
                name: "Profile",
                url: "/profile",
            },
        ],
        isOpen:
            window.location.pathname.includes("/companies") ||
            window.location.pathname.includes("/chat") ||
            window.location.pathname.includes("/profile")
                ? true
                : false,
    },
];
