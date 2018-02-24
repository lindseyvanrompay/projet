drop table if exists suivi;

drop table if exists recette;

drop table if exists boisson;

drop table if exists repas;

drop table if exists utilisateur;

drop table if exists dieteticien;

drop table if exists aliments;

drop table if exists menu;

drop table if exists qualite;

drop table if exists statistiques;

drop table if exists categorie;

drop table if exists conseil;

drop table if exists mets;

drop table if exists observationstatistique;

drop table if exists composerecette;

drop table if exists abonnement;

drop table if exists composerepas;

drop table if exists composemenu;

# -----------------------------------------------------------------------------
#       table : suivi
# -----------------------------------------------------------------------------

create table if not exists suivi
 (
   idsuivi bigint(4) not null  ,
   iddieteticien bigint(4) not null  ,
   idutilisateur bigint(4) not null  ,
   datesuivi date null  ,
   remarque char(255) null  
   , primary key (idsuivi) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : recette
# -----------------------------------------------------------------------------

create table if not exists recette
 (
   idrecette bigint(4) not null  ,
   idutilisateur bigint(4) not null  ,
   nomrecette char(32) null  
   , primary key (idrecette) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : boisson
# -----------------------------------------------------------------------------

create table if not exists boisson
 (
   idboisson bigint(4) not null  ,
   idrecette bigint(4) not null  ,
   nomboisson char(32) null  ,
   calorieboisson bigint(4) null  
   , primary key (idboisson) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : repas
# -----------------------------------------------------------------------------

create table if not exists repas
 (
   idrepas bigint(4) not null  ,
   idutilisateur bigint(4) not null  ,
   idqualite bigint(4) not null  ,
   nomrepas char(32) null  ,
   intitulerepas char(255) null  ,
   calorie bigint(4) null  
   , primary key (idrepas) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : utilisateur
# -----------------------------------------------------------------------------

create table if not exists utilisateur
 (
   idutilisateur bigint(4) not null  ,
   nomutilisateur char(32) null  ,
   prenomutilisateur char(32) null  ,
   adressemailutilisateur char(128) null  ,
   datedenaissance date null  ,
   age bigint(4) null  ,
   pseudoutilisateur char(16) null  ,
   mdputilisateur char(16) null  
   , primary key (idutilisateur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : dieteticien
# -----------------------------------------------------------------------------

create table if not exists dieteticien
 (
   iddieteticien bigint(4) not null  ,
   nomdieteticien char(32) null  ,
   prenomdieteticien char(32) null  ,
   adressemaildieteticien char(128) null  ,
   pseudodieteticien char(16) null  ,
   mdpdieteticien char(16) null  
   , primary key (iddieteticien) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : aliments
# -----------------------------------------------------------------------------

create table if not exists aliments
 (
   idaliment bigint(4) not null  ,
   nomaliment char(32) null  ,
   caloriealiment bigint(4) null  
   , primary key (idaliment) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : menu
# -----------------------------------------------------------------------------

create table if not exists menu
 (
   idmenu bigint(4) not null  ,
   idutilisateur bigint(4) not null  ,
   nommenu char(32) null  
   , primary key (idmenu) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : qualite
# -----------------------------------------------------------------------------

create table if not exists qualite
 (
   idqualite bigint(4) not null  ,
   idstatistique bigint(4) not null  ,
   idutilisateur bigint(4) not null  ,
   avissante char(255) null  ,
   avisapportcalorique char(255) null  ,
   carence char(255) null  
   , primary key (idqualite) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : statistiques
# -----------------------------------------------------------------------------

create table if not exists statistiques
 (
   idstatistique bigint(4) not null  ,
   avissantegroupe char(255) null  ,
   avisapportcaloriquegroupe char(255) null  
   , primary key (idstatistique) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : categorie
# -----------------------------------------------------------------------------

create table if not exists categorie
 (
   idcategorie bigint(4) not null  ,
   nomcategorie char(32) null  
   , primary key (idcategorie) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : conseil
# -----------------------------------------------------------------------------

create table if not exists conseil
 (
   idconseil bigint(4) not null  ,
   idsuivi bigint(4) not null  ,
   iddieteticien bigint(4) not null  ,
   intitule char(255) null  ,
   dateconseil date null  
   , primary key (idconseil) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : mets
# -----------------------------------------------------------------------------

create table if not exists mets
 (
   idmets bigint(4) not null  ,
   idrecette bigint(4) not null  ,
   idcategorie bigint(4) not null  ,
   nommets char(32) null  ,
   caloriemets bigint(4) null  
   , primary key (idmets) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : observationstatistique
# -----------------------------------------------------------------------------

create table if not exists observationstatistique
 (
   iddieteticien bigint(4) not null  ,
   idstatistique bigint(4) not null  ,
   dateobservation date null  
   , primary key (iddieteticien,idstatistique) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : composerecette
# -----------------------------------------------------------------------------

create table if not exists composerecette
 (
   idaliment bigint(4) not null  ,
   idrecette bigint(4) not null  ,
   quantitealiment bigint(4) null  
   , primary key (idaliment,idrecette) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : abonnement
# -----------------------------------------------------------------------------

create table if not exists abonnement
 (
   idutilisateur bigint(4) not null  ,
   iddieteticien bigint(4) not null  ,
   dateabonnement date null  
   , primary key (idutilisateur,iddieteticien) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : composerepas
# -----------------------------------------------------------------------------

create table if not exists composerepas
 (
   idrepas bigint(4) not null  ,
   idboisson bigint(4) not null  ,
   idmenu bigint(4) not null  ,
   quantiteboisson bigint(4) null  ,
   quantitemenu bigint(4) null  
   , primary key (idrepas,idboisson,idmenu) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : composemenu
# -----------------------------------------------------------------------------

create table if not exists composemenu
 (
   idmets bigint(4) not null  ,
   idmenu bigint(4) not null  ,
   quantitemets bigint(4) null  
   , primary key (idmets,idmenu) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       creation des references de table
# -----------------------------------------------------------------------------


alter table suivi 
  add foreign key fk_suivi_dieteticien (iddieteticien)
      references dieteticien (iddieteticien) ;


alter table suivi 
  add foreign key fk_suivi_utilisateur (idutilisateur)
      references utilisateur (idutilisateur) ;


alter table recette 
  add foreign key fk_recette_utilisateur (idutilisateur)
      references utilisateur (idutilisateur) ;


alter table boisson 
  add foreign key fk_boisson_recette (idrecette)
      references recette (idrecette) ;


alter table repas 
  add foreign key fk_repas_utilisateur (idutilisateur)
      references utilisateur (idutilisateur) ;


alter table repas 
  add foreign key fk_repas_qualite (idqualite)
      references qualite (idqualite) ;


alter table menu 
  add foreign key fk_menu_utilisateur (idutilisateur)
      references utilisateur (idutilisateur) ;


alter table qualite 
  add foreign key fk_qualite_statistiques (idstatistique)
      references statistiques (idstatistique) ;


alter table qualite 
  add foreign key fk_qualite_utilisateur (idutilisateur)
      references utilisateur (idutilisateur) ;


alter table conseil 
  add foreign key fk_conseil_suivi (idsuivi)
      references suivi (idsuivi) ;


alter table conseil 
  add foreign key fk_conseil_dieteticien (iddieteticien)
      references dieteticien (iddieteticien) ;


alter table mets 
  add foreign key fk_mets_recette (idrecette)
      references recette (idrecette) ;


alter table mets 
  add foreign key fk_mets_categorie (idcategorie)
      references categorie (idcategorie) ;


alter table observationstatistique 
  add foreign key fk_observationstatistique_dieteticien (iddieteticien)
      references dieteticien (iddieteticien) ;


alter table observationstatistique 
  add foreign key fk_observationstatistique_statistiques (idstatistique)
      references statistiques (idstatistique) ;


alter table composerecette 
  add foreign key fk_composerecette_aliments (idaliment)
      references aliments (idaliment) ;


alter table composerecette 
  add foreign key fk_composerecette_recette (idrecette)
      references recette (idrecette) ;


alter table abonnement 
  add foreign key fk_abonnement_utilisateur (idutilisateur)
      references utilisateur (idutilisateur) ;


alter table abonnement 
  add foreign key fk_abonnement_dieteticien (iddieteticien)
      references dieteticien (iddieteticien) ;


alter table composerepas 
  add foreign key fk_composerepas_repas (idrepas)
      references repas (idrepas) ;


alter table composerepas 
  add foreign key fk_composerepas_boisson (idboisson)
      references boisson (idboisson) ;


alter table composerepas 
  add foreign key fk_composerepas_menu (idmenu)
      references menu (idmenu) ;


alter table composemenu 
  add foreign key fk_composemenu_mets (idmets)
      references mets (idmets) ;


alter table composemenu 
  add foreign key fk_composemenu_menu (idmenu)
      references menu (idmenu) ;

