import { Fragment } from "react";
import { BrowserRouter, Route, Switch } from "react-router-dom";
import Login from "../views/Login";
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";
import Home from "../views/Home";
import Candidate from "../views/Candidate";


export default function AppRouter () {
    return (
        <BrowserRouter>
            <Fragment>
                <Navbar />
                <Switch>
                    <Route path="/" component={Home} exact={true} />
                    <Route path="/login" component={Login} exact={true} />
                    <Route path="/candidate" component={Candidate} exact={true} />
                </Switch>
                <Footer />
            </Fragment>
        </BrowserRouter>
    )
}