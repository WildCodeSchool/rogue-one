<body>
    <?php
    $team = [
        ['name' =>  "Choiab", 'img' => "", 'description' => "test", 'role' => ""],
        ['name' =>  "Choiab", 'img' => "", 'description' => "", 'role' => ""],
        ['name' =>  "Choiab", 'img' => "", 'description' => "", 'role' => ""]
    ];


    foreach ($team as $member) {
        echo '<div class="testimonial">
        <div class="card">
            <div class="layer"></div>
            <div class="content">
                <p>'.$member['description'].'</p>
                <div class="image"><img src="https://cdn2.iconfinder.com/data/icons/avatar-2/512/oscar_boy-128.png" alt="avatar">
                </div>
                <div class="details">
                    <h2>Someone Famous</h2> <br> <span>Web Designer</span>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>
</body>