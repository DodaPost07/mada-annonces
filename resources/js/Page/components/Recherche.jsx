import react from "react";

const Recherche = () => {
    return (
        <div className="flex md:flex-row flex-col items-center p-3 space-x-6 mt-3 md:mx-16 bg-white rounded-md boreder shadow-lg hover:shadow-lg transform hover:scale-105 transition duration-500 mx-auto justify-between">
            <div className="flex bg-gray-100 p-4 md:w-1/2 w-full space-x-4 rounded-lg">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    className="h-6 w-6 opacity-30"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                </svg>
                <input
                    className="bg-gray-100 outline-none"
                    type="text"
                    placeholder="Article name or keyword..."
                />
            </div>
            <div className="flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer">
                <span>Categorie</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    className="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M19 9l-7 7-7-7"
                    />
                </svg>
            </div>
            <div className="flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer">
                <span>offre</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    className="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        d="M19 9l-7 7-7-7"
                    />
                </svg>
            </div>
            <div className="bg-red-600 py-2 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer md:w-36 w-full mx-3">
                <span>Search</span>
            </div>
        </div>
    );
};

export default Recherche;
