import React from "react";
import { Link } from "react-router-dom";
import "../styles/navbar.css"

function Navbar () {
    return (
        <div>
            <nav className="navbar navbar-expand-lg navbar-light bg-light navBackground">
                <div className="container-fluid">
                    <Link to="/" className="navbar-brand ms-5 logo text-uppercase">Lamatch</Link>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon" ></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li className="nav-item">
                                <Link className="nav-link linkColor ms-5" to="/"> Accueil </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link linkColor ms-5" to="/products"> Matching </Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link linkColor ms-5" to="/users/register"> Mon profil </Link>
                            </li>
                        </ul>
                    </div>
                    <div className="btn-group me-5" role="group">
                        <button id="btnGroupDrop1" type="button" className="btn rounded-0 dropdown-toggle linkColor" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                        <ul className="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li>
                                <Link className="dropdown-item linkColor " to="#">Gérer les employeurs </Link>
                            </li>
                            <li>
                                <Link className="dropdown-item linkColor " to="#">Gérer les candidats </Link>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul className="navbar-nav mx-auto me-5 mb-2 mb-lg-0">
                            <li className="nav-item">
                                <Link className="nav-link linkColor"  to="#"> Logout </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    )
}

export default Navbar;