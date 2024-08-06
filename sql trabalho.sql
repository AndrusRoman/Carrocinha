create database Carrocinha;
use Carrocinha;
create table Pessoa
(
		id int auto_increment,
        nome varchar(100),
        email varchar(50),
        endereco varchar(100),
        bairro varchar(50),
        cep varchar(10),
        id_cidade int,
        primary key (id),
        constraint fk_PessoaCidade foreign key(id_cidade) references Cidade(id)	
);
create table Animal
(
		id_animal int auto_increment,
        nome_animal varchar(100),
        especie varchar(100),
        raca varchar(100),
        data_nascimento varchar(15),
        idade int,
        castrado bool,
        id_pessoa int,
        primary key (id_animal),
        constraint fk_AnimalPessoa foreign key(id_pessoa) references Pessoa(id)
);
create table Cidade
(
		id int auto_increment,
		nome_cidade varchar(100),
		estado varchar(02),
		primary key (id)
);
select * From pessoa;
select * from animal;
