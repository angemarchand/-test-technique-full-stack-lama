import React, {useEffect,useState } from "react";
import Axios from 'axios';



function CandidateInfos (){

    const [skills, setSkills] = useState([]);
    useEffect(() => {

        const getSkills = () => {
            let arrSkills = [];

            Axios.get("https://localhost:8000/api/skills",{
            }).then((response) => {
                let skillData = response.data['hydra:member']
                // console.log(response)
                // console.log(skillData)
                skillData.forEach(element => {
                    if (element.category) {
                        arrSkills.push(
                            <div key={Math.random().toString(36).substring(7)}>
                                <input className="form-check-input" type="checkbox" 
                                key={"option " + element.category} 
                                value={"/api/skills/" + element.id} 
                                id="flexCheckDefault" />
                                <label className="form-check-label" htmlFor="flexCheckDefault"> {element.category} </label>
                            </div>

                        )
                    }

                });
                setSkills(arrSkills);
            })
        }

        getSkills()
    }, [])

    const verifCheckbox = (e) => {
        const countSkill = skills.length;
        let checkedSkill = []
         for (let i = 0 ; i < countSkill; i++) {
             let posInput = 9 +i
             //  console.log("value", e.target[posInput].value)
             if (e.target[posInput].checked === true){
                 checkedSkill.push(e.target[posInput].value);
                 console.log('i am checked', checkedSkill );
             }
             
         }
         return(checkedSkill)
         
     }

    const sendSkills = (checked) =>{
        console.log(checked);
        console.log("avant le for")

        for (const element in checked) {
            // console.log("je suis là", `${element}: ${checked[element]}`);
            // let result = `${element}: ${checked[element]}`
            // console.log(result)
            let test = checked[element]
            console.log("Bonjour", test)

            Axios.post('https://localhost:8000/api/candidates', {
                skills : [test]
            }).then(res => {
                console.log("hoo")
                console.log("wesh", res)
            })
        }

    }
   

    const submit = (e) => {
        e.preventDefault();
        let checked = verifCheckbox(e)
        sendSkills (checked)
    //    let checkedSkill = verifCheckbox(e)
    //    sendSkills(checkedSkill)
        // let response = [
        //     {urlPicture : e.target[0].value},
        //     {firstname  : e.target[1].value},
        //     {lastname   : e.target[2].value},
        //     {email      : e.target[3].value},
        //     {birthdate  : e.target[4].value},
        //     {status     : e.target[5].value},
        //     {levelStudy : e.target[6].value},
        //     {linkedIn   : e.target[7].value},
        //     {region     : e.target[8].value},
        //     {theSkills  : e.target[9].value}
        //   ];
        //   console.log("yo ", response);

    let urlPicture = e.target[0].value;
    let firstname  = e.target[1].value;
    let lastname   = e.target[2].value;
    let email      = e.target[3].value;
    let birthdate  = e.target[4].value;
    let status     = e.target[5].value;
    if(status === "1") {
        status = true;
    } else {
        status = false;
    }
    let levelStudy = e.target[6].value;
    let linkedIn   = e.target[7].value;
    let region     = e.target[8].value;
    // let theSkills  = e.target[9].value;;

        Axios.post('https://localhost:8000/api/candidates', {
            profilePhoto : urlPicture,
            firstname  : firstname,
            name       : lastname,
            email      : email,
            birthDate  : birthdate,
            levelStudies : levelStudy,
            inSearch     : status,
            // skills     : theSkills,
            linkedin   : linkedIn,
            searchRegion : region
        }).then(response => {
            console.log("haha")
            console.log(response)
            // setCandidateInfo(res)
        } )
        .catch(error => {
            console.error('There was an error!', error);
        });
    }

    
    return (
        <div>
            <div className="container mt-5">
                <h1>Mon Profil</h1>
                <form onSubmit={e => {submit(e)}} className=" p-4 rounded-0 bg-none mx-auto ">
                    <div className="row">
                        <div className="col d-flex justify-content-center">
                            <div>
                                <div className="mb-1 mt-3">
                                    <label htmlFor="profileFile" className="form-label">Modifier la photo :</label>
                                    <input className="form-control rounded-0" type="file" id="profileFile"  />
                                </div>
                            </div>
                        </div>
                        <div className="col col-12 d-flex mt-5">
                            <div className="col col-6 me-5">
                                <div className="mb-3 sm-6">
                                    <label htmlFor="firstname" className="form-label"> Prénom :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer votre prénom" 
                                    required  />

                                </div>
                                <div className="mb-3 sm-6">
                                    <label htmlFor="lastname" className="form-label"> Nom :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer votre nom" 
                                    required />

                                </div>
                                <div className="mb-3 sm-6">
                                    <label htmlFor="email"> Email :</label>
                                    <input type="email" className="form-control rounded-0" name="email" id="email" placeholder="Votre email" 
                                    required />
                                </div>

                                <div className="mb-3 sm-6">
                                    <label htmlFor="birthdate">Date de naissance :</label>
                                    <input type="date" className="form-control rounded-0" name="birthdate" id="birthdate" 
                                    required  />
                                </div>
                            </div>
                            <div className="col col-6">
                                <div className="mb-4 sm-6">
                                    <label htmlFor="status">Statut :</label>
                                    <select name="status" id="status" className="form-control rounded-0" 
                                    required >
                                        <option value="1">En recherche d'opportunités</option>
                                        <option value="0">Ne recherche pas en ce moment</option>
                                    </select>
                                </div>
                                <div className="mb-3 mt-2 sm-6">
                                    <label htmlFor="level-of-study">Niveau d'études :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer niveau d'étude" 
                                    required />

                                </div>
                                <div className="mb-3 sm-6">
                                    <label htmlFor="linkedin">LinkedIn :</label>
                                    <input type="text" className="form-control rounded-0" name="linkedin" id="linkedin" placeholder="LinkedIn " 
                                     />

                                </div>
                                <div className="mb-3 sm-6 ">
                                    <label htmlFor="skills" className="form-label"> Régions :</label>
                                    <input type="text" className="form-control rounded-0" placeholder="Entrer région de recheches" required 
                                   />

                                </div>

                            </div>

                        </div>
                        {/* <label htmlFor="skills" className="mt-5 mb-3"> Compétences :</label>
                        <select id="skills" name="skills" className="form-select" aria-label="Default select example" multiple="multiple" >{skills}</select> */}

                        <div className="form-check">
                            {skills}
                        </div>
                    </div>
                    <button className="mt-5" type="submit" >Suivant</button>

                </form>
            </div>
        </div>
        
    )
}

export default CandidateInfos;
                // <label htmlFor="skills" className="mt-5"> Compétences :</label>
                    // <select name="skills" id="skills" className="form-control" multiple="multiple">
                    //     <option value="" disabled>--- Droit ---</option>
                    //     <option "value " + element.id>Gestion de dossiers</option>
                    //     <option "value " + element.id>Note de synthèse</option>
                    //     <option "value " + element.id>Dissertation</option>
                    //     <option "value " + element.id>Recherche juridique</option>
                    //     <option "value " + element.id>Rédaction juridique</option>
                    //     <option "value " + element.id>Droit des contrats</option>
                    //     <option "value " + element.id>Droit des affaires</option>
                    // </select>