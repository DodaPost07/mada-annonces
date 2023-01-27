import "./bootstrap";
import "../css/app.css";

import ReactDOM from "react-dom/client";
import { QueryClient, QueryClientProvider } from "react-query";
import Home from "./Page/Home";

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

// ReactDOM.createRoot(document.getElementById("app")).render(<Home />);
