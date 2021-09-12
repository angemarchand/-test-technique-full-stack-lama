# Test Technique PHP/JS LAMACOMPTA

**Le projet**


- _PROJET IMMENSE_

# Les fonctionnalités

Seul l'affichage des compétences fonctionne *http://localhost:3000/profileCandidate*

## BACK LOG

### Préparation du back
Creation de la Base de donné en ligne de commande dans un terminal.

- Création des migrations des différentes tables de notre base de donnée lamatch.
    les differentes tables
    - la table Candidate: ici on va créer une relation **ManyToMany** avec la table skills qui permettra à un candidat de pouvoir choisir autant de skills qu'il veut et inversement plusieurs candidats pourrons avoir un le meme skill et faciliter l'implementation du matching.
        Ainsi symfony va créer une table de relation **skills_candidate
    - la table company: elle va detenir toutes les informations des entreprises
    - la table skills: décrit les compétences des candidats
    - la experiences: décrit les expériences des candidats. Elle est reliée à la table candidat par l'id du candidat.
    - la table formations: décrit le parcours scolaire des candidats. Elle est reliée à la table candidat par l'id du candidat.

    
### Difficultés
Evidemment j'ai préparé toutes les tables comme prévu j'ai fait mes migrations.
- Mais Api platforme ne tient pas compte des **underscores(_)** 
- cette difficulté empeche mon coté client de fonctionner.
- La complexité de l'API platforme

### Préparation du Client

Coté client j'ai une bonne affinité avec le framework react mais je n'ai pas faire mes pages par manque de temps et de cohesion avec le coté back qui n'a pas été bien implementé.


### Suggestions

Différemment des autres platformes de recrutement, tu pourais rajouter une fonctionnalité qui parait anodin mais efficace. Suivi des candidatures et avec un repertoire des entreprises ou le candidat a déjà postulé. Cette fonctionnalité doit rester visible que chez le candidat


