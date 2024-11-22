CREATE TABLE "listUsers"(
    "userId" BIGINT NOT NULL,
    "nom" VARCHAR(255) NOT NULL,
    "prenom" VARCHAR(255) NOT NULL,
    "motdepasse" BIGINT NOT NULL,
    "dateInscript" DATE NOT NULL,
    "note" BIGINT NOT NULL,
    "email" BIGINT NOT NULL
);
ALTER TABLE
    "listUsers" ADD CONSTRAINT "listusers_userid_primary" PRIMARY KEY("userId");
CREATE TABLE "listLivres"(
    "idLivre" BIGINT NOT NULL,
    "useridProprio" BIGINT NOT NULL,
    "UseridPossess" BIGINT NOT NULL,
    "dispo" BINARY(16) NOT NULL,
    "nom" VARCHAR(255) NOT NULL,
    "format" VARCHAR(255) NOT NULL,
    "auteur" VARCHAR(255) NOT NULL,
    "synopsis" VARCHAR(255) NOT NULL,
    "prixCaution" BIGINT NOT NULL,
    "couvThumbnail" VARCHAR(255) NOT NULL,
    "themes" BIGINT NOT NULL,
    "note" BIGINT NOT NULL
);
ALTER TABLE
    "listLivres" ADD CONSTRAINT "listlivres_idlivre_primary" PRIMARY KEY("idLivre");
CREATE INDEX "listlivres_useridproprio_index" ON
    "listLivres"("useridProprio");
CREATE INDEX "listlivres_useridpossess_index" ON
    "listLivres"("UseridPossess");
CREATE TABLE "listThemes"(
    "idTheme" BIGINT NOT NULL,
    "nom" VARCHAR(255) NOT NULL
);
ALTER TABLE
    "listThemes" ADD CONSTRAINT "listthemes_idtheme_primary" PRIMARY KEY("idTheme");
CREATE TABLE "listLivresLusParUserId"(
    "userId" BIGINT NOT NULL,
    "idLivres" BIGINT NOT NULL
);
ALTER TABLE
    "listLivresLusParUserId" ADD CONSTRAINT "listlivreslusparuserid_userid_primary" PRIMARY KEY("userId");
CREATE INDEX "listlivreslusparuserid_idlivres_index" ON
    "listLivresLusParUserId"("idLivres");
CREATE TABLE "listLivresProposesParUserId"(
    "userId" BIGINT NOT NULL,
    "idLivres" BIGINT NOT NULL
);
ALTER TABLE
    "listLivresProposesParUserId" ADD CONSTRAINT "listlivresproposesparuserid_userid_primary" PRIMARY KEY("userId");
CREATE INDEX "listlivresproposesparuserid_idlivres_index" ON
    "listLivresProposesParUserId"("idLivres");
CREATE TABLE "listCommentaires"(
    "idComment" BIGINT NOT NULL,
    "idLivre" BIGINT NOT NULL,
    "userId" BIGINT NOT NULL,
    "commentaire" VARCHAR(255) NOT NULL,
    "dateCommentaire" DATE NOT NULL
);
ALTER TABLE
    "listCommentaires" ADD CONSTRAINT "listcommentaires_idcomment_primary" PRIMARY KEY("idComment");
ALTER TABLE
    "listLivresLusParUserId" ADD CONSTRAINT "listlivreslusparuserid_idlivres_foreign" FOREIGN KEY("idLivres") REFERENCES "listLivres"("idLivre");
ALTER TABLE
    "listLivres" ADD CONSTRAINT "listlivres_themes_foreign" FOREIGN KEY("themes") REFERENCES "listThemes"("idTheme");
ALTER TABLE
    "listLivresLusParUserId" ADD CONSTRAINT "listlivreslusparuserid_userid_foreign" FOREIGN KEY("userId") REFERENCES "listUsers"("userId");
ALTER TABLE
    "listLivresProposesParUserId" ADD CONSTRAINT "listlivresproposesparuserid_idlivres_foreign" FOREIGN KEY("idLivres") REFERENCES "listLivres"("idLivre");
ALTER TABLE
    "listUsers" ADD CONSTRAINT "listusers_userid_foreign" FOREIGN KEY("userId") REFERENCES "listLivresProposesParUserId"("userId");
ALTER TABLE
    "listLivres" ADD CONSTRAINT "listlivres_useridpossess_foreign" FOREIGN KEY("UseridPossess") REFERENCES "listUsers"("nom");
ALTER TABLE
    "listLivres" ADD CONSTRAINT "listlivres_useridproprio_foreign" FOREIGN KEY("useridProprio") REFERENCES "listUsers"("nom");