import React from 'react';
import { BrowserRouter, Route, Switch } from 'react-router-dom';

// import Logon from './pages/login';
import Register from './pages/Register';


export default function Routes(){
    return (
        <BrowserRouter>
            <Switch>
                {/* <Route path="/login" component={Logon}/> */}
                <Route path="/register" component={Register}/>
            </Switch>
        </BrowserRouter>
    );
}