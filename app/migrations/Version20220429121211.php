<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220429121211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO book (title, author, publishing_date, category) VALUES ('Hypérion (Intégrale)', 'Dan Simmons', '2014', 'Science Fiction')
,('La Chute d''Hypérion (Intégrale)', 'Dan Simmons', '2015', 'Science Fiction')
,('Collines Noires', 'Dan Simmons', '2014', 'Science Fiction')
,('L''échiquier du Mal', 'Dan Simmons', '2014', 'Romanesque')
,('Dragon Déchu', 'Peter F. Hamilton', '2017', 'Science Fiction')
,('L''Étoile de Pandore, Tome 1: Pandore abusée', 'Peter F. Hamilton', '2008', 'Science Fiction')
,('Le monde s''effondre', 'Chinua Achebe', '1958', 'Romanesque')
,('Orgueil et Préjugés', 'Jane Austen', '1813', 'Romanesque')
,('Le Père Goriot', 'Honoré de Balzac', '1835', 'Romanesque')
,('Fictions', 'Jorge Luis Borges', '1944', 'Romanesque')
,('Les Hauts de Hurlevent', 'Emily Brontë', '1847', 'Romanesque')
,('L''Étranger', 'Albert Camus', '1942', 'Romanesque')
,('Les poèmes de...', 'Paul Celan', '1952', 'Poésie')
,('Voyage au bout de la nuit', 'Louis-Ferdinand Céline', '1932', 'Romanesque')
,('Nostromo', 'Joseph Conrad', '1904', 'Romanesque')
,('Divine Comédie', 'Dante Alighieri', '1300', 'Poésie')
,('Les Grandes Espérances', 'Charles Dickens', '1861', 'Romanesque')
,('Jacques le fataliste et son maître', 'Denis Diderot', '1796', 'Romanesque')
,('Berlin Alexanderplatz', 'Alfred Döblin', '1929', 'Romanesque')
,('Crime et Châtiment', 'Fiodor Dostoïevski', '1866', 'Romanesque')
,('L''Idiot', 'Fiodor Dostoïevski', '1869', 'Romanesque')
,('Les Démons', 'Fiodor Dostoïevski', '1872', 'Romanesque')
,('Les Frères Karamazov', 'Fiodor Dostoïevski', '1880', 'Romanesque')
,('Middlemarch', 'George Eliot', '1871', 'Romanesque')
,('Homme invisible, pour qui chantes-tu ?', 'Ralph Ellison', '1952', 'Romanesque')
,('Absalon, Absalon !', 'William Faulkner', '1936', 'Romanesque')
,('Le Bruit et la Fureur', 'William Faulkner', '1929', 'Romanesque')
,('Madame Bovary', 'Gustave Flaubert', '1857', 'Romanesque')
,('L''Éducation sentimentale', 'Gustave Flaubert', '1869', 'Romanesque')
,('Romancero gitano', 'Federico García Lorca', '1928', 'Poésie')
,('Cent ans de solitude', 'Gabriel García Márquez', '1967', 'Romanesque')
,('L''Amour aux temps du choléra', 'Gabriel García Márquez', '1985', 'Romanesque')
,('Faust', 'Johann Wolfgang von Goethe', '1808', 'Théâtre')
,('Les Âmes mortes', 'Nicolas Gogol', '1842', 'Romanesque')
,('Le Tambour', 'Günter Grass', '1959', 'Romanesque')
,('Diadorim (Grande Sertão: veredas)', 'João Guimarães Rosa', '1956', 'Romanesque')
,('La Faim', 'Knut Hamsun', '1890', 'Romanesque')
,('Le Vieil Homme et la Mer', 'Ernest Hemingway', '1952', 'Romanesque')
,('Une maison de poupée', 'Henrik Ibsen', '1879', 'Théâtre')
,('Ulysse', 'James Joyce', '1922', 'Romanesque')
,('Le Château', 'Franz Kafka', '1926', 'Romanesque')
,('Le Grondement de la montagne', 'Yasunari Kawabata', '1954', 'Romanesque')
,('Alexis Zorba', 'Níkos Kazantzákis', '1946', 'Romanesque')
,('Le Carnet d''or', 'Doris Lessing', '1962', 'Romanesque')
,('Fifi Brindacier', 'Astrid Lindgren', '1945', 'Romanesque')
,('Le Journal d''un fou', 'Lu Xun', '1918', 'Romanesque')
,('Les Fils de la Médina', 'Naguib Mahfouz', '1959', 'Romanesque')
,('Les Buddenbrook', 'Thomas Mann', '1901', 'Romanesque')
,('La Montagne magique', 'Thomas Mann', '1924', 'Romanesque')
,('Moby Dick', 'Herman Melville', '1851', 'Romanesque')
,('Essais', 'Michel de Montaigne', '1595', 'Argumentation')
,('La storia', 'Elsa Morante', '1974', 'Romanesque')
,('Beloved', 'Toni Morrison', '1987', 'Romanesque')
,('Lolita', 'Vladimir Nabokov', '1955', 'Romanesque')
,('1984', 'George Orwell', '1949', 'Romanesque')
,('Le Livre de l''intranquillité', 'Fernando Pessoa', '1982', 'Poésie')
,('Pedro Páramo', 'Juan Rulfo', '1955', 'Romanesque')
,('Le Jardin des fruits', 'Saadi', '1257', 'Poésie')
,('Saison de la migration vers le nord', 'Tayeb Salih', '1971', 'Romanesque')
,('L''Aveuglement', 'José Saramago', '1995', 'Romanesque')
,('Hamlet', 'William Shakespeare', '1603', 'Théâtre')
,('Le Roi Lear', 'William Shakespeare', '1608', 'Théâtre')
,('Othello ou le Maure de Venise', 'William Shakespeare', '1622', 'Théâtre')
,('Le Rouge et le Noir', 'Stendhal', '1830', 'Romanesque')
,('Vie et opinions de Tristram Shandy, gentilhomme', 'Laurence Sterne', '1760', 'Romanesque')
,('La Conscience de Zeno', 'Italo Svevo', '1923', 'Romanesque')
,('Les Voyages de Gulliver', 'Jonathan Swift', '1726', 'Romanesque')
,('Récits divers', 'Anton Tchekhov', '1886', 'Romanesque')
,('Anna Karénine', 'Léon Tolstoï', '1877', 'Romanesque')
,('La Mort d''Ivan Ilitch', 'Léon Tolstoï', '1886', 'Romanesque')
,('Les Aventures de Huckleberry Finn', 'Mark Twain', '1884', 'Romanesque')
,('Feuilles d''herbe', 'Walt Whitman', '1855', 'Poésie')
,('Mrs Dalloway', 'Virginia Woolf', '1925', 'Romanesque')
,('La Promenade au phare', 'Virginia Woolf', '1927', 'Romanesque')
,('Mémoires d''Hadrien', 'Marguerite Yourcenar', '1951', 'Romanesque');");
    }

    public function down(Schema $schema): void
    {
    }
}
