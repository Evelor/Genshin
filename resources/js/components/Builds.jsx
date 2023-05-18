import React from 'react';
import Router from '../router/Router.jsx'
// import ReactDOM from 'react-dom/client';

//  function Builds() {
//      const builds = [
//          {id: 1, character: 'Alhaitham', country: 'Sumeru'},
//          {id: 2, character: 'Amber', country: 'Monshdat'},
//          {id: 3, character: 'Raiden', country: 'Inadzuma'},
//      ];
//
//     const results = [];
//
//      builds.forEach((build, id) => {
//         results.push(
//             <div key={id}>
//                 <h2>name: {build.character}</h2>
//                 <h2>country: {build.country}</h2>
//                 <hr />
//             </div>,
//         );
//     });
//
//     return <div>{results}</div>;
// }
// export default Builds;
//
// if (document.getElementById('builds')) {
//     const Index = ReactDOM.createRoot(document.getElementById('builds'));
//
//     Index.render(
//         <React.StrictMode>
//             <Builds/>
//         </React.StrictMode>
//     )
// }
const Builds = () => {
    return(
        <div>
            <h1>Buildes page</h1>
            <Router />
        </div>
    )
}
export default Builds
