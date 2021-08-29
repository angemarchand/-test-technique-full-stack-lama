import React from "react";
// import "../styles/profile.css"


function Profile () {
    return (
        <div>
            <div className="container mt-5">
                <h1>Mon Profil</h1>
                <form className=" p-4 rounded-0 bg-none mx-auto " action="" method="post">
                    <div className="row">
                        <div className="col d-flex justify-content-center">
                            <div className="card w-50 me-5">
                                <img className="image" src="https://burst.shopifycdn.com/photos/portrait-young-man-smiling.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="" />
                            </div>
                            <div>
                                <div class="mb-1 mt-3">
                                    <label for="profileFile" className="form-label">Modifier la photo :</label>
                                    <input className="form-control rounded-0" type="file" id="profileFile" />
                                </div>

                                <div className="mb-3 mt-5 sm-6 ">
                                    <label htmlFor="skills" className="form-label"> Compétences :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer vos compétences" required />

                                </div>

                                <div className="mb-3 mt-5 sm-6 ">
                                    <label htmlFor="skills" className="form-label"> Régions :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer région de recheches" required />

                                </div>
                            </div>

                        </div>
                        <div className="col col-12 d-flex mt-5">
                            <div className="col col-6 me-5">
                                <div className="mb-3 sm-6">
                                    <label htmlFor="firstname" className="form-label"> Prénom :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer votre prénom" required />

                                </div>
                                <div className="mb-3 sm-6">
                                    <label htmlFor="lastname" className="form-label"> Nom :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer votre nom" required />

                                </div>
                                <div className="mb-3 sm-6">
                                    <label for="status">Statut :</label>
                                    <select name="status" id="status" class="form-control rounded-0">
                                        <option value="1">En recherche d'opportunités</option>
                                        <option value="0">Ne recherche pas en ce moment</option>
                                    </select>

                                </div>
                                <div className="mb-3 sm-6">
                                    <label for="birthdate">Date de naissance :</label>
                                    <input type="date" class="form-control rounded-0" name="birthdate" id="birthdate" />

                                </div>
                            </div>
                            <div className="col col-6">
                                <div className="mb-4 mt-2 sm-6">
                                    <label htmlFor="level-of-study">Niveau d'études :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer niveau d'étude" required />

                                </div>
                                <div className="mb-4 sm-6">
                                    <label htmlFor="linkedin">LinkedIn :</label>
                                    <input type="text" class="form-control rounded-0" name="linkedin" id="linkedin" placeholder="LinkedIn "  />

                                </div>
                                <div className="mb-3 sm-6">
                                    <label htmFor="email"> Email :</label>
                                    <input type="email" class="form-control rounded-0" name="email" id="email" placeholder="Votre email"/>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div className="row">
                        <div className="col ">
                            <div className="col-12 mt-5 mb-5">
                                <h2 className="title">Formations</h2>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    )
}

export default Profile;