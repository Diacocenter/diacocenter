import React from 'react';
import {createRoot} from 'react-dom/client';
// import {QueryClient} from "react-query";
import SearchProjects from "./components/SearchProjects"


function App () {
    return (
        <>
            <SearchProjects/>
        </>
    )
}


const elements =  document.getElementById("explorer-search");
console.log(elements);
createRoot(elements!).render(<App/>);


// console.log("app tsx");
// export function App() {
//     const queryClient = new QueryClient();
//     return <h1>ythmkijhnyyuijyujh</h1>;
// }


// if (document.getElementById("explorer_project")){
//     console.log("asghar");
//     createRoot(document.getElementById('explorer_project')).render(<App/>);
// }



// let element = document.getElementsByClassName("explorer_project")

// createRoot(element).render(<App/>)



// if(elements) {
//     const arr = [].slice.call(elements);
//     arr.map((item , index)=> {
//             createRoot(item).render(<Ali/>);
//     })
// }




// const a = document.getElementsByClassName("explorer_project")
