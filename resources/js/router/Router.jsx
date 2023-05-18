import React from 'react';
import { Switch, Route } from "react-router-dom";
import Builds from "../components/Builds.jsx";
import NotFound from "../components/NotFound.jsx";

const Router = () => {
    return(
        <div>
            <Switch>
                <Route path="*" element={<Builds />}/>
                <Route path="/*" element={<NotFound />}/>
            </Switch>
        </div>
    )
}
export default Router

