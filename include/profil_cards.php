<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
            <h2 class="text-center">Notre équipe Dev</h2>
            <p class="text-center"></p>
        </div>
    </div>
    <div class="row">
        <?php
        $members = [
            [
                "firstname" => "Chouaib",
                "role" => "Développeur Web",
                "img" => "../assets/images/team/member1.png",
                "desc" => "Bonjour, je suis Janah Chouaib, un passionné de développement web. Mon enthousiasme pour l'informatique et la programmation me pousse constamment à explorer de nouveaux
                 horizons.",
                "email" => "janahchouaib@gmail.com",
                "link" => "https://www.linkedin.com/in/cjanah/"
            ],
            [
                "firstname" => "Joël",
                "role" => "Développeur Web",
                "img" => "../assets/images/team/member3.jpg",
                "desc" => "Je suis Joël, un développeur web passionné par la création d'expériences en ligne exceptionnelles. Fort de 3 années d'expérience dans le domaine du développement web, j'ai acquis une expertise approfondie dans la conception, le développement et la maintenance de sites web dynamiques et réactifs.",
                "email" => "joelmayemba@gmail.com",
                "link" => "https://www.linkedin.com/in/mayemba/"
            ],
            [
                "firstname" => "Kévin",
                "role" => "Développeur Web",
                "img" => "../assets/images/team/member2.png",
                "desc" => "",
                "email" => "",
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
                <h5>' . $member["role"] . '</h5>
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