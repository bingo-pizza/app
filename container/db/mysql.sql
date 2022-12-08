create database trabalho default character set utf8;	


use trabalho;						


create table clientes(tel varchar(13), nome varchar (50), primary key (tel));		

create table endereco( id int auto_increment,	logrado text, primary key (id));	


create table pedido(id int auto_increment, dataPedido date, valorTot decimal (10,2),	primary key (id));


create table produto(id int auto_increment, produto varchar(200), preco decimal (10,2),	primary key (id));

create table itens_pedido(IdPedido int,	IdProd int, quantidade int,	valorParcial decimal (10,2));





alter table clientes add column endereco int;	

alter table clientes add foreign key (endereco) references endereco (id);		

alter table pedido add id_cliente varchar(13);

alter table pedido add foreign key (id_cliente) references clientes (tel);	

alter table itens_pedido add foreign key (idpedido) references pedido(id);			

alter table itens_pedido add foreign key (idprod) references produto(id);				