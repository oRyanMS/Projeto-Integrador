create database DadosLogin;
use DadosLogin;

create table usuarios (

    Usuario varchar (50) not null,
    Senha varchar(50) not null,
    Email varchar(50) not null,

    constraint Pk_Usuario primary key (Usuario)
);