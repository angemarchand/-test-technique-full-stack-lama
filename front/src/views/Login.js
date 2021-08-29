import React from "react";
import "../styles/login.css"


function Login () {

    return (
        <div className="container mb-5 vh 100">
            <h1 className="mt-3">Bienvenue sur Lamatch</h1>
            <div className="mt-3 rounded-0 card p-4 mx-auto w-50">
                <h2 className="mb-5">Connexion</h2>
                <div className="mb-3 sm-6 ">
                    <label htmlFor="email" className="form-label"> Email</label>
                    <input type="email" className="form-control rounded-0" required />

                </div>
                <div className="mb-3 sm-6">
                    <label htmlFor="password" className="form-label"> Mot de passe</label>
                    <input type="password" className="form-control rounded-0" required />

                </div>

                <button type="submit" id="button" className="btn btn-primary rounded-0">Se connecter</button>
            </div>
        </div>
    )

}

export default Login;