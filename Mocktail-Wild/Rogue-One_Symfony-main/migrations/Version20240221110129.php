<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221110129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Insérer les membres dans la base de données
        $this->addSql("INSERT INTO member (firstname, lastname, role, img, link, description) VALUES 
     ('Chouiab', 'JANAH', 'Product Owner', '../assets/images/team/member1.png', 'https://www.linkedin.com/in/cjanah/', 'Bonjour, je suis Janah Chouaib, un passionné de développement web âgé de 25 ans. Mon enthousiasme pour l\'informatique et la programmation me pousse constamment à explorer de nouveaux horizons. Je trouve un équilibre entre ma passion pour le code et mes autres centres d\'intérêt tels que les voyages, le sport et les jeux vidéo. Voyager me permet de découvrir des cultures diverses, tandis que le sport me procure l\'énergie nécessaire pour relever les défis du développement web. Les jeux vidéo sont une source de détente et de plaisir dans mon quotidien. Je suis avide d\'apprentissage et je considère chaque obstacle comme une opportunité d\'acquérir de nouvelles compétences. Ma persévérance, mon courage et ma patience sont les moteurs qui me permettent d\'atteindre mes objectifs dans le monde du développement web.'),
     ('Joël', 'MAYEMBA', 'Scrum Master', '../assets/images/team/member3.png', 'https://www.linkedin.com/in/mayemba/', 'Je suis Joël, un développeur web passionné par la création d\'expériences en ligne mémorables et fluides. Avec trois années d\'expérience solide dans le domaine du développement web, j\'ai développé une expertise pointue dans la conception, le développement et la maintenance de sites web dynamiques et réactifs. Mon objectif est de combiner mon savoir-faire technique avec ma créativité pour offrir des solutions web innovantes et engageantes.')");
    }


    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE member');
    }
}
