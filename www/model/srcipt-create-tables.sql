CREATE TABLE compras.meses_ano
( mes_id INT(03) NOT NULL AUTO_INCREMENT ,
mes VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (mes_id)) ENGINE = InnoDB;

CREATE TABLE compras.categoria
( categ_id INT(03) NOT NULL AUTO_INCREMENT ,
    categoria VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
    PRIMARY KEY (categ_id)) ENGINE = InnoDB;

CREATE TABLE compras.produto
( prod_id INT NOT NULL AUTO_INCREMENT ,
    produto VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
    quantidade INT(10) NOT NULL,
 	mes_id int(3) NOT NULL,
  	categ_id int(3) NOT NULL,
    PRIMARY KEY (prod_id),
	FOREIGN KEY(mes_id) REFERENCES meses_ano(mes_id),
 	FOREIGN KEY(categ_id) REFERENCES categoria(categ_id)

) ENGINE = InnoDB;