-- INSERIR

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Ana Maria', 'ana@gmail.com', 'senha123', '2021-02-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carlos Junior', 'carlos@gmail.com', '44510', '2021-02-25');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Maria Julia', 'maria@gmail.com', '12345', '2025-02-15');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Felipe Mota', 'felipe@gmail.com', '51438', '2025-05-14');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Eduardo Franco', 'eduardo@gmail.com', '14253', '2025-04-12');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Marcia', 'marcia@gmail.com', '55451', '2025-04-11');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Joana', 'joana@gmail.com', '13132', '2025-06-14');



insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Carros', 2);tb_empresa

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Bolsas', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Tenis' , 8);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Motos', 9);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Dança', 10);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Livros', 11);



insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Colchão', '43998985151', 'Rua dos colchões', 1 );

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)tb_usuario
values
('Empresa Comer bem', '43991915858', 'Rua dos restaurantes', 2 );

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Sports Car', '4333585465', 'Ruas dos carros', 2);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Bolsas Luxo', '43998985252', 'Rua das bolsas', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Nike', '4333226612', 'Ra dos tenis', 8);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Honda', '4333587865', 'Ruas das motos', 9);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Studio', '4333525265', 'Ruas das danças', 10);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Biblioteca', '43998545656', 'Ruas dos livros', 11);



insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1122', '112233', 4500.20, 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '4433', '335566', 5678.89, 2);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa', '5566', '445588', 7850.50, 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Itau', '1144', '775588', 2000.30, 8);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Nubank', '5428', '545425', 6523.45, 9);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa', '8584', '484516', 850, 10);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Nubank', '1214', '857463', 1300.50, 11);



insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-01-10', 45, null, 1, 1, 1, 1);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2021-02-15', 34.15, 'Pagamento adiantado', 2, 2, 2, 2);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2025-05-15', 350.15, null, 3, 2, 3, 2);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2025-05-12', 1250, null, 4, 10, 4, 7);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2025-10-05', 1100, 'Air Force', 5, 11, 5, 8);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2025-12-01', 250, 'Capacete', 6, 12, 6, 9);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2025-11-01', 400, 'Ventos', 8, 13, 8, 11);

