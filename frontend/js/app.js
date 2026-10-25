const app = document.getElementById("app");

const pages = {
    home: "views/dashboard.html",
    login: "views/login.html",
    register: "views/register.html",
    profile: "views/profile.html",
    entities: "views/entities.html"
};

async function loadPage(pageName, updateHistory = true) {
    const page = pages[pageName] ? pageName : "home";
    const pageUrl = pages[page];

    try {
        const response = await fetch(pageUrl);

        if (!response.ok) {
            throw new Error("Could not load " + pageUrl);
        }

        const html = await response.text();
        const parser = new DOMParser();
        const documentPage = parser.parseFromString(
            html,
            "text/html"
        );

        app.innerHTML = documentPage.body.innerHTML;

        const title = documentPage.querySelector("title");

        if (title) {
            document.title = title.textContent;
        }

        if (updateHistory) {
            window.history.pushState(
                { page: page },
                "",
                "#" + page
            );
        }

        window.scrollTo(0, 0);

    } catch (error) {
        console.error("HealthHub error:", error);

        app.innerHTML = `
            <main class="container">
                <h2>Page could not be loaded</h2>
                <p>Please check the file names and run Live Server.</p>
            </main>
        `;
    }
}

document.addEventListener("click", function (event) {
    const link = event.target.closest("a");

    if (!link) return;

    const href = link.getAttribute("href");

    if (!href) return;

    const pageName = Object.keys(pages).find(function (key) {
        return href === pages[key].replace("views/", "");
    });

    if (pageName) {
        event.preventDefault();
        loadPage(pageName);
    }
});

window.addEventListener("popstate", function () {
    const pageName = window.location.hash.slice(1) || "home";
    loadPage(pageName, false);
});

const initialPage = window.location.hash.slice(1) || "home";
loadPage(initialPage, false);