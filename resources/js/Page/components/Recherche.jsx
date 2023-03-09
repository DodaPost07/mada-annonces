import react from "react";

const Recherche = () => {
    return (
        <div className="flex md:flex-row flex-col items-center p-3 space-x-6 mt-3 md:mx-16 bg-white rounded-md boreder shadow-lg hover:shadow-lg transform hover:scale-105 transition duration-500 mx-auto justify-between">
            <div className="flex bg-gray-100 px-4 py-2 md:w-3/6 w-full space-x-4 rounded-lg my-2">
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
                    placeholder="Que cherchez-vous ?"
                />
            </div>
            <div className="flex w-full text-center md:w-2/6 my-2">
                <select className="w-full p-2 text-gray-500 font-semibold bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-green-600 text-center cursor-pointer md:mr-0 mr-6">
                    <option className=" py-2 cursor-pointer" hidden>
                        Categorie
                    </option>
                    <option className=" py-2 cursor-pointer text-start">
                        maison
                    </option>
                    <option className=" py-2 cursor-pointer text-start">
                        emploie
                    </option>
                </select>
            </div>
            <div className="flex w-full text-center md:w-1/6 my-2">
                <select className="w-full p-2 text-gray-500 font-semibold bg-white border rounded-md shadow-sm outline-none appearance-none focus:border-green-600 text-center cursor-pointer md:mr-0 mr-6">
                    <option className=" py-2 cursor-pointer" hidden>
                        Type
                    </option>
                    <option className=" py-2 cursor-pointer text-start">
                        Offre
                    </option>
                    <option className=" py-2 cursor-pointer text-start">
                        Demande
                    </option>
                </select>
            </div>
            <div className="flex w-full text-center md:w-1/6 my-2 md:ml-3 ml-0">
                <spa className="bg-red-600 py-2 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer   w-full md:mr-0 pr-6">
                    Search
                </spa>
            </div>
        </div>
    );
};

export default Recherche;
