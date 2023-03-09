import "./bootstrap";
import "../css/app.css";
import "@fortawesome/fontawesome-free/scss/fontawesome.scss";
import "@fortawesome/fontawesome-free/scss/brands.scss";
import "@fortawesome/fontawesome-free/scss/regular.scss";
import "@fortawesome/fontawesome-free/scss/solid.scss";
import "@fortawesome/fontawesome-free/scss/v4-shims.scss";

import "../assets/js/main.js";

import ReactDOM from "react-dom/client";
import { QueryClient, QueryClientProvider } from "react-query";
import Home from "./Page/Home";
import Recherche from "./Page/components/Recherche";

const queryClient = new QueryClient();

if (document.querySelector("#app")) {
    const container = document.querySelector("#app");
    const root = ReactDOM.createRoot(container);
    root.render(
        <QueryClientProvider client={queryClient}>
            <Home home={container.dataset.home} />
        </QueryClientProvider>
    );
}

if (document.querySelector("#recherche")) {
    const container = document.querySelector("#recherche");
    const root = ReactDOM.createRoot(container);
    root.render(
        <QueryClientProvider client={queryClient}>
            <Recherche />
        </QueryClientProvider>
    );
}

// ReactDOM.createRoot(document.getElementById("app")).render(<Home />);
