<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
            <h2 class="text-center">Notre équipe Dev</h2>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
    </div>
    <div class="row">
        <?php
        $members = [
            [
                "firstname" => "Chouiab",
                "role" => "Développeur Web",
                "img" => "../assets/images/team/member1.png",
                "desc" => "Bonjour, je suis Janah Chouaib, un passionné de développement web âgé de 25 ans. Mon enthousiasme pour l'informatique et la programmation me pousse constamment à explorer de nouveaux horizons. Je trouve un équilibre entre ma passion pour le code et mes autres centres d'intérêt tels que les voyages, le sport et les jeux vidéo. Voyager me permet de découvrir des cultures diverses, tandis que le sport me procure l'énergie nécessaire pour relever les défis du développement web. Les jeux vidéo sont une source de détente et de plaisir dans mon quotidien. Je suis avide d'apprentissage et je considère chaque obstacle comme une opportunité d'acquérir de nouvelles compétences. Ma persévérance, mon courage et ma patience sont les moteurs qui me permettent d'atteindre mes objectifs dans le monde du développement web.",
                "link" => ""
            ],
            [
                "firstname" => "Joël",
                "role" => "Développeur Web",
                "img" => "../assets/images/team/member3.jpg",
                "desc" => "Je suis Joël, un développeur web passionné par la création d'expériences en ligne exceptionnelles. Fort de 3 années d'expérience dans le domaine du développement web, j'ai acquis une expertise approfondie dans la conception, le développement et la maintenance de sites web dynamiques et réactifs.",
                "link" => "joelmayemba@gmail.com"
            ],
            [
                "firstname" => "Kévin",
                "role" => "Développeur Web",
                "img" => "../assets/images/team/member2.png",
                "desc" => "",
                "link" => ""
            ]
        ];

        foreach ($members as $member) {

            echo '<div class="col-md-4">
            <div class="card-box text-center">
                <div class="user-pic">
                    <img src="' . $member["img"] . '" class="img-fluid" alt="User Pic">
                </div>
                <h4>' . $member["firstname"] . '</h4>
                <h6>' . $member["role"] . '</h6>
                <hr>
                <p>' . $member["desc"] . '</p>
                <hr>
                <a href="mailto:' . $member["link"] . '"class="btn">Me contacter</a>
            </div>
        </div>';
        }
        ?>
    </div>
</div>
</div>